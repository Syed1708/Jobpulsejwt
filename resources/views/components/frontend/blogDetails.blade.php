
    <section class="company-history">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2  class="m-4 text-center text-uppercase">Blog Details For {{ $blog->title }}</h2>
                    <hr>
                    <div class="row">
                    
                        
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    {{-- @dump($blog) --}}
                                    {{-- <h5 class="card-title font-bold">{{ $candidate_id }}</h5> --}}
                                    <h5 class="card-title font-bold">{{ $blog->title }}</h5>
                                    <img src="{{$blog->featured_image}}" class="card-img-top" alt="{{ $blog->title }}">
                                    <p class="card-text">Description{{ $blog->description }}</p>
                                    <p class="card-text">Tags: 
                                      @foreach($blog->tags as $tag)
                                          <span class="badge text-bg-info p-2">{{ $tag }}</span>
                                      @endforeach
                                        
                                    </p>

                                    

                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



