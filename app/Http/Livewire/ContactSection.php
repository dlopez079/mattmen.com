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
    public $transmission;

    protected $rules = [
        'firstName' => 'required:10',
        'lastName' => 'required:max:10',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'country' => 'required',
        'transmission' => 'required|min:10|max:100',
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
            'transmission' => $this->transmission
        ]);
    }

    public function render()
    {
        return view('livewire.contact-section');
    }
}
