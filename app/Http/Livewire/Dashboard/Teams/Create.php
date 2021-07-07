<?php

namespace App\Http\Livewire\Dashboard\Teams;

use App\Models\Team;
use Livewire\Component;
use App\Support\HFUpload;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $position;
    public $image;
    
    protected $rules = [
        'name' => 'required|string|min:2|max:50',
        'position' => 'required|string|min:2|max:100',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = ($this->image) ? HFUpload::make($this->image)->folder('teams')->upload() : '';

        Team::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('teams.index');
    }

    public function render()
    {
        return view('livewire.dashboard.teams.create');
    }
}
