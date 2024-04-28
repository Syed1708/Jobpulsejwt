
<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label">Degree Type</label>
                                <select type="text" class="form-control form-select" id="degreeType">
                                    <option value="">Select</option>
                                    <option value="hsc">HSC</option>
                                    <option value="bba">BBA</option>
                                    <option value="mba">MBA</option>
                                </select>
                                
                            
                                <label>Institute Name</label>
                                <input id="instituteName" placeholder="Institute Name" class="form-control" type="text"/>
                            
                                <label>Group</label>
                            
                                <select type="text" class="form-control form-select" id="group">
                                    <option value="">Select</option>
                                    <option value="sc">Science</option>
                                    <option value="arts">Arts</option>
                                    <option value="bs">Business Studies</option>
                                </select>
                            
                                <label>Passing Year</label>
                                <input id="passingYear" placeholder="Passing Year" class="form-control" type="text"/>
                            
                                <label>Marks</label>
                                <input id="marks" placeholder="Marks" class="form-control" type="text"/>
                            
                   
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

        const degreeType = document.getElementById('degreeType').value;
        const instituteName = document.getElementById('instituteName').value;
        const group = document.getElementById('group').value;
        const passingYear = document.getElementById('passingYear').value;
        const marks = document.getElementById('marks').value;


 // Validate input fields
        if (!degreeType || !instituteName || !passingYear || !marks || !group ) {
        errorToast('Degree Type, Institute Name,marks and Passing Year are required fields.');
        return;
        } else {
            document.getElementById('modal-close').click();

            let formData=new FormData();
            formData.append('degreeType',degreeType)
            formData.append('instituteName',instituteName)
            formData.append('passingYear',passingYear)
            formData.append('group',group)
            formData.append('marks',marks)


 

            showLoader();
            let res = await axios.post("/candidate/create-education",formData);
            hideLoader();

            if (res.status === 201) {
                successToast('Education created successfully');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
                // document.getElementById("create-modal");
            }
        }


    }
</script>
