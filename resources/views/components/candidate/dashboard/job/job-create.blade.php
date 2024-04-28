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

                                <label class="form-label">Company Name *</label>
                                <input type="text" class="form-control" id="company_name">
                                

                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" id="designation">

                                <label class="form-label">Joinning Date *</label>
                                <input type="date" class="form-control" id="joinin_date">

                                <label class="form-label">Joinning Date *</label>
                                <input type="date" class="form-control" id="depurture_date">
                                
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


        let company_name = document.getElementById('company_name').value;
        let designation = document.getElementById('designation').value;
        let joinin_date = document.getElementById('joinin_date').value;
        let depurture_date = document.getElementById('depurture_date').value;

        if (company_name.length === 0) {
            errorToast(" Name Required !")
        }else if(designation.length === 0) {
        
        errorToast("designation is required!");
        
        }
        else if(joinin_date.length === 0) {
        
        errorToast("Joning Date is required!");
        
        }
        else if(depurture_date.length === 0) {
        
        errorToast("depurture Date is required!");
        
        }
        else {

            try {

                document.getElementById('modal-close').click();
                showLoader();
                let response = await axios.post("/candidate/create-job", {
                    company_name: company_name,
                    designation: designation,
                    joinin_date: joinin_date,
                    depurture_date: depurture_date,
                });
                console.log(response);
                hideLoader();

                if (response.status === 201) {
                    successToast('Job created successfully');
                    document.getElementById("save-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast(response.data.message);
                    document.getElementById("save-form").reset();
                }
            } catch (error) {
                console.error("Error creating job:", error);
                errorToast("Failed to create job");
            }
        }
    }
    


</script>
