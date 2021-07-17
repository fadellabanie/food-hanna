<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Banner as BannerModel;

class Banner extends Component
{
    public $location;
    public function render()
    {
        $banners = BannerModel::with('images')
        ->where('location',$this->location)
        ->first();


        return view('livewire.banner',[
            'banners' =>($banners) ? $banners->images : collect(),
        ]);
    }
}
