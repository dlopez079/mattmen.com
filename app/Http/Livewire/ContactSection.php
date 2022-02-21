<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactSection extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $country;
    public $message;

    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'country' => 'required',
        'message' => 'required',
    ];

    public function submit()
    {
        $this->validate();

            // Create a contact record on database via migration.
        // Contact::create([
        //     'firstName' => 'required',
        //     'lastName' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'country' => 'required',
        //     'message' => 'required',
        // ]);
    }
    
    public function render()
    {
        return view('livewire.contact-section');
    }
}
