<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class Update extends Component
{
    public $user;

    protected $rules = [
        'user.name' => 'required|string|min:2|max:50',
        'user.email' => 'required|email',
        'user.password' => 'required|min:2|max:10',

    ];

    public function mount(User $user)
    {
        $this->user = $user;
    }


    public function submit()
    {
        $this->validate();

        $this->user->save();

        session()->flash('alert', __('Saved Successfully.'));


        return redirect()->route('users.index');
    }
    public function render()
    {
        return view('livewire.dashboard.users.update');
    }
}
