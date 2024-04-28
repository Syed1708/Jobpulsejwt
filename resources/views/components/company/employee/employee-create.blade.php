<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Employee</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Employee FullName *</label>
                                <input type="text" class="form-control" id="employeeName">
                                <label class="form-label">Employee FirstName *</label>
                                <input type="text" class="form-control" id="employeeFirstName">
                                <label class="form-label">Employee lastName *</label>
                                <input type="text" class="form-control" id="employeeLastName">
                                <label class="form-label">Employee Email *</label>
                                <input type="text" class="form-control" id="employeeEmail">
                                <label class="form-label">Roles *</label>
                                <div id="roles-container"></div>
                                <label class="form-label">Status *</label>
                                <select class="form-control" id="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn bg-gradient-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    // load roles
    async function FillUpRoles() {
        try {
            showLoader();
            let response = await axios.get("/company/list-role");
            hideLoader();

            // create roles options
            let rolesContainer = document.getElementById('roles-container');
            rolesContainer.innerHTML = "";

            let selectRole = document.createElement('select');
            selectRole.className = 'form-control';
            selectRole.name = 'roles';
            selectRole.id = 'roles';

            response.data.data.forEach(role => {
                let option = document.createElement('option');
                option.value = role.id;
                option.text = role.name;

                selectRole.appendChild(option);
            });

            rolesContainer.appendChild(selectRole);

        } catch (error) {
            console.error("Error fetching roles:", error);
            return [];
        }
    }



    async function Save() {

        let employeeName = document.getElementById('employeeName').value;
        let employeeFirstName = document.getElementById('employeeFirstName').value;
        let employeeLastName = document.getElementById('employeeLastName').value;
        let employeeEmail = document.getElementById('employeeEmail').value;
        let selectRole = document.getElementById('roles').value;
        let status = document.getElementById('status').value;

        if (employeeName.length === 0) {
            errorToast("Employee Name Required !");
        } else if (employeeFirstName.length === 0) {
            errorToast("Employee FirstName Required !");
        } else if (employeeLastName.length === 0) {
            errorToast("Employee LastName Required !");
        }
         else if (employeeEmail.length === 0) {
            errorToast("Employee Email Required !");
        } else if (selectRole.length === 0) {
            errorToast("Employee role Required !");
        }  else if (status.length === 0) {
            errorToast("Employee Status Required !");
        } else {
            document.getElementById('modal-close').click();

            showLoader();
            let res = await axios.post("/company/create-employee", {
                name: employeeName,
                firstName: employeeFirstName,
                lastName: employeeLastName,
                email: employeeEmail,
                role_id: selectRole,
                status: status
            });
            hideLoader();

            if (res.status === 201) {
                successToast('Employee created successfully');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
            }
        }


        



    }

    // Call FillUpRoles to load roles when the page loads
    FillUpRoles();
</script>
