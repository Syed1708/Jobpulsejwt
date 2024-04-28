<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6 center-screen">
            <div class="card animated fadeIn w-90 p-4">
                <div class="card-body">
                    <h4>SET NEW PASSWORD</h4>
                    <br/>
                    <label>New Password</label>
                    <input id="password" placeholder="New Password" class="form-control" type="password"/>
                    <br/>
                    <label>Confirm Password</label>
                    <input id="password_confirmation" placeholder="Confirm Password" class="form-control" type="password"/>
                    <br/>
                    <button onclick="ResetPass()" class="btn w-100 bg-gradient-primary">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  async function ResetPass() {
        let password = document.getElementById('password').value;
        let password_confirmation = document.getElementById('password_confirmation').value;

        if(password.length===0){
            errorToast('Password is required')
        }
        else if(password_confirmation.length===0){
            errorToast('Confirm Password is required')
        }
        else if(password!==password_confirmation){
            errorToast('Password and Confirm Password must be same')
        }
        else{
          showLoader()
          let res=await axios.post("/candidate/reset-password",{password:password,password_confirmation:password_confirmation});
          hideLoader();
          if(res.status===200 && res.data['status']==='success'){
              successToast(res.data['message']);
              setTimeout(function () {
                  window.location.href="/candidate/candidateLogin";
              },1000);
          }
          else{
            errorToast(res.data['message'])
          }
        }

    }
</script>
