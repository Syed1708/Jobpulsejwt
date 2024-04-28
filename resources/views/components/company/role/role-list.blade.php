<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>Employee Role</h4>
                </div>
                <div class="align-items-center col">
                    <button class="float-end btn m-0 bg-gradient-primary createBtn">Create</button>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="tableList">

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script>

getList();


async function getList() {
    showLoader();
    let res=await axios.get("/company/list-role");
    hideLoader();
    // console.log(res.data);
    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();

    res.data.data.forEach(function (role,index) {
        let permissions = role.permissions.map(permission => `<span class="badge badge-primary" style="background-color: purple; padding: 10px; margin:2px;">${permission.name}</span>`).join('');

        let row=`<tr>
                    <td>${index+1}</td>
                    <td>${role['name']}</td>
                    
                    <td>
                        
                        ${permissions}
                        
                    </td>
                    <td>
                        <button data-id="${role['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        <button data-id="${role['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                 </tr>`
        tableList.append(row)
    })
    $('.createBtn').on('click', async function () {
           await FillUpPermission()
           $("#create-modal").modal('show');
    })

    $('.editBtn').on('click', async function () {
           let id= $(this).data('id');
           await FillUpUpdateForm(id)
           $("#update-modal").modal('show'); 
    })

    $('.deleteBtn').on('click',function () {
        let id= $(this).data('id');
        $("#delete-modal").modal('show');
        $("#deleteID").val(id);
    })

    new DataTable('#tableData',{
        order:[[0,'desc']],
        lengthMenu:[5,10,15,20,30]
    });

}


</script>

