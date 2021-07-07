<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Footer extends Component
{

    public $title =345;
    public $email;
    public $subject;
    public $body;

    protected $rules = [
        'body' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'title' => 'required',
    ];

    public function send()
    {
        $validatedData = $this->validate();
       
        //Mail::to($this->email)->send(new MailableClass);
    }
    
    public function render()
    {
        return view('livewire.footer',[
            'settings' => Setting::first(),
        ]);
    }
}
