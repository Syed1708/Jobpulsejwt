<div class="container-fluid">
    <div class="row" id="pluginList">



    </div>
</div>




<script>
 getList();


async function getList() {
    showLoader();
    let res=await axios.get("/list-plugin-user");
    hideLoader();
    // console.log(res.data);
    document.getElementById('pluginList').innerHTML = ''; 

    if (res.data.status === 'success') {

    res.data.data.forEach(function (plugin,index) {
        // console.log('visible_in_menu:', plugin.visible_in_menu); 

        let buttonText = plugin.visible_in_menu ? 'Plugin' : 'Active Plugin';

        let row=`
        <div  class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
           
        <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="pluginName">${plugin['name']}</span>
                                </h5>
                                <p class="mb-0 text-sm" id="pluginDesc">${plugin['description']}</p>

                            <button onclick="visible(${plugin['id']})" class="btn editBtn btn-sm btn-outline-success">${buttonText}</button>

                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                <img class="w-100 " src=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        
        `
        document.getElementById('pluginList').innerHTML += row;
    })

    } else {
          document.getElementById('pluginList').innerHTML = `<p>No Plugingd Available</p>`; 
      }
  



}

async function visible(id){

    // alert(id)
    showLoader();
    let res=await axios.put(`/plugin-pages/${id}/toggle-visibility`);
    hideLoader();
 console.log(res.statusText);
 console.log(res.status);
    if (res.status === 200 &&  res.statusText === 'OK') {
        successToast('Plugin successfully');
        document.getElementById('pluginList').innerHTML = ''; 
        await getList();
    } else {
        errorToast('somthing wrong'); 
          await getList();
      }
}


</script>
