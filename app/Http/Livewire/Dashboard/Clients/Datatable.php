<?php

namespace App\Http\Livewire\Dashboard\Clients;

use App\Models\Client;
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
        Client::findOrFail($this->selectedId)->delete();
    }


    public function render()
    {
        return view('livewire.dashboard.clients.datatable', [
            'clients' => Client::paginate(12)
        ]);
    }
}
