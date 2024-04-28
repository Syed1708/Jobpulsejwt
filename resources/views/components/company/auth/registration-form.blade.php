<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 center-screen">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>Sign Up</h4>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <label>Name</label>
                                <input id="name" placeholder="Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>First Name</label>
                                <input id="firstName" placeholder="First Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Last Name</label>
                                <input id="lastName" placeholder="Last Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Email Address</label>
                                <input id="email" placeholder="User Email" class="form-control" type="email"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Password</label>
                                <input id="password" placeholder="User Password" class="form-control" type="password"/>
                            </div>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Confirm Password</label>
                                <input id="password_confirmation" placeholder="Repeat Password" class="form-control" type="password"/>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="Register()" class="btn mt-3 w-100  bg-gradient-primary">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


  async function Register() {

      let name = document.getElementById('name').value;
      let firstName = document.getElementById('firstName').value;
      let lastName = document.getElementById('lastName').value;
      let email = document.getElementById('email').value;
      let password = document.getElementById('password').value;
      let password_confirmation = document.getElementById('password_confirmation').value;

        if(name.length===0){
            errorToast('Name is required')
        }
        else if(firstName.length===0){
            errorToast('First Name is required')
        }
        else if(lastName.length===0){
            errorToast('Last Name is required')
        }
        else if(email.length===0){
            errorToast('Email is required')
        }
        else if(password.length===0){
            errorToast('Password is required')
        
        }
        else if(password_confirmation.length===0){
            errorToast('Confirm Password is required')
        }
        else{
            showLoader();
            let res=await axios.post("/company/register",{
                name:name,
                email:email,
                firstName:firstName,
                lastName:lastName,
                password:password,
                password_confirmation:password_confirmation,
            })
            hideLoader();
            if(res.status===200 && res.data['status']==='success'){
                successToast(res.data['message']);
                setTimeout(function (){
                    window.location.href='/company/companyLogin'
                },2000)
            }
            else{
                errorToast(res.data['message'])
            }
        }
    }
</script>
