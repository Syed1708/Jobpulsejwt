<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>Contact Page</h4>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-md-6 p-2">
                                <label>Address</label>
                                <input id="address" placeholder="Address" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-12 p-2">
                                <label class="inline-block">Email</label>
                                <textarea name="email" id="email" cols="60" rows="10"></textarea>
                            </div>
                            <div class="col-md-12 p-2">
                                <label class="inline-block">Phone</label>
                                <textarea name="phone" id="phone" cols="60" rows="10"></textarea>
                            </div>
                            <div class="col-md-4 p-2">
                                <!-- Display the current image -->
                                <label class="form-label mt-2">Current Banner</label>
                                <img class="w-100" id="currentImage" src="" alt="Current Image">
                            
                                <br/>
                                <label class="form-label mt-2">New Banner</label>
                                <input type="file" class="form-control" id="contactImgUpdate">
                                
                                <!-- Hidden input for current image path -->
                                <input type="hidden" id="currentImagePath">
                            </div>
                        </div>

                        </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="onUpdate()" class="btn mt-3 w-100 bg-gradient-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    getProfile();
    async function getProfile(){
        
        showLoader();
        let res = await axios.get("/contact-details");
        hideLoader();
        if(res.status === 200 && res.data['status'] === 'success'){
            let data = res.data['data'];
            document.getElementById('address').value = data['address'];
            document.getElementById('email').value = data['email'];
            document.getElementById('phone').value = data['phone'];
            // Set the src attribute of the img element
            document.getElementById('currentImage').src = data['banner'];
            document.getElementById('currentImagePath').value = data['banner'];
            //after reloading the page contactImgUpdate will be null
            document.getElementById('contactImgUpdate').value = '';
        }
        else{
            errorToast(res.data.data['message'])
        }
    }



    async function onUpdate() {
        let address = document.getElementById('address').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let currentImagePath = document.getElementById('currentImagePath').value;
        let contactImgUpdate = document.getElementById('contactImgUpdate').files[0];

        if (email.length === 0) {
            errorToast('Email is required')
        } else if (address.length === 0) {
            errorToast(' Address is required')
        } else if (phone.length === 0) {
            errorToast(' phone is required')
        } else {
            showLoader();
            // Use FormData to send the file and other form data
            let formData = new FormData();
            formData.append('address', address);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('banner', contactImgUpdate);
            formData.append('file_path', currentImagePath);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            let res = await axios.post("/update-contact", formData, config);
            hideLoader();
            if (res.status === 200 && res.data['status'] === 'success') {
                successToast(res.data['message']);
                await getProfile();
            } else {
                errorToast(res.data['message'])
            }
        }
    }
</script>
