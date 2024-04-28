<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Blog Cat</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" id="updatebcName">
                                
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

    async function fillblogCatUpdateForm(id) {
        document.getElementById('updateID').value = id;
        showLoader();

        // Fetch role details including permissions
        let res = await axios.post("/category-blog-by-id", { id: id });
        // console.log(res.data.data['name']);
        hideLoader();

        document.getElementById('updatebcName').value = res.data.data['name'];


    }




    async function Update() {
        let updateID = document.getElementById('updateID').value;
        let updatebcName = document.getElementById('updatebcName').value;



        if (updatebcName.length === 0) {
            errorToast("Blog Category Name Required !");
        } else {
            try {
                document.getElementById('update-modal-close').click();
                showLoader();
                let response = await axios.post("/update-blog-category", {
                    id: updateID,
                    name: updatebcName,
                });
                hideLoader();
 
               if (response.status === 200 && response.data.status === 'success') {
                    successToast('Blog Category updated successfully');
                    document.getElementById("update-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast("Failed to update blog cat");
                }
            } catch (error) {
                console.error("Error updating blog", error);
                errorToast("Failed to update blog cat");
            }
        }
    }
</script>
