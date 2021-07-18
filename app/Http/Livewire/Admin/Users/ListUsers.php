<?php

namespace App\Http\Livewire\Admin\Users;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\User;

class ListUsers extends Component
{
    /* public $name, $email, $password, $passwordConfirm; */
    public $state = [];
    public $showEdit = false;
    public $user=null;
    public $userIdBeingRemoved;
    public function addUser()
    {
        $this->state = [];
        $this->showEdit = false;
        $this->dispatchBrowserEvent('show-userform');
    }

    public function createUser()
    {
        $validatedData = validator::make($this->state, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ])->validate();

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
       session()->flash('message','User Added Successfully');
        $this->dispatchBrowserEvent('hide-userform',['message'=>'User Added Successfully']);
        return redirect()->back();
    }
   public function edit(User $user)
   {
       $this->showEdit = true;
       $this->user = $user;
       $this->state = $user->toArray();
    $this->dispatchBrowserEvent('show-userform');
      
   }
   public function updateUser()
   {
       $this->showEdit = true;
    $validatedData = validator::make($this->state, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$this->user->id,
        'password' => 'sometimes|confirmed',
    ])->validate();
        if(!empty($validatedData['password'] )){
             $validatedData['password'] = bcrypt($validatedData['password']);
        }
   
    $this->user->update($validatedData);

    session()->flash('message','User Updated Successfully'); 
       
    $this->dispatchBrowserEvent('hide-userform',['message'=>'User Updated Successfully']);
      
   }
   public function confirmUserRemoval($userId){
        $this->userIdBeingRemoved = $userId;
        $this->dispatchBrowserEvent('show-delete-modal');
   }

   public function deleteUser(){
       $user = User::findOrFail($this->userIdBeingRemoved);
       $user->delete();
       $this->dispatchBrowserEvent('hide-delete-modal',['message'=>'User Deleted Successfully']);
   }
    public function render()
    {
        $users = User::latest()->paginate();
        return view('livewire.admin.users.list-users', compact('users'))->layout('layouts.admin');
    }
}
