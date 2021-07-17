<?php

namespace App\Http\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public Setting $setting;
    public $do_ghazal;
    public $happy_cow_cheese;
    public $dutso;

    protected $rules = [
        'setting.about' => 'required',
        'setting.address' => 'required',
        'setting.mobile' => 'required',
        'setting.office' => 'required',
        'setting.email' => 'required',
        'setting.facebook' => 'required',
        'setting.twitter' => 'required',
        'setting.linkedin' => 'required',
        'setting.google_plus' => 'required',
        'setting.about' => 'required',
        'setting.map' => 'required',
        'setting.about_video' => 'required',
        'dutso' =>'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'do_ghazal' =>'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'happy_cow_cheese' =>'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function updatedDoGhazal()
    {
        $this->validate([
            'do_ghazal' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    }
    public function updatedHappyCowCheese()
    {
        $this->validate([
            'happy_cow_cheese' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    }
    public function updatedDutso()
    {
        $this->validate([
            'dutso' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    }

    public function submit()
    {

        $this->validate();
        $this->setting->save();
        if ($this->happy_cow_cheese) {
            $this->setting->update([
                'happy_cow_cheese' => $this->happy_cow_cheese->store('settings', 'public')
            ]);
        }
        if ($this->do_ghazal) {
            $this->setting->update([
                'do_ghazal' => $this->do_ghazal->store('settings', 'public')
            ]);
        }
        if ($this->dutso) {
            $this->setting->update([
                'dutso' => $this->dutso->store('settings', 'public')
            ]);
        }
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
