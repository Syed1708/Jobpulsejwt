<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Training</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                
                                <label class="form-label">Tarining Name *</label>
                                <input type="text" class="form-control" id="updatetariningName">
                                

                                <label class="form-label">Institute Name</label>
                                <input type="text" class="form-control" id="updateinstituteName">

                                <label class="form-label">Passing Year *</label>
                                <input type="text" class="form-control" id="updatepassingYear">
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
    async function FillUpTrUpdateForm(id) {
        document.getElementById('updateID').value = id;
        showLoader();

        // Fetch role details including permissions
        let res = await axios.post("/candidate/training-by-id", { id: id });
        console.log(res.data.data['tariningName']);
        hideLoader();

        document.getElementById('updatetariningName').value = res.data.data['tariningName'];
        document.getElementById('updateinstituteName').value = res.data.data['instituteName'];
        document.getElementById('updatepassingYear').value = res.data.data['passingYear'];

  
    }



    async function Update() {
        let updateID = document.getElementById('updateID').value;
        let updatetariningName = document.getElementById('updatetariningName').value;
        let updateinstituteName = document.getElementById('updateinstituteName').value;
        let updatepassingYear = document.getElementById('updatepassingYear').value;

        if (updatetariningName.length === 0) {
            errorToast(" Name Required !")
        }else if(updateinstituteName.length === 0) {
        
        errorToast("instituteName is required!");
        
        }
        else if(updatepassingYear.length === 0) {
        
        errorToast("Year is required!");
        
        } else {
            try {
                document.getElementById('update-modal-close').click();
                showLoader();
                let response = await axios.post("/candidate/update-training", {
                    id: updateID,
                    tariningName: updatetariningName,
                    instituteName: updateinstituteName,
                    passingYear: updatepassingYear,
                });
                hideLoader();

                if (response.status === 200 && response.data.status === 'Fail') {
                    // Display the custom error message from the backend
                    errorToast(response.data.message);
                } else if (response.status === 200 && response.data.status === 'success') {
                    successToast('Training updated successfully');
                    document.getElementById("update-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast("Failed to update training");
                }
            } catch (error) {
                console.error("Error updating training:", error);
                errorToast("Failed to update training");
            }
        }
    }
</script>
