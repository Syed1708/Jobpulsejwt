<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Job Cat</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" id="updatejcName">
                                <label class="form-label">Description </label>
                                <input type="text" class="form-control" id="updatejcDescription">
                                <input type="hidden" id="updateID">
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="updatejcStatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
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

    async function fillJobCatUpdateForm(id) {
        document.getElementById('updateID').value = id;
        showLoader();

        // Fetch role details including permissions
        let res = await axios.post("/category-by-id", { id: id });
        // console.log(res.data.data['name']);
        hideLoader();

        document.getElementById('updatejcName').value = res.data.data['name'];
        document.getElementById('updatejcDescription').value = res.data.data['description'];
        document.getElementById('updatejcStatus').value = res.data.data['status'];


    }




    async function Update() {
        let updateID = document.getElementById('updateID').value;
        let updatejcName = document.getElementById('updatejcName').value;
        let updatejcDescription = document.getElementById('updatejcDescription').value;
        let updatejcStatus = document.getElementById('updatejcStatus').value;



        if (updatejcName.length === 0) {
            errorToast("Role Name Required !");
        }else if(updatejcStatus.length === 0) {
        
        errorToast("Status is required!");
        
        } else {
            try {
                document.getElementById('update-modal-close').click();
                showLoader();
                let response = await axios.post("/update-category", {
                    id: updateID,
                    name: updatejcName,
                    description: updatejcDescription,
                    status: updatejcStatus
                });
                hideLoader();
 
               if (response.status === 200 && response.data.status === 'success') {
                    successToast('Job Category updated successfully');
                    document.getElementById("update-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast("Failed to update job cat");
                }
            } catch (error) {
                console.error("Error updating job", error);
                errorToast("Failed to update job cat");
            }
        }
    }
</script>
