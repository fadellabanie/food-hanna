<?php

namespace App\Http\Livewire\Dashboard\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;

    public Client $client;
    public $image;

    protected $rules = [
        'client.name' => 'required|string|min:2|max:50',
        'client.position' => 'required|string|min:2|max:100',
        'client.description_nl' => 'required|string|max:500',
        'client.description_en' => 'required|string|max:500',
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
        $this->client->save();
        $this->reset('image');

        $this->dispatchBrowserEvent('pondReset');
        
        session()->flash('alert', __('Saved Successfully.'));


        return redirect()->route('clients.index');
    }
    public function render()
    {
        return view('livewire.dashboard.clients.update');
    }
}
