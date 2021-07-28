<div>
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="row mb-2 ml-5">
    <div class="col-sm-8">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Site Settings</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent="updateSetting">
          <div class="card-body">
            <div class="form-group">
              <label for="siteName">Site Name</label>
              <input wire:model.defer="state.site_name" type="text" class="form-control" id="siteName" placeholder="Enter Site Name">
            </div>
            <div class="form-group">
                <label for="siteEmail">Site Email</label>
                <input wire:model.defer="state.site_email"  type="email" class="form-control" id="siteEmail" placeholder="Enter Site Email">
              </div>
              <div class="form-group">
                <label for="siteTitle">Site Title</label>
                <input wire:model.defer="state.site_title"  type="text" class="form-control" id="siteTitle" placeholder="Enter Site site Title">
              </div>
              <div class="form-group">
                <label for="footerText">Footer</label>
                <input wire:model.defer="state.footer_text"  type="text" class="form-control" id="footerText" placeholder="Enter footerText">
              </div>
           
            <div class="form-group">
                <label for="sidebar_collapse">Side bar Collapse</label><br/>
                <input wire:model.defer="state.sidebar_collapse"  type="checkbox" class="" id="sidebar_collapse" >
              </div>
           
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div></div>

    <script>
    window.addEventListener('updated', event=>{
        
        toastr.success(event.detail.message, 'success');
       
    });

    </script>
</div>
