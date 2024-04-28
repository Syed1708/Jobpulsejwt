<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Job</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Title *</label>
                                <input type="text" class="form-control" id="jobTitle">

                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="jobDescription">

                                <label class="form-label">Category</label>
                                <select type="text" class="form-control form-select" id="jobCategory">
                                    <option value="">Select Category</option>
                                </select>

                                <label class="form-label">Mode *</label>
                                <select class="form-control" id="jobMode">
                                    <option value="remote">Remote</option>
                                    <option value="onsite">On Site</option>
                                </select>

                                <label class="form-label">Type *</label>
                                <select class="form-control" id="jobType">
                                    <option value="fulltime">Full Time</option>
                                    <option value="parttime">Part Time</option>
                                </select>

                                <label class="form-label">Location *</label>
                                <select class="form-control" id="jobLocation">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="chitagang">Chitagang</option>
                                    <option value="rajshashi">Rajshashi</option>
                                </select>

                                 {{-- I lost my one day for this --}}
                                {{-- I here i strted the div then not close edit modal not works properly --}}
                                {{--Solution close the div <div class="mb-4">  --}}
                                  {{-- So Be carefull colse the div or any HTML tag --}}
                                    <label class="block text-sm font-medium">Tags</label>
                                    <div class="flex flex-wrap" id="tags-container">
                                        <!-- Each checkbox has a unique value corresponding to a tag -->
                                        <label class="inline-flex items-center mr-4">
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="PHP">
                                            <span class="ml-2">PHP</span>
                                        </label>
                                        
                                        <label class="inline-flex items-center mr-4">
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="JS">
                                            <span class="ml-2">JS</span>
                                        </label>
                                
                                        <label class="inline-flex items-center mr-4">
                                            <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="Python">
                                            <span class="ml-2">Python</span>
                                        </label>
                                    </div>

                                    <label class="form-label">Salary *</label>
                                    <input type="text" class="form-control" id="jobsalary">
                                    
                                <label class="form-label">Benifits *</label>
                                <input type="text" class="form-control" id="benifits">
                                
                                <label class="form-label">Deadline *</label>
                                <input type="date" class="form-control" id="deadline">
                                
                                
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="jobStatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
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
        let res = await axios.get("/list-category")
        res.data.data.forEach(function (item,i) {
            let option=`<option value="${item['id']}">${item['name']}</option>`
            $("#jobCategory").append(option);
        })
    }

    async function Save() {

        let jobTitle = document.getElementById('jobTitle').value;
        let jobDescription = document.getElementById('jobDescription').value;
        let jobCategory = document.getElementById('jobCategory').value;
        let jobMode = document.getElementById('jobMode').value;
        let jobType = document.getElementById('jobType').value;
        let jobLocation = document.getElementById('jobLocation').value;
        let jobsalary = document.getElementById('jobsalary').value;
        let benifits = document.getElementById('benifits').value;
        let deadline = document.getElementById('deadline').value;
        let jobStatus = document.getElementById('jobStatus').value;

        // alert(jobCategory)
        let selecttags = [];
        document.querySelectorAll('#tags-container input[name="tags[]"]:checked').forEach(function (checkbox) {
            selecttags.push(checkbox.value);
        });

        if (jobTitle.length === 0) {
            errorToast("Title Required !");
        } 
        else if (jobDescription.length === 0) {
            errorToast("Description Required !");
        }
        else if (selecttags.length === 0) {
            errorToast("Tag Required !");
        }
        else if (jobCategory.length === 0) {
            errorToast("Category Required !");
        }
         else if (jobMode.length === 0) {
            errorToast("job mode Required !");
        }
         else if (jobType.length === 0) {
            errorToast("job type Required !");
        } 
         else if (jobsalary.length === 0) {
            errorToast("job Salary Required !");
        } 
        else if (jobLocation.length === 0) {
            errorToast("Job location Required !");
        }
        else if (benifits.length === 0) {
            errorToast("Job benifits Required !");
        } 
        else if (deadline.length === 0) {
            errorToast("Job deadline Required !");
        }   
        else if (jobStatus.length === 0) {
            errorToast(" Status Required !");
        } else {
            document.getElementById('modal-close').click();
            let formData=new FormData();
            // formData.append('id',updateID)
            formData.append('title',jobTitle)
            formData.append('description',jobDescription)
            formData.append('category_id',jobCategory)
            // formData.append('tags',selecttags)
            selecttags.forEach(tag => {
                formData.append('tags[]', tag);
            });
            formData.append('mode',jobMode)
            formData.append('type',jobType)
            formData.append('location',jobLocation)
            formData.append('salary',jobsalary)
            formData.append('benifits',benifits)
            formData.append('deadline',deadline)
            formData.append('status',jobStatus)

            showLoader();
            let res = await axios.post("/create-job",formData);
            // alert(res)
            hideLoader();

            if (res.status === 201) {
                successToast('Job created successfully');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
                // document.getElementById("create-modal");
            }
        }


    }
</script>
