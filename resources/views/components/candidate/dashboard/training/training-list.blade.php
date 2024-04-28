<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="row m-0 p-0">
                    <div class="col-md-6 p-2">
                        <h4>Cadidate Trainings</h4>
                    </div>
                    <div class="col-md-6 p-2">
                    
                        <a href="{{url("/candidate/candidateEducation")}}" class="float-end btn m-1 bg-gradient-primary">
                            Educations
                        </a>
                        <a href="{{url("/candidate/candidateJob")}}" class="float-end btn m-1 bg-gradient-primary">
                            Jobs
                        </a>
                        <a href="{{url("/candidate/candidateTraining")}}" class="float-end btn m-1 bg-gradient-primary">
                            Training
                        </a>
                        <a href="{{url("/candidate/candidateProfile")}}" class="float-end btn m-1 bg-gradient-primary">
                            Profile
                        </a>
                    </div>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0  bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    <th>Tarining Name</th>
                    <th>InstituteName</th>
                    <th>passingYear</th>
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
    let res=await axios.get("/candidate/list-training");
    hideLoader();
    // console.log(res.data);
    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();

    res.data.data.forEach(function (role,index) {
     

        let row=`<tr>
                    <td>${index+1}</td>
                    <td>${role['tariningName']}</td>
                    <td>${role['instituteName']}</td>
                    <td>${role['passingYear']}</td>
                    
                    <td>
                        <button data-id="${role['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        <button data-id="${role['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                 </tr>`
        tableList.append(row)
    })


    $('.editBtn').on('click', async function () {
           let id= $(this).data('id');
           await FillUpTrUpdateForm(id)
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

