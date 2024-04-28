<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Plugin</h5>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" id="pluginName">
                                <div id="name-error" class="text-danger"></div>

                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" id="pluginDesc">
                                
                            
                                <label class="form-label">Visible in Menu *</label>
                                <select class="form-control" id="pluginVisible">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>

                                <label class="form-label">Status *</label>
                                <select class="form-control" id="pluginStatus">
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
                    <button onclick="Save()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>
            </div>
    </div>
</div>


<script>


    async function Save() {


        let pluginName = document.getElementById('pluginName').value;
        let pluginDesc = document.getElementById('pluginDesc').value;
        let pluginVisible = document.getElementById('pluginVisible').value;
        let pluginStatus = document.getElementById('pluginStatus').value;

        if (pluginName.length === 0) {
            errorToast("Plugin Name Required !")
        }else if(pluginDesc.length === 0) {
        
        errorToast("Description is required!");
        
        }
        else if(pluginVisible.length === 0) {
        
        errorToast("Visible is required!");
        
        }
        else {

            try {

                document.getElementById('modal-close').click();
                showLoader();
                let response = await axios.post("/create-plugin", {
                    name: pluginName,
                    description: pluginDesc,
                    visible_in_menu: pluginVisible,
                    status: pluginStatus
                });
                console.log(response);
                hideLoader();

                if (response.status === 201) {
                    successToast('Plugin created successfully');
                    document.getElementById("save-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast(response.data.message);
                    document.getElementById("save-form").reset();
                }
            } catch (error) {
                // console.error("Error creating employee role:", error);
                errorToast("Failed to create plugin");
            }
        }
    }
    


</script>
