<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>Job Page</h4>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                           
                            
                            <div class="col-md-4 p-2">
                                <!-- Display the current image -->
                                <label class="form-label mt-2">Current Banner</label>
                                <img class="w-100" id="currentImage" src="" alt="Current Image">
                            
                                <br/>
                                <label class="form-label mt-2">New Banner</label>
                                <input type="file" class="form-control" id="jobImgUpdate">
                                
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
        let res = await axios.get("/job-details");
        hideLoader();
        if(res.status === 200 && res.data['status'] === 'success'){
            let data = res.data['data'];
            // Set the src attribute of the img element
            document.getElementById('currentImage').src = data['banner'];
            document.getElementById('currentImagePath').value = data['banner'];
            //after reloading the page jobImgUpdate will be null
            document.getElementById('jobImgUpdate').value = '';
        }
        else{
            errorToast(res.data.data['message'])
        }
    }



    async function onUpdate() {
        let currentImagePath = document.getElementById('currentImagePath').value;
        let jobImgUpdate = document.getElementById('jobImgUpdate').files[0];

 

            showLoader();
            // Use FormData to send the file and other form data
            let formData = new FormData();
            formData.append('banner', jobImgUpdate);
            formData.append('file_path', currentImagePath);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            let res = await axios.post("/update-jobpage", formData, config);
            hideLoader();
            if (res.status === 200 && res.data['status'] === 'success') {
                successToast(res.data['message']);
                await getProfile();
            } else {
                errorToast(res.data['message'])
            }
        
    }
</script>
