<div>
    <style>
      .hr{
        border-top: 1px dashed red;
      }
       
    </style>
    <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>WEBSITE FEEDBACK FORM</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact us</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-body">
       {{-- <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2>Admin<strong>LTE</strong></h2>
            <p class="lead mb-5">123 Testing Ave, Testtown, 9876 NA<br>
              Phone: +1 234 56789012
            </p>
          </div>
        </div> --}} 
        <form wire:submit.prevent="createFeedback">
            @csrf
        <div>Please fill out this brief feedback form so we can ensure a top quality experience to all of our visitors</div>
       <div class="row"> <div class="col-6">
          <div class="form-group">
            
            <input wire:model.defer="state.name" type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
            @error('name')
               <div class="invalid-feedback">{{ $message }}</div> 
           @enderror
          </div></div>
          <div class="col-6">
          <div class="form-group">
          
            <input wire:model.defer="state.email" type="email"  name="email" id="email" class="form-control @error('email') is-invalid @enderror"" placeholder="E-Mail">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
        </div>
        </div></div>
        <hr class="hr">
        <div class="row">
        <div class="col-md-6">
          <div>Is this your first visit to the website?</div>
        <div class="form-check"  wire:model="state.first_visit">
            <input  class="form-check-input" type="radio" value="1" name="first_visit[]" checked id="first_visit">
            <label class="form-check-label" for="first_visit"> Yes
            
            </label><br/>
            <input  class="form-check-input" type="radio" value="0" name="first_visit[]"   id="first_visit" >
            <label class="form-check-label" for="first_visit"> No
            
            </label>
          </div>
        
          <div class="form-check">
           
          </div>
          <div >What is the primary reason for your visit to the website?</div>
          <div class="form-group">
           
            <textarea wire:model.defer="state.visit_reason"id="visit_reason" class="form-control @error('visit_reason') is-invalid @enderror"" rows="4" placeholder='Your Message'></textarea>
            @error('visit_reason')
            <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
        </div>
  
        </div>
       
        <div class="col-md-6">
          <div>Were you able to find what you needed?</div>
          <div class="form-check" wire:model.defer="state.gotInfo">
            <input  class="form-check-input" type="radio" value="1" checked="true" name="gotInfo[]" id="gotInfo">
            <label class="form-check-label" for="gotInfo"> Yes
            
            </label><br/>
            <input class="form-check-input" type="radio" value="0" name="gotInfo[]" id="gotInfo" >
            <label class="form-check-label" for="gotInfo"> No
            
            </label>
          </div>
          <div class="form-check">
            
          </div>
          <div >If you did not find the information which  you were looking for needed</div>
          <div class="form-group">
            
            <textarea wire:model.defer="state.required_info" id="required_info" class="form-control" rows="4" placeholder='Please tell us what info you were seeking? Here ....'></textarea>
          </div>
        </div>
        </div>
        <hr class="hr">
        <div class="row justify-content-center">
          
        <div class="col-md-8  align-items-center justify-content-center">
          
          <div class="form-group">
           Please provide any additional comments or suggestions. optional
            <textarea wire:model.defer="state.suggestions" id="suggestions" class="form-control" rows="4" placeholder="You suggestions"></textarea>
          </div></div>
          <div class="col-md-8  d-flex align-items-center justify-content-center">
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Send message">
          </div></div>
        </div>
        </form>
      </div>
        </div>
    </div>
    @push('js')
    <script>
         window.addEventListener('alert', event=>{
       
        toastr.success(event.detail.message, 'alert');
      </script>
      
  @endpush
  </section>

  </div>