<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Title *</label>
                                <input type="text" class="form-control" id="blogTitle">

                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="blogDescription">

                                <label class="form-label">Category</label>
                                <select type="text" class="form-control form-select" id="blogCategory">
                                    <option value="">Select Category</option>
                                </select>

                        
                                 {{-- I lost my one day for this --}}
                                {{-- I here i strted the div then not close edit modal not works properly --}}
                                {{--Solution close the div <div class="mb-4">  --}}
                                  {{-- So Be carefull colse the div or any HTML tag --}}
                                    <label class="block text-sm font-medium">Tags</label>
                                    <div class="flex flex-wrap" id="tags-container">
                                        
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="PHP">
                                            <span class="ml-2">PHP</span>
                                       
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="JS">
                                            <span class="ml-2">JS</span>
                                        
                                
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="Python">
                                            <span class="ml-2">Python</span>
                                        
                                    </div>
                                
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="blogStatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>

                                <br/>
                                <img class="w-15" id="newImg" src="{{asset('images/default.jpg')}}"/>
                                <br/>

                                <label class="form-label">Image</label>
                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="featuredImage">  


                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn bg-gradient-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script>

    FillCategoryDropDown();

    async function FillCategoryDropDown(){
        let res = await axios.get("/list-blog-category")
        res.data.data.forEach(function (item,i) {
            let option=`<option value="${item['id']}">${item['name']}</option>`
            $("#blogCategory").append(option);
        })
    }

    async function Save() {

        let blogTitle = document.getElementById('blogTitle').value;
        let blogDescription = document.getElementById('blogDescription').value;
        let blogCategory = document.getElementById('blogCategory').value;
        let blogStatus = document.getElementById('blogStatus').value;
        let featuredImage = document.getElementById('featuredImage').files[0];

        let selecttags = [];
        document.querySelectorAll('#tags-container input[name="tags[]"]:checked').forEach(function (checkbox) {
            selecttags.push(checkbox.value);
        });

        if (blogTitle.length === 0) {
            errorToast("Title Required !");
        } 
        else if (blogDescription.length === 0) {
            errorToast("Description Required !");
        }
        else if (selecttags.length === 0) {
            errorToast("Tag Required !");
        }
        else if (blogCategory.length === 0) {
            errorToast("Category Required !");
        }
         else if (!featuredImage) {
            errorToast("Image Required !");
        }
           
        else if (blogStatus.length === 0) {
            errorToast(" Status Required !");
        } else {
            document.getElementById('modal-close').click();

            let formData=new FormData();
            formData.append('title',blogTitle)
            formData.append('description',blogDescription)
            formData.append('category',blogCategory)
            // formData.append('tags',selecttags)
            selecttags.forEach(tag => {
                formData.append('tags[]', tag);
            });
            formData.append('featured_image',featuredImage)
            formData.append('status',blogStatus)

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post("/create-blog",formData,config);
            hideLoader();

            if (res.status === 201) {
                successToast('Blog created successfully');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
                // document.getElementById("create-modal");
            }
        }


    }
</script>
