<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Page</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Page Title *</label>
                                <input type="text" class="form-control" id="name">

                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="description">

                    
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

        let name = document.getElementById('name').value;
        let description = document.getElementById('description').value;


        if (name.length === 0) {
            errorToast("Title Required !");
        } 
        else if (description.length === 0) {
            errorToast("Description Required !");
        } else {
            document.getElementById('modal-close').click();
            let formData=new FormData();
            // formData.append('id',updateID)
            formData.append('name',name)
            formData.append('description',description)

            showLoader();
            let res = await axios.post("/create-page",formData);
            hideLoader();

            if (res.status === 201) {
                successToast('Page created successfully');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
                // document.getElementById("create-modal");
            }
        }


    }
</script>
