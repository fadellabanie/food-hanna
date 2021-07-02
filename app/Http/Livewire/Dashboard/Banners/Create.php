<?php

namespace App\Http\Livewire\Dashboard\Banners;

use App\Models\Banner;
use App\Models\BannerImage;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $location;
    public $images = [];
    public $status;

    protected $rules = [
        'location' => 'required',
        'status' => 'required|in:1,0',
        'images' => 'required',
        'images.*' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        $banner = Banner::create([
            'location' =>  $validatedData['location'],
            'status' =>  $validatedData['status'],
        ]);
        foreach ($validatedData['images'] as $key => $image) {
            BannerImage::create([
                'banner_id' =>  $banner->id,
                'image' => $this->images ? $this->images[$key]->store('banners', 'public') : '',

            ]);
        }


        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('banners.index');
    }

    public function render()
    {
        return view('livewire.dashboard.banners.create');
    }
}
