<?php

namespace App\Http\Livewire\Dashboard\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $position;
    public $description_en;
    public $description_nl;
    public $image;

    protected $rules = [
        'name' => 'required|string|min:3|max:25',
        'position' => 'required|string|min:2|max:25',
        'description_nl' => 'required|string|max:500',
        'description_en' => 'required|string|max:500',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = ($this->image) ? $this->image->store('clients', 'public') : '';

        Client::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('clients.index');
    }

    public function render()
    {
        return view('livewire.dashboard.clients.create');
    }
}
