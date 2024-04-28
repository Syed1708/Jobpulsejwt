<!-- Modal -->
<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Preview</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="provilePreview" class="modal-body p-3">
                    <div class="container-fluid">
                        <br/>
                        <div class="mb-5 row">
                            <div class="col-md-6">
                                <h3 id="CName"></h3>
                                <p id="CEmail"></p>
                            </div>
                            <div class="col-md-6">
                                <img class="w-50 h-auto" id="cphoto" src="" alt="Current photo">
                            </div>
                            
                        </div>
                        <div class="mb-5">
                            <h4>Basic Informations</h4>
                            <hr class="bg-dark "/>
                            <table class="table" id="basicInfo">
                                
                              <tr class="bg-light">
                                  <th>Full Name</th>
                                  <td id="cfullName"></td>
                              </tr>
                              <tr class="bg-light">
                                <th>Fathers Name</th>
                                <td id="cfatherName"></td>
                            </tr>
                            <tr class="bg-light">
                                <th>Mothers Name</th>
                                <td id="cmotherName"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>Mobile</th>
                                <td id="cmobile"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>Blood Group</th>
                                <td id="CbloodGroup"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>Email</th>
                                <td id="cemail"></td>
                            </tr>
                            
                              <tr class="bg-light">
                                <th>Nid</th>
                                <td id="cnid"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>Facebook</th>
                                <td id="cfacebook"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>linkdin</th>
                                <td id="clinkdin"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>skills</th>
                                <td id="cskills"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>Current Salary</th>
                                <td id="ccurrentSalary"></td>
                            </tr>
                              <tr class="bg-light">
                                <th>Expected Salary</th>
                                <td id="cexpectedSalary"></td>
                            </tr>
            
                          </table>
                        </div>

                        <br>
                         <!-- Education Section -->
                <div class="mb-5">
                    <h4>Education</h4>
                    <hr class="mx-0 my-2 p-0 bg-secondary"/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Degree</th>
                                <th>Institution</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody id="educationList">
                            
                            <!-- Add more rows for other education details -->
                        </tbody>
                    </table>
                </div>
                <!-- Jobs Experience Section -->
                <div class="mb-5">
                    <h4>Experience</h4>
                    <hr class="mx-0 my-2 p-0 bg-secondary"/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Position</th>
                                <th>Joining Date</th>
                                <th>Deperture Date</th>
                            </tr>
                        </thead>
                        <tbody id="jobList">
                            
                        </tbody>
                    </table>
                </div>
                <!-- Training Section -->
                <div class="mb-5">
                    <h4>Training</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Institution</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody id="trainingList">
                            
                        </tbody>
                        <input type="hidden" id="updateID">
                    </table>
                </div>
                        
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-primary" data-bs-dismiss="modal">Close</button>
                <button onclick="PrintPage()" class="btn bg-gradient-success">Print</button>
            </div>
        </div>
    </div>
</div>


<script>
 

 async function  profilePreview(id) {
    document.getElementById('updateID').value = id;

        showLoader()
        let res=await axios.get(`/company/candidateprofilePreview/${id}`);
        console.log(res.data.data);
        let data = res.data.data; 
        hideLoader();

        document.getElementById('CName').innerText=data['name'];
        document.getElementById('CEmail').innerText=data['email'];

        document.getElementById('cfullName').innerText=data.profile['fullName'];
        document.getElementById('cfatherName').innerText=data.profile['fatherName'];
        document.getElementById('cmotherName').innerText=data.profile['motherName'];
        document.getElementById('CbloodGroup').innerText=data.profile['bloodGroup'];
        document.getElementById('cmobile').innerText=data.profile['mobile'];
        document.getElementById('cemail').innerText=data.profile['email'];
        document.getElementById('cnid').innerText=data.profile['nid'];
        document.getElementById('cfacebook').innerText=data.profile['facebook'];
        document.getElementById('clinkdin').innerText=data.profile['linkdin'];
        document.getElementById('cskills').innerText=data.profile['skills'];
        document.getElementById('ccurrentSalary').innerText=data.profile['currentSalary'];
        document.getElementById('cexpectedSalary').innerText=data.profile['expectedSalary'];
        
       
        const baseUrl = window.location.origin;
        const imagePath = data.profile['photo'];
            // Construct the full URL for the image
        const imageUrl = `${baseUrl}/${imagePath}`;

            // Set the src attribute of the img element
        document.getElementById('cphoto').src = imageUrl;


        
        let educationList=$('#educationList');

        educationList.empty();

        data['educations'].forEach(function (item,index) {
            let row=`<tr class="">
                        <td>${item['degreeType']}</td>
                        <td>${item['instituteName']}</td>
                        <td>${item['passingYear']}</td>
                    </tr>`
            educationList.append(row)
        });
        
        let jobList=$('#jobList');

        jobList.empty();

        data['job_expriences'].forEach(function (item,index) {
            let row=`<tr class="">
                        <td>${item['company_name']}</td>
                        <td>${item['designation']}</td>
                        <td>${item['joinin_date']}</td>
                        <td>${item['depurture_date']}</td>
                    </tr>`
                    jobList.append(row)
        });

        let trainingList=$('#trainingList');

        trainingList.empty();

        data['trainings'].forEach(function (item,index) {
            let row=`<tr class="">
                        <td>${item['tariningName']}</td>
                        <td>${item['instituteName']}</td>
                        <td>${item['passingYear']}</td>
                    </tr>`
                    trainingList.append(row)
        });


    }

    function PrintPage() {
        let printContents = document.getElementById('provilePreview').innerHTML;
        let originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        setTimeout(function() {
            location.reload();
        }, 1000);
    }



    
</script>
