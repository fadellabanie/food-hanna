<?php

namespace App\Http\Livewire\Dashboard\Banners;

use App\Models\Banner;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $location;
    public $image;
    public $status;
    
    protected $rules = [
        'location' => 'required|string|min:2|max:100',
        'status' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = ($this->image) ? $this->image->store('banners', 'public') : '';

        Banner::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('banners.index');
    }

    public function render()
    {
        return view('livewire.dashboard.banners.create');
    }
}
