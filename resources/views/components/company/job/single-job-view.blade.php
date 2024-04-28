<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>{{$job->title}}</h4>
                    
                </div>
                <div class="align-items-center col">
                    
                    <a href="{{ url("/jobs/$job->id/appliedCandidate") }}" class="float-end btn m-0  bg-gradient-primary">Applied ( {{$job->applications_count}} )</a>
                </div>
            </div>
            <hr class="bg-dark "/>
            <div class="mb-5">
                <table class="table" id="basicInfo">
                    
                  <tr class="bg-light">
                      <th>Job Title</th>
                      <td>{{$job->title}}</td>
                  </tr>
                  <tr class="bg-light">
                      <th>Job Description</th>
                      <td>{{$job->description}}</td>
                  </tr>
                  <tr class="bg-light">
                      <th>Job location</th>
                      <td>{{$job->location}}</td>
                  </tr>
                  <tr class="bg-light">
                      <th>Job Salary</th>
                      <td>{{$job->salary}}</td>
                  </tr>
                  

              </table>
            </div>
        </div>
    </div>
</div>
</div>

<script>

getList();
async function getList() {
    showLoader();
    let res=await axios.get("/list-job-company");
    console.log(res.data.data);
    hideLoader();

    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();

    res.data.data.forEach(function (item,index) {
        // console.log("Job cat name:", item.category.name);
        let category_name =item.category.name;
        let row=`<tr>
                    <td>${index+1}</td>
                    <td>${item['title']}</td>
                    <td>${category_name}</td>
                    <td>${item['description']}</td>
                    <td>${item['status']}</td>
                    <td>
                        <button data-id="${item['id']}" class="btn viewBtn btn-sm btn-outline-success">View</button>
                        <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        
                        <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                 </tr>`
        tableList.append(row)
    })


    $('.viewBtn').on('click', function () {
           let id= $(this).data('id');
        //    alert(id)
        window.location.href=`/jobs/${id}`;
    })

    $('.editBtn').on('click', async function () {
           let id= $(this).data('id');
        //    alert(id)
           await fillJobUpdateForm(id)
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

