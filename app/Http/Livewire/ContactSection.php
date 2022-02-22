<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactSection extends Component
{

    /**
     * Here is a list of variables that will store the values entered by the user. 
     * 
     */
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $country;
    public $transmission;

    /**
     * Here is a list of rules that the values must abid by. 
     * 
     */
    protected $rules = [
        'firstName' => 'required|max:10',
        'lastName' => 'required|max:10',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'country' => 'required',
        'transmission' => 'required|min:10|max:100',
    ];

    /**
     * If the user does not listen to the rules, spit out these custom messages.
     * 
     */
    protected $messages = [
        'firstName.required' => "If you don't know, then use your Nick Name",
        'lastName.require' => 'Refer to your birth certificate!',
        'email.required' => 'You cannot leave this blank!',
        'email.email' => 'I would like at this email again!'
    ];

    /**
     * Pass all property names through the update method and valid in real time.
     * 
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }
    
    /**
     * Run the submit method on on form click
     */
    public function submit()
    {
        $this->validate();
 
        Contact::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'transmission' => $this->transmission
        ]);  

        session()->flash('message', 'You message is sent.');
    }

    /** 
     * Render the component
     * 
     */
    public function render()
    {
        return view('livewire.contact-section');
    }
}
