    <!-- Recent Job Posts Section -->
    <section class="recent-job-posts">
        <div class="container">
            <div class="row">
  
                <div class="col-md-12">
                    <h2 class="m-4 text-center text-uppercase">Recent Job Posts</h2>
                    <hr>
                    <div class="row">
                        <div class="row mb-3">
                          <div class=" col-md-8">
                            @foreach($jobcat as $category)
                            <button type="button" class="btn btn-outline-primary mr-2 category-button"
                            onclick="fetchJobsByCategory('{{ $category->id }}'); markActiveCategory(this)"
                            >{{ $category->name }} ({{ $category->jobs_count }})</button>
                            
                            @endforeach
                          </div>
                            <div class="col-md-4">
                              <div class="input-group">
  
                                  <input type="text" class="form-control" placeholder="Search for jobs" id="searchInput">
                                  <button type="button" class="btn btn-primary" id="searchButton">Search Jobs</button>
                              </div>
                          </div>
                        </div>
                        
                        <div class="row" id="jobPosts">
                          

  
                        </div>
                        
  
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- Pagination -->
    <section class="pagination mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="pagination">
                  
                  {{-- {{ $jobs->links('vendor.pagination.bootstrap-5') }} --}}
  
                </div>
            </div>
        </div>
    </section>
  
  
    <script>
   
  //  fetch categoryposts
  async function fetchJobsByCategory(categoryId, page = 1) {
  
      let res = await axios.get(`/jobCategory/${categoryId}?page=${page}`);
      document.getElementById('jobPosts').innerHTML = ''; 
  
      if (res.data.status === 'success') {
  
          res.data.data.data.forEach(job => {
                  let jobCardHtml = `
                      <div class="col-md-6">
                          <div class="card mb-4">
                              <div class="card-body">
                                  <h5 class="card-title font-bold">${job.title}</h5>
                                  <p class="card-text">Salary: Tk ${job.salary}</p>
                                  <p class="card-text">Location: ${job.location}</p>
                                  <p class="card-text">Tags: `;
                  job.tags.forEach(tag => {
                      jobCardHtml += `<span class="badge text-bg-info p-2 m-1">${tag}</span>`;
                  });
                  jobCardHtml += `</p>
                                  <a href="#" class="btn btn-primary">Details</a>
                                  <a href="#" class="btn btn-primary">Apply</a>
                              </div>
                          </div>
                      </div>`;
                  document.getElementById('jobPosts').innerHTML += jobCardHtml;
              });
              // Generate pagination links
              generatePaginationLinksCategory(res.data.data, categoryId);
  
      } else {
          document.getElementById('jobPosts').innerHTML = `<p>No Jobs Available</p>`; 
      }
  }
  
  // active cat button
  function markActiveCategory(button) {
      
      const categoryButtons = document.querySelectorAll('.category-button');
      categoryButtons.forEach(btn => {
          btn.classList.remove('active');
      });
  
      button.classList.add('active');
  }
  
  
  fetchRecentJobPosts(1); 
  
  async function fetchRecentJobPosts(page) {
      try {
          // Make an AJAX request to fetch recent job posts for the specified page
          let res = await axios.get(`/recentJobPosts?page=${page}`);
          console.dir(res.data.candidate_id);
  
          // Update the #jobPosts section with the fetched data
          document.getElementById('jobPosts').innerHTML = '';
          if (res.data['status']==='success') {
  
              // const candidatetoken = localStorage.getItem('candidatetoken'); 
              const candidate_id = res.data.candidate_id; 
          
  
              res.data.data.data.forEach(job => {
                  let jobCardHtml = `
                      <div class="col-md-6">
                          <div class="card mb-4">
                              <div class="card-body">
                                  <h5 class="card-title font-bold">${job.title}</h5>
                                  <p class="card-text">Salary: Tk ${job.salary}</p>
                                  <p class="card-text">Location: ${job.location}</p>
                                  
                                  <p class="card-text">Tags: `;
                  job.tags.forEach(tag => {
                      jobCardHtml += `<span class="badge text-bg-info p-2 m-1">${tag}</span>`;
                  });
                  
                 
  
                  jobCardHtml += `</p>
                                  <a href="/job/${job.id}" class="btn btn-primary">Details</a>`;
  
                  
                  if ( job.applications && job.applications.length > 0 && job.applications.map(application => application.candidate_id).includes(candidate_id)) {
                      // User has already applied for this job
                      jobCardHtml += `<button class="btn btn-primary m-2" disabled>Already Applied</button>`;
                  } else {
                      // User has not applied for this job
                    //   @if(request()->cookie('token'))

                    //   @elseif (request()->cookie('companytoken'))
                    //   jobCardHtml += `<button class="btn btn-primary m-2" onclick="applyForJob(${job.id})">NNApply</button>`;
                    //   @else
                    //   jobCardHtml += `<button class="btn btn-primary m-2" onclick="applyForJob(${job.id})">Apply</button>`;
                    //   @endif

                    //   @if(request()->cookie('candidatetoken'))

            
                      jobCardHtml += `<button class="btn btn-primary m-2" onclick="applyForJob(${job.id})">Apply</button>`;
                    //   @endif
                      
                  }
  
                  jobCardHtml += `</div>
                          </div>
                      </div>`;
                  document.getElementById('jobPosts').innerHTML += jobCardHtml;
              });
              // Generate pagination links
              generatePaginationLinks(res.data.data);
          } else {
              document.getElementById('jobPosts').innerHTML = `
                  <div class="col-md-12"> 
                      <p>No Jobs Available</p>
                  </div>`;
          }
      } catch (error) {
          console.error('Error fetching job posts:', error);
      }
  }
  
  async function applyForJob(jobId) {
      const token = localStorage.getItem('candidatetoken'); // Retrieve the token from localStorage
      
      if (!token) {
          
          // errorToast("Token missing");
          window.location.href=`/candidate/candidateLogin`;
      }else{
          window.location.href=`/candidate/jobPreView/${jobId}`;
      }
  
  
  }
  
  // pagiantion for recentjobposts
  function generatePaginationLinks(data) {
      if (data.last_page === 1) {
          document.getElementById('pagination').innerHTML = ''; // Hide pagination
          return; // Exit function
      }
      let paginationHtml = `
      
          <nav aria-label="Page navigation">
              <ul class="pagination">
                  
                  <li class="page-item ${data.prev_page_url ? '' : 'disabled'}">
                      <a class="page-link" href="javascript:void(0)" onclick="fetchRecentJobPosts(${data.current_page - 1})">Previous</a>
                  </li>`;
      for (let i = 1; i <= data.last_page; i++) {
          paginationHtml += `
              <li class="page-item ${i === data.current_page ? 'active' : ''}">
                  <a class="page-link" href="javascript:void(0)" onclick="fetchRecentJobPosts(${i})">${i}</a>
              </li>`;
      }
      paginationHtml += `
              <li class="page-item ${data.next_page_url ? '' : 'disabled'}">
                  <a class="page-link" href="javascript:void(0)"
                   onclick="fetchRecentJobPosts(${data.current_page + 1})">Next</a>
              </li>
          </ul>
      </nav>`;
      document.getElementById('pagination').innerHTML = paginationHtml;
  }
  // pagiantion for recentjobpostsCat
  function generatePaginationLinksCategory(data, categoryId) {
      if (data.last_page === 1) {
          document.getElementById('pagination').innerHTML = ''; // Hide pagination
          return; // Exit function
      }
      let paginationHtml = `
          <nav aria-label="Page navigation">
              <ul class="pagination">
                  <li class="page-item ${data.prev_page_url ? '' : 'disabled'}">
                      <a class="page-link" href="javascript:void(0)" onclick="fetchJobsByCategory('${categoryId}', ${data.current_page - 1})">Previous</a>
                  </li>`;
      for (let i = 1; i <= data.last_page; i++) {
          paginationHtml += `
              <li class="page-item ${i === data.current_page ? 'active' : ''}">
                  <a class="page-link" href="javascript:void(0)" onclick="fetchJobsByCategory('${categoryId}', ${i})">${i}</a>
              </li>`;
      }
      paginationHtml += `
              <li class="page-item ${data.next_page_url ? '' : 'disabled'}">
                  <a class="page-link" href="javascript:void(0)" onclick="fetchJobsByCategory('${categoryId}', ${data.current_page + 1})">Next</a>
              </li>
          </ul>
      </nav>`;
      document.getElementById('pagination').innerHTML = paginationHtml;
  }
  
  
      // Function to handle search
     async function handleSearch() {
        // Make an AJAX request to fetch search results
        let searchQuery = document.getElementById('searchInput').value;
  
        let res=await axios.get('/search?term=' + searchQuery);
      //   console.log(res.data.data);
      //   console.log(res.data.status);
  
        document.getElementById('jobPosts').innerHTML = '';
        // Simulated data for demonstration
        if(res.data['status']==='success'){
          
          const jobData = res.data.data.data;
          jobData.forEach(job => {
        let jobCardHtml = `
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title font-bold">${job.title}</h5>
                <p class="card-text">Salary: Tk ${job.salary}</p>
                <p class="card-text">Location: ${job.location}</p>
                <p class="card-text">Tags: `;
              job.tags.forEach(tag => {
                  jobCardHtml += `<span class="badge text-bg-info p-2 m-1">${tag}</span>`;
              });
              jobCardHtml += `</p>
                      <a href="#" class="btn btn-primary">Details</a>
                      <a href="#" class="btn btn-primary">Apply</a>
                      </div>
                  </div>
                  </div>`;
                  jobPosts.innerHTML += jobCardHtml;
              });
              generatePaginationLinks(res.data.data);
  
        
        
          }else{
          document.getElementById('jobPosts').innerHTML = `
          <div class="col-md-12"> 
              <p>No Jobs Found</p>
          </div>
           `;
        }
        
      
      }
  
      // Event listener for the search button
      document.getElementById('searchButton').addEventListener('click', function() {
        // Call the handleSearch function when the search button is clicked
        handleSearch();
      });
  
  
  
  
  
  
  
    </script>
    