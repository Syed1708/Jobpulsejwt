<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Job</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                
                                <label class="form-label">Title *</label>
                                <input type="text" class="form-control" id="updatejobTitle">

                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="updatejobDescription">

                                <label class="form-label">Category</label>
                                <select type="text" class="form-control form-select" id="updatejobCategory">
                                    <option value="">Select Category</option>
                                </select>

                                <label class="form-label">Mode *</label>
                                <select class="form-control" id="updatejobMode">
                                    <option value="remote">Remote</option>
                                    <option value="onsite">On Site</option>
                                </select>

                                <label class="form-label">Type *</label>
                                <select class="form-control" id="updatejobType">
                                    <option value="fulltime">Full Time</option>
                                    <option value="parttime">Part Time</option>
                                </select>

                                <label class="form-label">Location *</label>
                                <select class="form-control" id="updatejobLocation">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="chitagang">Chitagang</option>
                                    <option value="rajshashi">Rajshashi</option>
                                </select>

                                
                                    <label class="block text-sm font-medium">Tags</label>
                                    <div class="flex flex-wrap" id="update-tags-container">
                                        <!-- Each checkbox has a unique value corresponding to a tag -->
                                        
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="PHP">
                                            <span class="ml-2">PHP</span>
                                       
                                        
                                        
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="JS">
                                            <span class="ml-2">JS</span>
                                        
                                
                                        
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="Python">
                                            <span class="ml-2">Python</span>
                                        
                                    </div>

                                    <label class="form-label">Salary *</label>
                                    <input type="text" class="form-control" id="updatejobsalary">

                                <label class="form-label">Benifits *</label>
                                <input type="text" class="form-control" id="updatebenifits">
                                
                                <label class="form-label">Deadline *</label>
                                <input type="date" class="form-control" id="updatedeadline">
                                
                                
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="updatejobStatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>

                                <input type="hidden" id="updateID">
                            
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
        let res = await axios.get("/list-category")
        res.data.data.forEach(function (item,i) {
            let option=`<option value="${item['id']}">${item['name']}</option>`
            $("#updatejobCategory").append(option);
        })
    } 
    
    async function fillJobUpdateForm(id) {
        document.getElementById('updateID').value = id;
        
        showLoader();
        // fetch all job cat
        await UpdateFillCategoryDropDown();

        let res = await axios.post("/job-by-id", { id: id });
        // console.log(res.data.data['title']);
        hideLoader();

        document.getElementById('updatejobTitle').value = res.data.data['title'];
        document.getElementById('updatejobDescription').value = res.data.data['description'];

        document.getElementById('updatejobCategory').value = res.data.data['category_id'];
        document.getElementById('updatejobMode').value = res.data.data['mode'];
        document.getElementById('updatejobType').value = res.data.data['type'];
        document.getElementById('updatejobsalary').value = res.data.data['salary'];

        document.getElementById('updatejobLocation').value = res.data.data['location'];
        document.getElementById('updatebenifits').value = res.data.data['benifits'];
        document.getElementById('updatedeadline').value = res.data.data['deadline'];

        document.getElementById('updatejobStatus').value = res.data.data['status'];

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

        let updateID = document.getElementById('updateID').value;
        let updatejobTitle = document.getElementById('updatejobTitle').value;
        let updatejobDescription = document.getElementById('updatejobDescription').value;
        let updatejobCategory = document.getElementById('updatejobCategory').value;
        let updatejobMode = document.getElementById('updatejobMode').value;
        let updatejobType = document.getElementById('updatejobType').value;
        let updatejobLocation = document.getElementById('updatejobLocation').value;
        let updatebenifits = document.getElementById('updatebenifits').value;
        let updatedeadline = document.getElementById('updatedeadline').value;
        let updatejobStatus = document.getElementById('updatejobStatus').value;
        let updatejobsalary = document.getElementById('updatejobsalary').value;

        let updatedTags = [];
        document.querySelectorAll('#update-tags-container input[name="tags[]"]:checked').forEach(function (checkbox) {
            updatedTags.push(checkbox.value);
        });

        if (updatejobTitle.length === 0) {
            errorToast("Title Required !");
        } 
        else if (updatejobDescription.length === 0) {
            errorToast("description Required !");
        }
        else if (updatedTags.length === 0) {
            errorToast("tag Required !");
        }
        else if (updatejobCategory.length === 0) {
            errorToast("Category Required !");
        }
        else if (updatejobMode.length === 0) {
            errorToast("updatejob mode Required !");
        }
        else if (updatejobType.length === 0) {
            errorToast("updatejob type Required !");
        } 
        else if (updatejobLocation.length === 0) {
            errorToast("Job location Required !");
        }
        else if (updatejobsalary.length === 0) {
            errorToast("Job salary Required !");
        }
        else if (updatebenifits.length === 0) {
            errorToast("Job benifits Required !");
        } 
        else if (updatedeadline.length === 0) {
            errorToast("Job deadline Required !");
        }   
        else if (updatejobStatus.length === 0) {
            errorToast(" Status Required !");
        } else {
            document.getElementById('modal-close').click();

            let formData=new FormData();
            formData.append('id',updateID)
            formData.append('title',updatejobTitle)
            formData.append('description',updatejobDescription)
            formData.append('category_id',updatejobCategory)
            
            formData.delete('tags[]'); // Remove existing tags from FormData
            updatedTags.forEach(tag => {
                formData.append('tags[]', tag); // Add updated tags to FormData
            });
            formData.append('mode',updatejobMode)
            formData.append('type',updatejobType)
            formData.append('location',updatejobLocation)
            formData.append('salary',updatejobsalary)
            formData.append('benifits',updatebenifits)
            formData.append('deadline',updatedeadline)
            formData.append('status',updatejobStatus)

            showLoader();
            let res = await axios.post("/update-job",formData);
            hideLoader();

            if (res.status === 200) {
                successToast('Job updated successfully');
                document.getElementById("update-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
            }
        }






}

</script>
