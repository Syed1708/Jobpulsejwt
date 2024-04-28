<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Blog</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                
                                <label class="form-label">Title *</label>
                                <input type="text" class="form-control" id="updateblogTitle">

                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="updateblogDescription">

                                <label class="form-label">Category</label>
                                <select type="text" class="form-control form-select" id="updateblogCategory">
                                    <option value="">Select Category</option>
                                </select>

                                
                                    <label class="form-label">Tags</label>
                                    <div class="flex flex-wrap" id="update-tags-container">
                                        <!-- Each checkbox has a unique value corresponding to a tag -->
                                        
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="PHP">
                                            <span class="ml-2">PHP</span>
                                       
                                        
                                        
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="JS">
                                            <span class="ml-2">JS</span>
                                        
                                
                                        
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="Python">
                                            <span class="ml-2">Python</span>
                                        
                                    </div>

                                
                        
                                
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="updateblogStatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>

                                <br/>
                                <img class="w-15" id="oldImg" src="{{asset('images/default.jpg')}}"/>
                                <br/>
                                <label class="form-label mt-2">Image</label>
                                <input oninput="oldImg.src=window.URL.createObjectURL(this.files[0])" 
                                 type="file" class="form-control" id="blogImgUpdate">

                                <input type="text" class="d-none" id="updateID">
                                <input type="text" class="d-none" id="filePath">
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="update-modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="update()" id="update-btn" class="btn bg-gradient-success" >Update</button>
            </div>
        </div>
    </div>
</div>


<script>

    // load category 
    async function UpdateFillCategoryDropDown(){
        let res = await axios.get("/list-blog-category")
        res.data.data.forEach(function (item,i) {
            let option=`<option value="${item['id']}">${item['name']}</option>`
            $("#updateblogCategory").append(option);
        })
    }
    
    async function FillUpblogUpdateForm(id,filePath) {
        document.getElementById('updateID').value = id;
        document.getElementById('filePath').value=filePath;
        document.getElementById('oldImg').src=filePath;
        
        showLoader();
        // fetch all blog cat
        await UpdateFillCategoryDropDown();
        let res = await axios.post("/blog-by-id", { id: id });
        // console.log(res.data.data['title']);
        hideLoader();

        document.getElementById('updateblogTitle').value = res.data.data['title'];
        document.getElementById('updateblogDescription').value = res.data.data['description'];

        document.getElementById('updateblogCategory').value = res.data.data['category'];

        document.getElementById('updateblogStatus').value = res.data.data['status'];

        let selectedTags = res.data.data['tags'];

    // Mark checkboxes as checked based on selected tags
    selectedTags.forEach(tag => {
        // Ensure that the tag value is not null or undefined
        if (tag) {
            const checkbox = document.querySelector(`#update-tags-container input[value="${tag}"]`);
            // console.log(checkbox);
            if (checkbox) {
                checkbox.checked = true;
            }
        }
    });


    }


async function update() {

        let updateblogTitle = document.getElementById('updateblogTitle').value;
        let updateblogDescription = document.getElementById('updateblogDescription').value;
        let updateblogCategory = document.getElementById('updateblogCategory').value;
        let updateblogStatus = document.getElementById('updateblogStatus').value;
        let updateID=document.getElementById('updateID').value;
        let filePath=document.getElementById('filePath').value;
        let blogImgUpdate = document.getElementById('blogImgUpdate').files[0];

        let updatedTags = [];
        document.querySelectorAll('#update-tags-container input[name="tags[]"]:checked').forEach(function (checkbox) {
            updatedTags.push(checkbox.value);
        });

        if (updateblogTitle.length === 0) {
            errorToast("Title Required !");
        } 
        else if (updateblogDescription.length === 0) {
            errorToast("description Required !");
        }
        else if (updatedTags.length === 0) {
            errorToast("tag Required !");
        }
        else if (updateblogCategory.length === 0) {
            errorToast("Category Required !");
        }
          
        else if (updateblogStatus.length === 0) {
            errorToast(" Status Required !");
        } else {
            document.getElementById('modal-close').click();

            let formData=new FormData();
            formData.append('id',updateID)
            formData.append('title',updateblogTitle)
            formData.append('description',updateblogDescription)
            formData.append('category',updateblogCategory)
            formData.append('featured_image',blogImgUpdate)
            formData.append('file_path',filePath)
            
            formData.delete('tags[]'); // Remove existing tags from FormData
            updatedTags.forEach(tag => {
                formData.append('tags[]', tag); // Add updated tags to FormData
            });
            formData.append('status',updateblogStatus)

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post("/update-blog",formData,config);
            // console.log(res.data.status);
            hideLoader();

            if (res.status === 200 && res.data.status==="success") {
                successToast('Request completed');
                document.getElementById("update-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
            }
        }






}

</script>
