<?php

namespace App\Http\Livewire\Dashboard\Teams;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $team;
    public $upload;

    protected $rules = [
        'team.name' => 'required|string|min:2|max:50',
        'team.position' => 'required|string|min:2|max:100',
        'team.image' => 'nullable',
    ];

    public function mount(Team $team)
    {
        $this->team = $team;
    }
    public function updatedUpload()
    {
        $this->validate([
            'upload' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    }

    public function submit()
    {
        $this->validate();

        $this->team->save();

        if ($this->upload) {
            $this->team->update([
                'image' => $this->upload->store('teams', 'public')
            ]);
        }
        session()->flash('alert', __('Saved Successfully.'));
    

    return redirect()->route('teams.index');
}

    public function render()
    {
        return view('livewire.dashboard.teams.update');
    }
}
