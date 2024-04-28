<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Job Category</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" id="jcName">
                                <label class="form-label">Description </label>
                                <input type="text" class="form-control" id="jcDescription">
                        
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="jcStatus">
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
    

    async function Save() {

        let jcName = document.getElementById('jcName').value;
        let jcDescription = document.getElementById('jcDescription').value;
        let jcStatus = document.getElementById('jcStatus').value;

        if (jcName.length === 0) {
            errorToast(" Name Required !");
        } else if (jcDescription.length === 0) {
            errorToast("Description is Required !");
        
        } else {
            document.getElementById('modal-close').click();

            showLoader();
            let res = await axios.post("/create-category", {
                name: jcName,
                description: jcDescription,
                status: jcStatus
            });
            hideLoader();

            if (res.status === 201) {
                successToast('Job Cat created successfully');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
            }
        }


        



    }

    
</script>
