
<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Page</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Page Title *</label>
                                <input type="text" class="form-control" id="updatename">

                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="updatedescription">
                                

                                <input type="hidden" id="updateID">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="update-modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="update()" id="update-btn" class="btn bg-gradient-success" >Update</button>
            </div>
        </div>
    </div>
</div>

<script>


    
    async function fillpageUpdateForm(id) {
        document.getElementById('updateID').value = id;
        
        showLoader();

        let res = await axios.post("/page-by-id", { id: id });
        hideLoader();

        document.getElementById('updatename').value = res.data.data['name'];
        document.getElementById('updatedescription').value = res.data.data['description'];


    }


async function update() {

        let updateID = document.getElementById('updateID').value;
        let updatename = document.getElementById('updatename').value;
        let updatedescription = document.getElementById('updatedescription').value;
        

        if (updatename.length === 0) {
            errorToast("Title Required !");
        } 
        else if (updatedescription.length === 0) {
            errorToast("description Required !");
        }else {
            document.getElementById('modal-close').click();

            // let formData=new FormData();
            // formData.append('id',updateID)
            // formData.append('name',updatename)
            // formData.append('description',updatedescription)


            showLoader();
            // let res = await axios.post("/update-page",formData);
            let res = await axios.post("/update-page",{
                    id: updateID,
                    name: updatename,
                    description: updatedescription,
                });
            hideLoader();

            if (res.status === 200 && res.data.status === 'success') {
                successToast('Page updated successfully');
                document.getElementById("update-form").reset();
                    await getList();
            } else {
                errorToast("Request fail !");
            }
        }






}

</script>
