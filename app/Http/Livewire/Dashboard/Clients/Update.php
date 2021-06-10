<?php

namespace App\Http\Livewire\Dashboard\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $client;
    public $upload;

    protected $rules = [
        'client.name' => 'required|string|min:2|max:50',
        'client.position' => 'required|string|min:2|max:100',
        'client.description_nl' => 'required|string|max:500',
        'client.description_en' => 'required|string|max:500',
        'client.image' => 'nullable',
    ];

    public function mount(Client $client)
    {
        $this->client = $client;
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

        $this->client->save();

        if ($this->upload) {
            $this->team->update([
                'image' => $this->upload->store('clients', 'public')
            ]);
        }
        session()->flash('alert', __('Saved Successfully.'));
    

    return redirect()->route('clients.index');
}
    public function render()
    {
        return view('livewire.dashboard.clients.update');
    }
}
