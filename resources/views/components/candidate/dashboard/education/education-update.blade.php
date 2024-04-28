<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Role</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label">Degree Type</label>
                                <select type="text" class="form-control form-select" id="updatedegreeType">
                                    <option value="">Select</option>
                                    <option value="hsc">HSC</option>
                                    <option value="bba">BBA</option>
                                    <option value="mba">MBA</option>
                                </select>
                                
                            
                                <label>Institute Name</label>
                                <input id="updateinstituteName" placeholder="Institute Name" class="form-control" type="text"/>
                            
                                <label>Group</label>
                            
                                <select type="text" class="form-control form-select" id="updategroup">
                                    <option value="">Select</option>
                                    <option value="sc">Science</option>
                                    <option value="arts">Arts</option>
                                    <option value="bs">Business Studies</option>
                                </select>
                            
                                <label>Passing Year</label>
                                <input id="updatepassingYear" placeholder="Passing Year" class="form-control" type="text"/>
                            
                                <label>Marks</label>
                                <input id="updatemarks" placeholder="Marks" class="form-control" type="text"/>

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


    
    async function FillUpeducationUpdateForm(id) {
        document.getElementById('updateID').value = id;
        // console.log(id);
        
        showLoader();
        let res = await axios.post("/candidate/education-by-id", { id: id });
        console.log(res.data.data['degreeType']);
        hideLoader();

        document.getElementById('updatedegreeType').value = res.data.data['degreeType'];
        document.getElementById('updateinstituteName').value = res.data.data['instituteName'];

        document.getElementById('updatepassingYear').value = res.data.data['passingYear'];

        document.getElementById('updategroup').value = res.data.data['group'];
        document.getElementById('updatemarks').value = res.data.data['marks'];




    }


async function Update() {

        let updatedegreeType = document.getElementById('updatedegreeType').value;
        let updateinstituteName = document.getElementById('updateinstituteName').value;
        let updategroup = document.getElementById('updategroup').value;
        let updatepassingYear = document.getElementById('updatepassingYear').value;
        let updatemarks = document.getElementById('updatemarks').value;
        let updateID=document.getElementById('updateID').value;


        if (updatedegreeType.length === 0) {
            errorToast("Degree Required !");
        } 
        else if (updateinstituteName.length === 0) {
            errorToast("Institute Required !");
        }
        else if (updategroup.length === 0) {
            errorToast("group Required !");
        
        }
        else if (updatepassingYear.length === 0) {
            errorToast("year Required !");
        
        }
        else if (updatemarks.length === 0) {
            errorToast("Marks Required !");
        
        }
        else {
            document.getElementById('modal-close').click();

            let formData=new FormData();
            formData.append('degreeType',updatedegreeType)
            formData.append('instituteName',updateinstituteName)
            formData.append('passingYear',updatepassingYear)
            formData.append('group',updategroup)
            formData.append('marks',updatemarks)
            formData.append('id',updateID)


            showLoader();
            let response = await axios.post("/candidate/update-education",formData);
            console.log(response.data.status);
            hideLoader();

            if (response.status === 200 && response.data.status === 'success') {
                    successToast('Education updated successfully');
                    document.getElementById("update-form").reset();
                    await getList();
                } else {
                errorToast("Request fail !");
            }
        }






}

</script>
