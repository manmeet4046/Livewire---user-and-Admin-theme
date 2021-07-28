<div>
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Feeback</h1>
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
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          @if(session('message'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><i class="fa fa-check-circle mr-2"></i>Success!</strong> {{ session('message') }}.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        <div class="row">
          <div class="col-lg-12">
              <div class=" d-flex justify-content-center">
                                                     
                  


                  <div class="card">
              <div class="card-body">
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Reason to Visit</th>
                          <th scope="col">Information Asked For</th>
                          <th scope="col">Suggestions</th>
                          <th scope="col">Delete Feedback</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($feedbacks as $feedback )
                          
                        
                        <tr>
                          <th scope="row">{{  $loop->iteration}}</th>
                          <td>{{ $feedback->name }}</td>
                          <td>{{$feedback->email }}</td>
                          <td>{{$feedback->email }}</td>
                          <td>{{$feedback->email }}</td>
                          <td>{{$feedback->email }}</td>

                          
                          <td>
                            <a href="" wire:click.prevent="showFeedback({{$feedback->id }}) "><i class="fa fa-edit text-danger"></i></a>
                               <a href="" wire:click.prevent="confirmFeedbackRemoval({{$feedback->id }}) "><i class="fa fa-trash text-danger"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
              </div>
              <div class="car-footer d-flex justify-content-center">{{ $feedbacks->links() }}</div>
            </div>

          
          </div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- Modal User --->
  

    <div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header"><h5>Delete User</h5></div>
          <input type="text" wire:model="state.name" class="border-0;" />
          <div class="modal-body"> <h4 ></h4></div>
          <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-2"></i>Cancel</button>
              <button type="button" wire:click.prevent="deleteFeedback" class="btn btn-primary"><i class="fa fa-trash mr-2 "></i>Delete User</button>
            </div>
      </div>
      </div>
    </div>
</div>
