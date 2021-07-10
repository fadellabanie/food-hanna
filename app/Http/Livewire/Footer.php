<?php

namespace App\Http\Livewire;

use App\Mail\ContactUs;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Footer extends Component
{

    public $title;
    public $email;
    public $subject;
    public $body;

    protected $rules = [
        'title' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'body' => 'required',
    ];

    public function send()
    {
        $validatedData = $this->validate();

        $setting = Setting::first();
        Mail::to($setting->email)->send(new ContactUs($validatedData));
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.footer', [
            'settings' => Setting::first(),
        ]);
    }
}
