<?php

namespace App\Http\Livewire\Dashboard\Teams;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selectedId;

    public function confirm($id)
    {
        $this->emit('openDeleteModal');
        $this->selectedId = $id;
    }

    public function destroy()
    {
        Team::findOrFail($this->selectedId)->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.teams.datatable',[
            'teams' => Team::paginate(12)
        ]);
    }

}
