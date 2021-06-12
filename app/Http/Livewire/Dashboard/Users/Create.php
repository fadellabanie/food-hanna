<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{

    public $name;
    public $email;
    public $password;
    public $role;
   
    protected $rules = [
        'name' => 'required|string|min:3|max:50',
        'email' => 'required|email',
        'password' => 'required|min:8|max:10',
        //'role' => 'required',
        ];

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('users.index');
    }
    public function render()
    {
        return view('livewire.dashboard.users.create');
    }
}
