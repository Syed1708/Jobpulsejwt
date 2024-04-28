<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>Company Profile</h4>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                             
                            <div class="col-md-6 p-2">
                                <label>Company Name</label>
                                <input id="name" placeholder="First Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-12 p-2">
                                <label class="inline-block">Description</label>
                            
                                <textarea name="description" id="description" cols="60" rows="10"></textarea>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Mobile Number</label>
                                <input id="mobile" placeholder="Mobile" class="form-control" type="mobile"/>
                            </div>
                            </div>
   
                            <div class="col-md-4 p-2">
                                <!-- Display the current image -->
                                <label class="form-label mt-2">Current Image</label>
                                <img class="w-100" id="currentImage" src="" alt="Current Image">
                            
                                <br/>
                                <label class="form-label mt-2">New logo</label>
                                <input type="file" class="form-control" id="logoImgUpdate">
                                
                                <!-- Hidden input for current image path -->
                                <input type="hidden" id="currentImagePath">
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Email</label>
                                <input id="email" placeholder="Email" class="form-control" type="email"/>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="onUpdate()" class="btn mt-3 w-100  bg-gradient-primary">Update</button>
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
        let res=await axios.get("/company/company-profile")
        console.log(res);
        hideLoader();
        if(res.status===200 && res.data['status']==='success'){
            let data=res.data['data'];
            console.log(data);
            document.getElementById('email').value=data['email'];
            document.getElementById('name').value=data['name'];
            document.getElementById('description').value=data['description'];
            document.getElementById('mobile').value=data['mobile'];
            
           // Get the base URL of your application
           const baseUrl = window.location.origin;
            // Get the image path from the data
            const imagePath = data['logo'];
            // Construct the full URL for the image
            const imageUrl = `${baseUrl}/${imagePath}`;

            // Set the src attribute of the img element
            document.getElementById('currentImage').src = imageUrl;
            document.getElementById('currentImagePath').value = data['logo'];
            //after reloading the page aboutImgUpdate will be null
            document.getElementById('logoImgUpdate').value = '';
        }
        else{
            errorToast(res.data['message'])
        }

    }

    async function onUpdate() {

        let email = document.getElementById('email').value;
        let name = document.getElementById('name').value;
        let description = document.getElementById('description').value;
        let mobile = document.getElementById('mobile').value;
        let currentImagePath = document.getElementById('currentImagePath').value;
        let logoImgUpdate = document.getElementById('logoImgUpdate').files[0];


        if(name.length===0){
            errorToast('Name is required')
        }
        else if(description.length===0){
            errorToast(' Description is required')
        }
        else if(mobile.length===0){
            errorToast('Mobile is required')
        }
        else if(email.length===0){
            errorToast('email is required')
        }
        else{
            showLoader();

            let formData = new FormData();
            formData.append('name', name);
            formData.append('description', description);
            formData.append('mobile', mobile);
            formData.append('email', email);
            formData.append('logo', logoImgUpdate);
            formData.append('file_path', currentImagePath);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }
            let res=await axios.post("/company/company-update",formData, config)
            hideLoader();
            if(res.status===200 && res.data['status']==='success'){
                successToast(res.data['message']);
                await getProfile();
            }
            else{
                errorToast(res.data['message'])
            }
        }
    }

</script>

