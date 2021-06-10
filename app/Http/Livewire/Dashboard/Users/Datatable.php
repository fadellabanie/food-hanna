<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class Datatable extends Component
{
    
    protected $paginationTheme = 'bootstrap';

    public $selectedId;

    public function confirm($id)
    {
        $this->emit('openDeleteModal');
        $this->selectedId = $id;
    }

    public function destroy()
    {
        User::findOrFail($this->selectedId)->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.users.datatable',[
            'users' => User::paginate(12)
        ]);
    }
}
