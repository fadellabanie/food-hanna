<?php

namespace App\Http\Livewire\Dashboard\Teams;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;

    public  Team $team;
    public $image;
    protected $rules = [
        'team.name' => 'required|string|min:2|max:50',
        'team.position' => 'required|string|min:2|max:100',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];



    public function submit()
    {
        $this->validate();
        if ($this->image) {
            if (Storage::disk('public')->exists($this->client->image)) {
                Storage::disk('public')->delete($this->client->image);
            }

            $this->client->image = $this->image->store('clients', 'public');
        }
        $this->team->save();

        $this->reset('image');

        $this->dispatchBrowserEvent('pondReset');
        session()->flash('alert', __('Saved Successfully.'));


        return redirect()->route('teams.index');
    }

    public function render()
    {
        return view('livewire.dashboard.teams.update');
    }
}
