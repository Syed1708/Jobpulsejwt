<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="row m-0 p-0">
                    <div class="col-md-6 p-2">
                        <h4>Job Details</h4>
                    </div>
                    <div class=" col-md-6  align-items-center col">
                        <form action="{{url("/candidate/applyJob/$job->id")}}" method="POST">
                            <button  class="float-end btn m-0  bg-gradient-primary">Apply Job</button>
                        </form>
                        
                    </div>
                </div>
                
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                {{-- <caption>List of users</caption> --}}
               {{-- @dump($job) --}}
                <tr class="bg-light">
                    <th>Title</th>
                    <td>{{ $job->title }}</td>
                </tr>

                <tr class="bg-light">
                    <th>Dscription</th>
                    <td>{{ $job->description }}</td>
                </tr>
                <tr class="bg-light">
                    <th>Place</th>
                    <td>{{ $job->mode }}</td>
                </tr>
                <tr class="bg-light">
                    <th>Time</th>
                    <td>{{ $job->type }}</td>
                </tr>
                <tr class="bg-light">
                    <th>Location</th>
                    <td>{{ $job->location }}</td>
                </tr>
                <tr class="bg-light">
                    <th>Salary</th>
                    <td>{{ $job->salary }} Tk</td>
                </tr>
                <tr class="bg-light">
                    <th>Benifits</th>
                    <td>{{ $job->benifits }}</td>
                </tr>
                <tr class="bg-light">
                    <th>Deadline</th>
                    <td>{{ $job->deadline }}</td>
                </tr>
                
            </table>
        </div>
    </div>
</div>
</div>

<script>



</script>

