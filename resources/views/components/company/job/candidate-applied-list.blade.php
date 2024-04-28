<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4 id="jobTitle"></h4>
                </div>
               
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th> 
                    <th>Cadidate Name</th>
                    <th>Applied Date</th>
                    <th>Job Id</th>
                    <th>Can Id</th>
                    <th>Status</th>
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
        let jobId = window.location.pathname.split('/')[2];
        let res=await axios.get(`/company/${jobId}/jobApplicationsList`);
        console.log(res.data.data);
        hideLoader();
        document.getElementById('jobTitle').innerText  = res.data.data.title;
    
        let tableList=$("#tableList");
        let tableData=$("#tableData");
    
        tableData.DataTable().destroy();
        tableList.empty();
    

           
            res.data.data.applications.forEach(function(application,index){
                console.log(application.candidate_id);
                let row=`<tr>
                        <td>${index+1}</td>
                        <td>${application.candidate.name}</td>
                        <td>${application['created_at']}</td>
                        <td>${application['job_id']}</td>
                        <td>${application['candidate_id']}</td>
                        <td>${application['status']}</td>
                        <td>
                            <button  data-id="${application['candidate_id']}" class="btn viewBtn btn-sm btn-outline-success">View</button>
                            <button data-path="${application['job_id']}" data-id="${application['candidate_id']}" class="btn acceptBtn btn-sm btn-outline-success">Accepted</button>
                            
                            <button data-path="${application['job_id']}" data-id="${application['candidate_id']}" class="btn rejectBtn btn-sm btn-outline-danger">Rejected</button>
                            
                        </td>
                     </tr>`
                tableList.append(row)
            })

        
    
    
        $('.viewBtn').on('click', async function () {
            let id= $(this).data('id');
            //    alert(id)
            try {
                await profilePreview(id);
                $("#update-modal").modal('show');
            } catch (error) {
                console.error('Error in candidateprofilePreview:', error);
                // Handle the error (e.g., display an error message to the user)
            }
        })

        $('.acceptBtn').on('click',function () {
        let candidate_id= $(this).data('id');
        let job_id= $(this).data('path');
        // alert(id);
        // alert(job_id);
        $("#accept-modal").modal('show');
        $("#id").val(candidate_id);
        $("#jobid").val(job_id)
        })
    
        $('.rejectBtn').on('click',function () {

        let candidate_id= $(this).data('id');
        let job_id= $(this).data('path');
        // alert(candidate_id);
        // alert(job_id);
        $("#reject-modal").modal('show');
        $("#candidate_id").val(candidate_id);
        $("#jobID").val(job_id)

        })
    
        new DataTable('#tableData',{
            order:[[0,'desc']],
            lengthMenu:[5,10,15,20,30]
        });
    
    }
    
    
    </script>

