    <!-- Recent Blog Posts Section -->
    <section class="recent-blog-posts">
      <div class="container">
          <div class="row">

              <div class="col-md-12">
                  <h2 class="m-4 text-center text-uppercase">Recent Blog Posts</h2>
                  <hr>
                  <div class="row">
                      <div class="row mb-3">
                        <div class=" col-md-8">
                          @foreach($blogcat as $category)
                          <button type="button" class="btn btn-outline-primary mr-2 category-button"
                          onclick="fetchBlogsByCategory('{{ $category->id }}'); markActiveCategory(this)"
                          >{{ $category->name }} ({{ $category->blogs_count }})</button>
                          
                          @endforeach
                        </div>
                          <div class="col-md-4">
                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Search for blogs" id="searchInput">
                                <button type="button" class="btn btn-primary" id="searchButton">Search Blogs</button>
                            </div>
                        </div>
                      </div>
                      
                      <div class="row" id="blogPosts">
                        


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
                
                {{-- {{ $blogs->links('vendor.pagination.bootstrap-5') }} --}}

              </div>
          </div>
      </div>
  </section>


  <script>
 
//  fetch categoryposts
async function fetchBlogsByCategory(categoryId, page = 1) {

    let res = await axios.get(`/blogCategory/${categoryId}?page=${page}`);
    document.getElementById('blogPosts').innerHTML = ''; 

    if (res.data.status === 'success') {

        res.data.data.data.forEach(blog => {
                let blogCardHtml = `
                    <div class="col-md-6">
                        <div class="card mb-4"> 
                            <div class="card-body">
                                <h5 class="card-title font-bold">${blog.title}</h5>
                                <img src="${blog.featured_image}" class="card-img-top" alt="${blog.title}">
                                <p class="card-text">Tags: `;
                blog.tags.forEach(tag => {
                    blogCardHtml += `<span class="badge text-bg-info p-2 m-1">${tag}</span>`;
                });
                blogCardHtml += `</p>
                                <a href="/blog/${blog.id}" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    </div>`;
                document.getElementById('blogPosts').innerHTML += blogCardHtml;
            });
            // Generate pagination links
            generatePaginationLinksCategory(res.data.data, categoryId);

    } else {
        document.getElementById('blogPosts').innerHTML = `<p>No Blogs Available</p>`; 
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


fetchRecentBlogPosts(1);  

async function fetchRecentBlogPosts(page) {
    try {
        // Make an AJAX request to fetch recent blog posts for the specified page
        let res = await axios.get(`/recentBlogPosts?page=${page}`);
        console.dir(res.data.candidate_id);

        // Update the #blogPosts section with the fetched data
        document.getElementById('blogPosts').innerHTML = '';
        if (res.data['status']==='success') {

            // const candidatetoken = localStorage.getItem('candidatetoken'); 
            const candidate_id = res.data.candidate_id; 
        

            res.data.data.data.forEach(blog => { 
                let blogCardHtml = `
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title font-bold">${blog.title}</h5>
                                <img src="${blog.featured_image}" class="card-img-top" alt="${blog.title}">
                                
                                <p class="card-text">Tags: `;
                blog.tags.forEach(tag => {
                    blogCardHtml += `<span class="badge text-bg-info p-2 m-1">${tag}</span>`;
                });
                
               

                blogCardHtml += `</p>
                                <a href="/blog/${blog.id}" class="btn btn-primary">Details</a>`;


                blogCardHtml += `</div>
                        </div>
                    </div>`;
                document.getElementById('blogPosts').innerHTML += blogCardHtml;
            });
            // Generate pagination links
            generatePaginationLinks(res.data.data);
        } else {
            document.getElementById('blogPosts').innerHTML = `
                <div class="col-md-12"> 
                    <p>No Blogs Available</p>
                </div>`;
        }
    } catch (error) {
        console.error('Error fetching blog posts:', error);
    }
}


// pagiantion for recentblogposts
function generatePaginationLinks(data) {
    if (data.last_page === 1) {
        document.getElementById('pagination').innerHTML = ''; // Hide pagination
        return; // Exit function
    }
    let paginationHtml = `
    
        <nav aria-label="Page navigation">
            <ul class="pagination">
                
                <li class="page-item ${data.prev_page_url ? '' : 'disabled'}">
                    <a class="page-link" href="javascript:void(0)" onclick="fetchRecentBlogPosts(${data.current_page - 1})">Previous</a>
                </li>`;
    for (let i = 1; i <= data.last_page; i++) {
        paginationHtml += `
            <li class="page-item ${i === data.current_page ? 'active' : ''}">
                <a class="page-link" href="javascript:void(0)" onclick="fetchRecentBlogPosts(${i})">${i}</a>
            </li>`;
    }
    paginationHtml += `
            <li class="page-item ${data.next_page_url ? '' : 'disabled'}">
                <a class="page-link" href="javascript:void(0)"
                 onclick="fetchRecentBlogPosts(${data.current_page + 1})">Next</a>
            </li>
        </ul>
    </nav>`;
    document.getElementById('pagination').innerHTML = paginationHtml;
}
// pagiantion for recentblogpostsCat
function generatePaginationLinksCategory(data, categoryId) {
    if (data.last_page === 1) {
        document.getElementById('pagination').innerHTML = ''; // Hide pagination
        return; // Exit function
    }
    let paginationHtml = `
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item ${data.prev_page_url ? '' : 'disabled'}">
                    <a class="page-link" href="javascript:void(0)" onclick="fetchBlogsByCategory('${categoryId}', ${data.current_page - 1})">Previous</a>
                </li>`;
    for (let i = 1; i <= data.last_page; i++) {
        paginationHtml += `
            <li class="page-item ${i === data.current_page ? 'active' : ''}">
                <a class="page-link" href="javascript:void(0)" onclick="fetchBlogsByCategory('${categoryId}', ${i})">${i}</a>
            </li>`;
    }
    paginationHtml += `
            <li class="page-item ${data.next_page_url ? '' : 'disabled'}">
                <a class="page-link" href="javascript:void(0)" onclick="fetchBlogsByCategory('${categoryId}', ${data.current_page + 1})">Next</a>
            </li>
        </ul>
    </nav>`;
    document.getElementById('pagination').innerHTML = paginationHtml;
}


    // Function to handle search
   async function handleSearch() {
      // Make an AJAX request to fetch search results
      let searchQuery = document.getElementById('searchInput').value;

      let res=await axios.get('/searchblog?term=' + searchQuery);
    //   console.log(res.data.data);
    //   console.log(res.data.status);

      document.getElementById('blogPosts').innerHTML = '';
      // Simulated data for demonstration
      if(res.data['status']==='success'){
        
        const blogData = res.data.data.data;
        blogData.forEach(blog => {
      let blogCardHtml = `
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title font-bold">${blog.title}</h5>
              <img src="${blog.featured_image}" class="card-img-top" alt="${blog.title}">
              <p class="card-text">Tags: `;
            blog.tags.forEach(tag => {
                blogCardHtml += `<span class="badge text-bg-info p-2 m-1">${tag}</span>`;
            });
            blogCardHtml += `</p>
                    <a href="/blog/${blog.id}" class="btn btn-primary">Details</a>
                    </div>
                </div>
                </div>`;
                blogPosts.innerHTML += blogCardHtml;
            });
            generatePaginationLinks(res.data.data);

      
      
        }else{
        document.getElementById('blogPosts').innerHTML = `
        <div class="col-md-12"> 
            <p>No Blogs Found</p>
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
  