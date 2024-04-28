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
                                <label class="form-label">Role Name *</label>
                                <input type="text" class="form-control" id="updateroleName">
                                <div id="name-error" class="text-danger"></div>

                                <label class="form-label">Role Description</label>
                                <input type="text" class="form-control" id="updateroleDesc">

                                <!-- Permissions Checkboxes -->
                                <label class="form-label">Permissions *</label>
                                <div id="update-permissions-container">
                                   
                                </div>
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
        let res = await axios.post("/company/role-by-id", { id: id });
        console.log(res.data.data['name']);
        hideLoader();

        document.getElementById('updateroleName').value = res.data.data['name'];
        document.getElementById('updateroleDesc').value = res.data.data['description'];

        let selectedPermissions = res.data.data['permissions'].map(permission => permission.id.toString());

        // Load permissions and populate checkboxes
        await fetchallPermissions("update-permissions-container", selectedPermissions);
    }

    // load permissions
    async function fetchallPermissions(containerId, selectedPermissions) {
        try {
            showLoader();
            let response = await axios.get("/company/list-permissions");
            hideLoader();
            let permissionsContainer = document.getElementById(containerId);
            permissionsContainer.innerHTML = "";

            response.data.data.forEach(permission => {
                let checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.name = 'permissions[]';
                checkbox.value = permission.id;
                checkbox.id = `permission-${permission.id}`;

                if (selectedPermissions && selectedPermissions.includes(permission.id.toString())) {
                    checkbox.checked = true;
                }

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

    async function Update() {
        let updateID = document.getElementById('updateID').value;
        let updateroleName = document.getElementById('updateroleName').value;
        let updateroleDesc = document.getElementById('updateroleDesc').value;

        // Get selected permissions
        let selectedPermissions = Array.from(document.querySelectorAll('input[name="permissions[]"]:checked'))
            .map(checkbox => checkbox.value);

        if (roleName.length === 0) {
            errorToast("Role Name Required !");
        }else if(selectedPermissions.length === 0) {
        
        errorToast("At least one permission is required!");
        
        } else {
            try {
                document.getElementById('update-modal-close').click();
                showLoader();
                let response = await axios.post("/company/update-role", {
                    id: updateID,
                    name: updateroleName,
                    description: updateroleDesc,
                    permissions: selectedPermissions
                });
                hideLoader();

                if (response.status === 200 && response.data.status === 'Fail') {
                    // Display the custom error message from the backend
                    errorToast(response.data.message);
                } else if (response.status === 200 && response.data.status === 'success') {
                    successToast('Role updated successfully');
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
