<?php

namespace App\Http\Livewire\Dashboard\Banners;

use App\Models\Banner;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;

    public  Banner $banner;

    public $images;

    protected $rules = [
        'banner.location' => 'required',
        'banner.status' => 'required',
        'images' => 'nullable',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function updatedImages()
    {
        $this->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    }

    public function submit()
    {
        $this->validate();
     
        $this->banner->save();

        session()->flash('alert', __('Saved Successfully.'));


        return redirect()->route('banners.index');
    }

    public function render()
    {
        return view('livewire.dashboard.banners.update');
    }
}
