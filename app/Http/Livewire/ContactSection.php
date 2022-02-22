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
        'firstName' => 'required|max:10',
        'lastName' => 'required|max:10',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'country' => 'required',
        'transmission' => 'required|min:10|max:100',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function submit()
    {
        $validatedData = $this->validate();
 
        Contact::create($validatedData);
    }

    public function render()
    {
        return view('livewire.contact-section');
    }
}
