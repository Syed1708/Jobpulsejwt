<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Plugin</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                {{-- <label class="form-label">Name *</label>
                                <input type="text" class="form-control" id="updatepluginName">
                                <div id="name-error" class="text-danger"></div>

                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" id="updatepluginDesc">
                                 --}}
                                <label class="form-label">Visible in Menu *</label>
                                <select class="form-control" id="updatepluginVisible">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="updatepluginStatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                   
                                <input type="hidden" id="updateID">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="update-modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Update()" id="update-btn" class="btn bg-gradient-success" >Update</button>
            </div>
        </div>
    </div>
</div>

<script>
    async function FillUpUpdateForm(id) {
        document.getElementById('updateID').value = id;
        showLoader();
        let res = await axios.post("/plugin-by-id", { id: id });
        console.log(res.data.data['name']);
        hideLoader();

        // document.getElementById('updatepluginName').value = res.data.data['name'];
        // document.getElementById('updatepluginDesc').value = res.data.data['description'];
        document.getElementById('updatepluginVisible').value = res.data.data['visible_in_menu'];
        document.getElementById('updatepluginStatus').value = res.data.data['status'];

        
    }



    async function Update() {
        let updateID = document.getElementById('updateID').value;
        // let updatepluginName = document.getElementById('updatepluginName').value;
        // let updatepluginDesc = document.getElementById('updatepluginDesc').value;
        let updatepluginVisible = document.getElementById('updatepluginVisible').value;
        let updatepluginStatus = document.getElementById('updatepluginStatus').value;


        
            try {
                document.getElementById('update-modal-close').click();
                showLoader();
                let response = await axios.post("/update-plugin", {
                    id: updateID,
                    // name: updatepluginName,
                    // description: updatepluginDesc,
                    visible_in_menu: updatepluginVisible,
                    status: updatepluginStatus
                });
                hideLoader();

             if (response.status === 200 && response.data.status === 'success') {
                    successToast('Plugin updated successfully');
                    document.getElementById("update-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast("Failed to update plugin");
                }
            } catch (error) {
                console.error("Error updating plugin:", error);
                errorToast("Failed to update plugin");
            }
        }
    
</script>
