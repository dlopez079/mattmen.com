<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

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
        'phone' => 'required|min:10',
        'country' => 'required',
        'message' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        // Create a contact record on database via migration.
        Contact::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'message' => $this->message
        ]);
    }

    public function render()
    {
        return view('livewire.contact-section');
    }
}
