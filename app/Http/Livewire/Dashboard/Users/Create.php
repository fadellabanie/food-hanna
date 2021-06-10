<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $email;
    public $role;
   
    protected $rules = [
        'name' => 'required|string|min:3|max:50',
        'email' => 'required|email',
        'role' => 'required',
        ];

    public function submit()
    {
        $validatedData = $this->validate();

        User::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('user.index');
    }
    public function render()
    {
        return view('livewire.dashboard.users.create');
    }
}
