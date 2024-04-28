<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="row m-0 p-0">
                    <div class="col-md-6 p-2">
                        <h4>Cadidate Job Applications</h4>
                    </div>
                    <div class="col-md-6 p-2">
                    
                        <a href="{{url("/")}}" class="float-end btn m-1 bg-gradient-primary">
                            Home
                        </a>
                        
                    </div>
                </div>
                
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>ID</th>
                    <th>Job Title</th>
                    <th>Status</th>
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
    let res=await axios.get("/candidate/jobapplication");
    hideLoader();
    console.dir(res.data.data);
    let data = res.data.data;
    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();


    res.data.data.forEach((item,index) =>{
        // console.log("Job Title:", job.job.title);
        let job_title = item.job.title;

        let row=`<tr>
            <td>${index+1}</td>
            <td>${job_title}</td>
            <td>${item['status']}</td>
            </tr>`;
        tableList.append(row)
    })



    new DataTable('#tableData',{
        order:[[0,'desc']],
        lengthMenu:[5,10,15,20,30]
    });

}


</script>

