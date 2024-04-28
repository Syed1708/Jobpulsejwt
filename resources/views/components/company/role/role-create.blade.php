<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Role</h5>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label">Role Name *</label>
                                <input type="text" class="form-control" id="roleName">
                                <div id="name-error" class="text-danger"></div>

                                <label class="form-label">Role Description</label>
                                <input type="text" class="form-control" id="roleDesc">

                                <!-- Permissions Checkboxes -->
                                <label class="form-label">Permissions *</label>
                                <div id="permissions-container">
                                   
                                </div>
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
    // load permissions
    async function FillUpPermission(){
        try {
        showLoader();
        let response = await axios.get("/company/list-permissions");
        // return response.data.data;
        hideLoader();
        let permissionsContainer = document.getElementById('permissions-container');
        permissionsContainer.innerHTML = "";

        response.data.data.forEach(permission => {
            let checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.name = 'permissions[]';
            checkbox.value = permission.id; 
            checkbox.id = `permission-${permission.id}`;

            let label = document.createElement('label');
            label.htmlFor = `permission-${permission.id}`;
            label.appendChild(document.createTextNode(permission.name)); 

            permissionsContainer.appendChild(checkbox);
            permissionsContainer.appendChild(label);
            permissionsContainer.appendChild(document.createElement('br')); 
        });

        } catch (error) {
            console.error("Error fetching permissions:", error);
            return [];
        }
    }

    async function Save() {


        let selectedPermissions = Array.from(document.querySelectorAll('input[name="permissions[]"]:checked'))
        .map(checkbox => checkbox.value);

        let roleName = document.getElementById('roleName').value;
        let roleDesc = document.getElementById('roleDesc').value;

        if (roleName.length === 0) {
            errorToast("Role Name Required !")
        }else if(selectedPermissions.length === 0) {
        
        errorToast("At least one permission is required!");
        
        }else {

            try {

                document.getElementById('modal-close').click();
                showLoader();
                let response = await axios.post("/company/create-role", {
                    name: roleName,
                    description: roleDesc,
                    permissions: selectedPermissions
                });
                console.log(response);
                hideLoader();

                if (response.status === 201) {
                    successToast('Employee role created successfully');
                    document.getElementById("save-form").reset();
                    await getList();
                } else {
                    // Display a generic error message
                    errorToast(response.data.message);
                    document.getElementById("save-form").reset();
                }
            } catch (error) {
                console.error("Error creating employee role:", error);
                errorToast("Failed to create employee role");
            }
        }
    }
    


</script>
