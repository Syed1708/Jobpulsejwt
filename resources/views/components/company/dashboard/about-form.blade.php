<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>About Page</h4>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-md-6 p-2">
                                <label>Title</label>
                                <input id="title" placeholder="Title" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-12 p-2"> 
                                <label class="inline-block">History</label>
                                <textarea name="history" id="history" cols="60" rows="10"></textarea>
                            </div>
                            <div class="col-md-12 p-2">
                                <label class="inline-block">Vision</label>
                                <textarea name="vision" id="vision" cols="60" rows="10"></textarea>
                            </div>
                            <div class="col-md-4 p-2">
                                <!-- Display the current image -->
                                <label class="form-label mt-2">Current Banner</label>
                                <img class="w-100" id="currentImage" src="" alt="Current Image">
                            
                                <br/>
                                <label class="form-label mt-2">New Banner</label>
                                <input type="file" class="form-control" id="aboutImgUpdate">
                                
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
        let res = await axios.get("/user-about");
        hideLoader();
        if(res.status === 200 && res.data['status'] === 'success'){
            let data = res.data['data'];
            document.getElementById('title').value = data['title'];
            document.getElementById('history').value = data['history'];
            document.getElementById('vision').value = data['vision'];
            // Set the src attribute of the img element
            document.getElementById('currentImage').src = data['banner'];
            document.getElementById('currentImagePath').value = data['banner'];
            //after reloading the page aboutImgUpdate will be null
            document.getElementById('aboutImgUpdate').value = '';
        }
        else{
            errorToast(res.data.data['message'])
        }
    }



    async function onUpdate() {
        let title = document.getElementById('title').value;
        let history = document.getElementById('history').value;
        let vision = document.getElementById('vision').value;
        let currentImagePath = document.getElementById('currentImagePath').value;
        let aboutImgUpdate = document.getElementById('aboutImgUpdate').files[0];

        if (history.length === 0) {
            errorToast('History is required')
        } else if (title.length === 0) {
            errorToast(' Title is required')
        } else if (vision.length === 0) {
            errorToast(' Vision is required')
        } else {
            showLoader();
            // Use FormData to send the file and other form data
            let formData = new FormData();
            formData.append('title', title);
            formData.append('history', history);
            formData.append('vision', vision);
            formData.append('banner', aboutImgUpdate);
            formData.append('file_path', currentImagePath);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            let res = await axios.post("/update-about", formData, config);
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
