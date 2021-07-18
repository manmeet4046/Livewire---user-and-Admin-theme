<div>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Users</h1>
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
                <div class=" d-flex justify-content-end"><button wire:click.prevent="addUser" class="btn btn-primary mb-2"><i class="fa fa-plus-circle mr-1"></i>Add  New User</button></div>
              <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Options</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                          <tr>
                            <th scope="row">{{  $loop->iteration}}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="" wire:click.prevent="edit({{ $user }})"><i class="fa fa-edit mr-2"></i></a>
                                 <a href="" wire:click.prevent="confirmUserRemoval({{ $user->id }})"><i class="fa fa-trash text-danger"></i></a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
  
            
            </div>
           
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
      <!-- Modal User --->
      <div class="modal fade" id="userform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <form wire:submit.prevent={{ ($showEdit)?   'updateUser': 'createUser'}}>
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="exampleModalLabel"><i class="fa fa-users text-primary"></i>{{ ($showEdit)?' Edit User': ' Add New User' }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" wire:model.defer="state.name" class="form-control    @error('name') is-invalid @enderror"  id="name" aria-describedby="nameHelp" placeholder="Enter Your Full Name">
                      
                        @error('name')
                           
                      <div class="invalid-feedback">
                           {{ $message }}
                          </div>  
                          @enderror 
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" wire:model.defer="state.email" class="form-control  @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Your Email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      @error('email')
                           
                      <div class="invalid-feedback">
                           {{ $message }}
                          </div>  
                          @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" wire:model.defer="state.password" class="form-control  @error('password') is-invalid @enderror"" id="password" placeholder="Enter the Password">
                      @error('password')
                           
                      <div class="invalid-feedback">
                           {{ $message }}
                          </div>  
                          @enderror 
                    </div>
                    <div class="form-group">
                        <label for="passwordConfirm">Confirm Password</label>
                        <input type="password" wire:model.defer="state.password_confirmation" class="form-control" id="passwordConfirm" placeholder="Confirm Password">
                      </div>
                   
                   
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-2"></i>Cancel</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2 "></i>{{ ($showEdit)? ' Update Existing User':' Save New User' }}</button>
            </div>
          </div>
        </form>
        </div>
      </div>

      <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header"><h5>Delete User</h5></div>
            <div class="modal-body"> <h4>Are you sure? You want to delete this user!</h4></div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-2"></i>Cancel</button>
                <button type="button" wire:click.prevent="deleteUser" class="btn btn-primary"><i class="fa fa-trash mr-2 "></i>Delete User</button>
              </div>
        </div>
        </div>
      </div>
</div>
