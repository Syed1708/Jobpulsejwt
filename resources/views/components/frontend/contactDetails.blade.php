
<section class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2  class="m-4 text-center text-uppercase">Contact Us</h2>
                <hr>
                  <div>
                    <h4>Address:</h4>
                    {!! $contact->address !!}
                </div>
                  <div>
                      <h4>Phone:</h4>
                      <p>{{ $contact->phone }}</p>
                  </div>
                  <div>
                      <h4>Email:</h4>
                      <p> {{ $contact->email }} </p>
                  </div>
              </div>
              <div class="col-md-6">
                <h2  class="m-4 text-center text-uppercase">Get In Touch</h2>
                @if (session('success'))
                <div class="alert alert-success">
                    
                    {{ session('success') }}
                </div>
                @endif

                <hr> 
                <form action="{{ url('/contact-us') }}" method="POST">
                  
                  @csrf
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
          
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" required>
          
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject">
          
                  <label for="mobile" class="form-label">Mobile</label>
                  <input type="tel" class="form-control" id="mobile" name="mobile">
          
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          
                  <button type="submit" class="btn btn-primary mt-4">Send</button>
              </form>               
            </div>
              
            </div>
            
      </div>
    
</section>

        <!-- Top Companies Section -->
        <section class="top-companies">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2  class="m-4 text-center text-uppercase">Companies believe in US</h2>
                        <hr>
                        <div class="row">
                            <!-- Dummy company cards -->
                            @foreach($companies as $company)
      
      
                            <div class="col-md-2">
                                <div class="card">
                                    {{-- <img src="{{ $company->profile->logo }}" class="card-img-top" alt="Company 1"> --}}
                                    @if($company->profile)
                                      <img src="{{ $company->profile->logo }}" class="card-img-top" alt="{{ $company->profile->name }}">
                                      @else
                                      <img src="https://via.placeholder.com/150" class="card-img-top" alt="Default Logo">
                                    @endif
                                    <div class="card-body">
                                      <h3>{{ $company->name }}</h3>
                                      <p>Total Jobs: {{ $company->jobs_count }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>