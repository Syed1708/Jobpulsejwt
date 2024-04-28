    <!-- Top Companies Section -->
    <section class="top-companies">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2  class="m-4 text-center text-uppercase">Top Companies</h2>
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