<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Banner as BannerModel;

class Banner extends Component
{
    public $location;
    public function render()
    {
        return view('livewire.banner',[
            'banners' => BannerModel::with('images')
            ->where('location',$this->location)
            ->get(),
        ]);
    }
}
