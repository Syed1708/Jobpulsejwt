

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
                                <label class="form-label">Employee FullName *</label>
                                <input type="text" class="form-control" id="updateEmployeeName">
                                <label class="form-label">Employee FirstName *</label>
                                <input type="text" class="form-control" id="updateEmployeeFirstName">
                                <label class="form-label">Employee lastName *</label>
                                <input type="text" class="form-control" id="updateEmployeeLastName">
                                <label class="form-label">Employee Email *</label>
                                <input type="text" class="form-control" id="updateEmployeeEmail">
                                <label class="form-label">Role</label>
                                <select type="text" class="form-control form-select" id="RoleUpdate">
                                    <option value="">Select Role</option>
                                </select>


                                <input type="text" class="d-none" id="updateID">

                                <label class="form-label">Status *</label>
                                <select class="form-control" id="Updatestatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
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


async function UpdateFillRoleDropDown(){
        let res = await axios.get("/company/list-role")
        res.data.data.forEach(function (item,i) {
            let option=`<option value="${item['id']}">${item['name']}</option>`
            $("#RoleUpdate").append(option);
        })
    }
    
 async function fillEmployeeUpdateForm(id) {
        try {
            document.getElementById('updateID').value = id;
            showLoader();
            await UpdateFillRoleDropDown();
            let response = await axios.post("/company/employee-by-id", {id:id});
            hideLoader();

            // Assuming your update modal has fields with IDs like 'updateName', 'updateEmail', etc.
            document.getElementById('updateEmployeeName').value = response.data.data['name'];
            document.getElementById('updateEmployeeEmail').value = response.data.data['email'];
            document.getElementById('updateEmployeeFirstName').value = response.data.data['firstName'];
            document.getElementById('updateEmployeeLastName').value = response.data.data['lastName'];
            document.getElementById('Updatestatus').value = response.data.data['status'];
            document.getElementById('RoleUpdate').value = response.data.data['role_id'];

        } catch (error) {
            console.error("Error fetching employee details:", error);
        }
    }


 async function Update() {

        let updateID = document.getElementById('updateID').value;
        let employeeName = document.getElementById('updateEmployeeName').value;
        let employeeFirstName = document.getElementById('updateEmployeeFirstName').value;
        let employeeLastName = document.getElementById('updateEmployeeLastName').value;
        let employeeEmail = document.getElementById('updateEmployeeEmail').value;
        let RoleUpdate = document.getElementById('RoleUpdate').value;
        let Updatestatus = document.getElementById('Updatestatus').value;

        if (employeeName.length === 0) {
            errorToast("Employee Name Required !");
        } else if (employeeFirstName.length === 0) {
            errorToast("Employee FirstName Required !");
        } else if (employeeLastName.length === 0) {
            errorToast("Employee LastName Required !");
        }
         else if (employeeEmail.length === 0) {
            errorToast("Employee Email Required !");
        } else if (RoleUpdate.length === 0) {
            errorToast("Employee role Required !");
        }  else if (Updatestatus.length === 0) {
            errorToast("Employee Status Required !");
        } else {
            document.getElementById('modal-close').click();

            let formData=new FormData();
            formData.append('id',updateID)
            formData.append('name',employeeName)
            formData.append('firstName',employeeFirstName)
            formData.append('lastName',employeeLastName)
            formData.append('email',employeeEmail)
            formData.append('role_id',RoleUpdate)
            formData.append('status',Updatestatus)

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post("/company/update-employee",formData,config);
            hideLoader();

            if (res.status === 200 && res.data.status === 'success') {
                successToast('Employee Updated successfully');
                document.getElementById("update-form").reset();
                await getList();
            } else {
                errorToast("Request fail !");
            }
        }


        



    }

  
</script>
