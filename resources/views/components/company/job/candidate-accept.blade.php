<div class="modal animated zoomIn" id="accept-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" mt-3 text-warning">Accepted !</h3>
                <p class="mb-3">are you sure accect this candidate</p>
                <input class="d-none" id="id"/>
                <input class="d-none" id="jobid"/>

            </div>
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="accept-modal-close" class="btn mx-2 bg-gradient-primary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="acceptCandidate()" type="button" id="confirmDelete" class="btn  bg-gradient-danger" >Accepted</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script> 
     async  function  acceptCandidate(){
            let candidate_id=document.getElementById('id').value;
            let jobID=document.getElementById('jobid').value;
 
            document.getElementById('accept-modal-close').click();
            showLoader();
            let res=await axios.post("/company/candidateprofileSelected",{candidate_id:candidate_id,job_id:jobID})
            console.log(res.status);
            console.log(res.data.status);
             
            hideLoader();

            if(res.status === 200 && res.data.status === 'Success'){
                successToast("Candidate Accepted")
                await getList();
            }
            else{
                errorToast("Request fail!")
            }
     }
</script>
