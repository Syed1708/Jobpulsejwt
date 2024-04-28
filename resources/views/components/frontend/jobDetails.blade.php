
    <section class="company-history">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2  class="m-4 text-center text-uppercase">Job Details For {{ $job->title }}</h2>
                    <hr>
                    <div class="row">
                    
                        
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    {{-- @dump($job) --}}
                                    {{-- <h5 class="card-title font-bold">{{ $candidate_id }}</h5> --}}
                                    <h5 class="card-title font-bold">{{ $job->title }}</h5>
                                    <p class="card-text">Salary: Tk {{ $job->salary }}</p>
                                    <p class="card-text">Location: {{ $job->location }}</p>
                                    <p class="card-text">Tags: 
                                      @foreach($job->tags as $tag)
                                          <span class="badge text-bg-info p-2">{{ $tag }}</span>
                                      @endforeach
                                        
                                    </p>

                                    @if($applications)
                                        
                                        
                                                
                                                @if($applications->candidate_id == $candidate_id)
                                                   
                                                    <button class="btn btn-primary m-2" disabled>Already Applied</button>
                                                    
                                                @else
                                                <button class="btn btn-primary m-2" onclick="applyForJob({{ $job->id }})">Apply</button>
                                                    
                                                @endif
                                            
                                    @else
                                         @if(request()->cookie('candidatetoken'))
                                            <button class="btn btn-primary m-2" onclick="applyForJob({{ $job->id }})">Apply</button>
                                            @endif
                                    @endif

                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        async function applyForJob(jobId) {
            const token = localStorage.getItem('candidatetoken'); // Retrieve the token from localStorage
            if (!token) {
                
                // errorToast("Token missing");
                window.location.href=`/candidate/candidateLogin`;
            }else{
                window.location.href=`/candidate/jobPreView/${jobId}`;
            }


        }
    </script>

