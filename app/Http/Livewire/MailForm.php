<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MailForm extends Component
{

    
    public $title= 'sfdds';
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
        dd('sdf');
        $validatedData = $this->validate();
       
        //Mail::to($this->email)->send(new MailableClass);
    }
    
    public function render()
    {
        return view('livewire.mail-form');
    }
}
