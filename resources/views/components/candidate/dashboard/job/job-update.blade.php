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
                                
                                <label class="form-label">Company Name *</label>
                                <input type="text" class="form-control" id="updatecompany_name">
                                

                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" id="updatedesignation">

                                <label class="form-label">Joinning Date *</label>
                                <input type="date" class="form-control" id="updatejoinin_date">

                                <label class="form-label">Joinning Date *</label>
                                <input type="date" class="form-control" id="updatedepurture_date">
                                
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

        // Fetch role details including permissions
        let res = await axios.post("/candidate/job-by-id", { id: id });
        console.log(res.data.data['company_name']);
        hideLoader();

        document.getElementById('updatecompany_name').value = res.data.data['company_name'];
        document.getElementById('updatedesignation').value = res.data.data['designation'];
        document.getElementById('updatejoinin_date').value = res.data.data['joinin_date'];
        document.getElementById('updatedepurture_date').value = res.data.data['depurture_date'];

  
    }



    async function Update() {
        let updateID = document.getElementById('updateID').value;
        let updatecompany_name = document.getElementById('updatecompany_name').value;
        let updatedesignation = document.getElementById('updatedesignation').value;
        let updatejoinin_date = document.getElementById('updatejoinin_date').value;
        let updatedepurture_date = document.getElementById('updatedepurture_date').value;

        if (updatecompany_name.length === 0) {
            errorToast(" Name Required !")
        }else if(updatedesignation.length === 0) {
        
        errorToast("designation is required!");
        
        }
        else if(updatejoinin_date.length === 0) {
        
        errorToast("Joning Date is required!");
        
        }
        else if(updatedepurture_date.length === 0) {
        
        errorToast("depurture Date is required!");
        
        } else {
            try {
                document.getElementById('update-modal-close').click();
                showLoader();
                let response = await axios.post("/candidate/update-job", {
                    id: updateID,
                    company_name: updatecompany_name,
                    designation: updatedesignation,
                    depurture_date: updatedepurture_date,
                    joinin_date: updatejoinin_date
                });
                hideLoader();

                if (response.status === 200 && response.data.status === 'Fail') {
                    // Display the custom error message from the backend
                    errorToast(response.data.message);
                } else if (response.status === 200 && response.data.status === 'success') {
                    successToast('Job updated successfully');
                    document.getElementById("update-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast("Failed to update role");
                }
            } catch (error) {
                console.error("Error updating role:", error);
                errorToast("Failed to update role");
            }
        }
    }
</script>
