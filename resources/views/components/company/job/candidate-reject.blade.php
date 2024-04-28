<div class="modal animated zoomIn" id="reject-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" mt-3 text-warning">Rejected !</h3>
                <p class="mb-3">are you sure reject this candidate</p>
                <input class="d-none" id="candidate_id"/>
                <input class="d-none" id="jobID"/>

            </div>
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="reject-modal-close" class="btn mx-2 bg-gradient-primary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="rejectCandidate()" type="button" id="confirmDelete" class="btn  bg-gradient-danger" >Rejected</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script> 
     async  function  rejectCandidate(){
            let candidate_id=document.getElementById('candidate_id').value;
            let jobID=document.getElementById('jobID').value;
 
            document.getElementById('reject-modal-close').click();
            showLoader();
            let res=await axios.post("/company/candidateprofileRejected",{candidate_id:candidate_id,job_id:jobID})
            console.log(res.status);
            console.log(res.data.status);
             
            hideLoader();

            if(res.status === 200 && res.data.status === 'Success'){
                successToast("Candidate Rejected!!")
                await getList();
            }
            else{
                errorToast("Request fail!")
            }
     }
</script>
