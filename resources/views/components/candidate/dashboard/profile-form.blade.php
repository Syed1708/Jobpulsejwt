<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <div class="row m-0 p-0">
                        <div class="col-md-6 p-2">
                            <h4>Cadidate Profile</h4> 
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
                            <button class="updateBtn float-end btn m-1 bg-gradient-primary">
                                Cv
                            </button>
                        </div>
                    </div>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <input type="text" class="d-none" id="updateID">

                            <div class="col-md-6 p-2">
                                <label>Full Name</label>
                                <input id="fullName" placeholder="Full Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-6 p-2">
                                <label>Father's Name</label>
                                <input id="fatherName" placeholder="Father Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-6 p-2">
                                <label>Mother's Name</label>
                                <input id="motherName" placeholder="Mother Name" class="form-control" type="text"/>
                            </div>
                            
                            <div class="col-md-4 p-2">
                                <label>Mobile Number</label>
                                <input id="mobile" placeholder="Mobile" class="form-control" type="mobile"/>
                            </div>
                           
                            <div class="col-md-4 p-2">
                                <label>BloodGroup</label>
                                <input id="bloodGroup" placeholder="bloodGroup" class="form-control" type="text"/>
                            </div>

                            <div class="col-md-12 p-2">
                                

                                <div class="col-md-6 p-2">
                                    <!-- Display the current image -->
                                <label class="form-label mt-2">Current Photo</label>
                                <img class="w-15 h-auto" id="currentImage" src="" alt="Current photo">
                            
                                <br/>
                                <label class="form-label mt-2">New Photo</label>
                                <input type="file" class="form-control" id="profileImgUpdate">
                                
                                <!-- Hidden input for current image path -->
                                <input type="hidden" id="currentImagePath">
                                    
                                </div>
                            </div>

                            <div class="col-md-4 p-2">
                                <label>Email</label>
                                <input id="email" placeholder="Email" class="form-control" type="email"/>
                            </div>

                            <div class="col-md-4 p-2">
                                <label>NID</label>
                                <input id="nid" placeholder="nid" class="form-control" type="text"/>
                            </div>

                            <div class="col-md-4 p-2">
                                <label>Facebook</label>
                                <input id="facebook" placeholder="facebook" class="form-control" type="text"/>
                            </div>

                            <div class="col-md-4 p-2">
                                <label>linkdin</label>
                                <input id="linkdin" placeholder="linkdin" class="form-control" type="text"/>
                            </div> 

                            <div class="col-md-4 p-2">
                                <label>CurrentSalary</label>
                                <input id="currentSalary" placeholder="currentSalary" class="form-control" type="text"/>
                            </div> 

                            <div class="col-md-4 p-2">
                                <label>ExpectedSalary</label>
                                <input id="expectedSalary" placeholder="expectedSalary" class="form-control" type="text"/>
                            </div> 

                            <label class="form-label">Skills</label>
                            <div class="flex flex-wrap" id="update-skills-container">
                            
                                
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="skills[]" value="PHP">
                                    <span class="ml-2">PHP</span>
                               
                                
                                
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="skills[]" value="JS">
                                    <span class="ml-2">JS</span>
                                
                        
                                
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="skills[]" value="Python">
                                    <span class="ml-2">Python</span>
                                
                            </div>



                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="onUpdate()" class="btn mt-3 w-100  bg-gradient-primary">Update</button>
                            </div>
                        </div>
                        
   



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    getProfile();
    async function getProfile(){
        showLoader();
        let res=await axios.get("/candidate/candidate-profile")
        hideLoader();
        if(res.status===200 && res.data['status']==='success'){
            let data=res.data['data'];
            console.log(data);
            document.getElementById('updateID').value=data['candidate_id'];
            document.getElementById('fullName').value=data['fullName'];
            document.getElementById('fatherName').value=data['fatherName'];
            document.getElementById('motherName').value=data['motherName'];
            document.getElementById('bloodGroup').value=data['bloodGroup'];
            document.getElementById('email').value=data['email'];
            document.getElementById('mobile').value=data['mobile'];
            document.getElementById('nid').value=data['nid'];
            // To solve display current photo
            // Get the base URL of your application
            const baseUrl = window.location.origin;

            // Get the image path from the data
            const imagePath = data['photo'];
            // Construct the full URL for the image
            const imageUrl = `${baseUrl}/${imagePath}`;
 
            // Set the src attribute of the img element
            document.getElementById('currentImage').src = imageUrl;

            // document.getElementById('currentImage').src = data['photo'];
            document.getElementById('currentImagePath').value = data['photo'];
            //after reloading the page aboutImgUpdate will be null
            document.getElementById('profileImgUpdate').value = '';

            document.getElementById('facebook').value=data['facebook'];
            document.getElementById('linkdin').value=data['linkdin'];
            document.getElementById('currentSalary').value=data['currentSalary'];
            document.getElementById('expectedSalary').value=data['expectedSalary'];


            let selectedSkills = res.data.data['skills'];

            // check selectedSkills = null 
            if (selectedSkills) {
                selectedSkills.forEach(skill => {
                // Ensure that the tag value is not null or undefined
                if (skill) {
                    const checkbox = document.querySelector(`#update-skills-container input[value="${skill}"]`);
                    // console.log(checkbox);
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                }
                });       
            }


        }else {
                errorToast(res.data.data['message'])
            }
    }

    async function onUpdate() {

        let updateID = document.getElementById('updateID').value;
        let fullName =document.getElementById('fullName').value;
        let fatherName =document.getElementById('fatherName').value;
        let motherName =document.getElementById('motherName').value;
        let bloodGroup =document.getElementById('bloodGroup').value;
        let email =document.getElementById('email').value;
        let mobile =document.getElementById('mobile').value;
        let nid =document.getElementById('nid').value;
        // Set the src attribute of the img element
        let currentImagePath = document.getElementById('currentImagePath').value;
        let profileImgUpdate = document.getElementById('profileImgUpdate').files[0];
        

        let facebook =document.getElementById('facebook').value;
        let linkdin =document.getElementById('linkdin').value;
        let currentSalary =document.getElementById('currentSalary').value;
        let expectedSalary =document.getElementById('expectedSalary').value;

        let updatedSkills = [];
        document.querySelectorAll('#update-skills-container input[name="skills[]"]:checked').forEach(function (checkbox) {
            updatedSkills.push(checkbox.value);
        });

        if(fullName.length===0){
            errorToast('Name is required')
        }
        else if(fatherName.length===0){
            errorToast(' Father Name is required')
        }
        else if(motherName.length===0){
            errorToast(' Mother Name is required')
        }
        else if(bloodGroup.length===0){
            errorToast(' BloodGroup  is required')
        }
        else if(mobile.length===0){
            errorToast('Mobile is required')
        }
        else if(email.length===0){
            errorToast('email is required')
        }
        else if(nid.length===0){
            errorToast('NID is required')
        }
        else if(facebook.length===0){
            errorToast('Facebbok link is required')
        }
        else if(updatedSkills.length===0){
            errorToast('Skills  is required')
        }
        else if(linkdin.length===0){
            errorToast('linkdin link is required')
        }
        else if(currentSalary.length===0){
            errorToast('currentSalary is required')
        }
        else if(expectedSalary.length===0){
            errorToast('expectedSalary is required')
        }
        else{
            showLoader();

            let formData=new FormData();
            formData.append('candidate_id',updateID)
            formData.append('fullName',fullName)
            formData.append('fatherName',fatherName)
            formData.append('motherName',motherName)
            formData.append('bloodGroup',bloodGroup)
            formData.append('mobile',mobile)
            formData.append('email',email)
            formData.append('nid',nid)
            formData.append('facebook',facebook)
            formData.append('linkdin',linkdin)
            formData.append('currentSalary',currentSalary)
            formData.append('expectedSalary',expectedSalary)


            formData.append('photo', profileImgUpdate);
            formData.append('file_path', currentImagePath);
            
            formData.delete('skills[]'); // Remove existing skills from FormData
            updatedSkills.forEach(skill => {
                formData.append('skills[]', skill); // Add updated skills to FormData
            });
            

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            let res=await axios.post("/candidate/candidate-update",formData,config)
            hideLoader();
            if(res.status===200 && res.data['status']==='success'){
                successToast(res.data['message']);
                await getProfile();
            }
            else{
                errorToast(res.data['message'])
            }
        }
    }

    // set click function form cv modal
    // document.getElementById('viewBtn').addEventListener('click', async function() {
    //     await FillUpProfileForm();
    //     document.getElementById('preview-modal').classList.add('show');
    // });
    $('.updateBtn').on('click', async function () {
           await FillUpProfileForm()
           $("#update-modal").modal('show');  
    })



</script>

