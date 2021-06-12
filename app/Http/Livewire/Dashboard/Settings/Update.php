<?php

namespace App\Http\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;

class Update extends Component
{
    public Setting $setting;

    protected $rules = [
        'setting.address' => 'required',
        'setting.mobile' => 'required',
        'setting.office' => 'required',
        'setting.email' => 'required',
        'setting.facebook' => 'required',
        'setting.twitter' => 'required',
        'setting.linkedin' => 'required',
        'setting.google_plus' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        $this->setting->save();

        session()->flash('alert', __('Saved Successfully.'));
        return redirect()->route('admin');
    }

    public function mount()
    {
        $this->setting = Setting::first();
    }

    public function render()
    {
        return view('livewire.dashboard.settings.update');
    }
}
