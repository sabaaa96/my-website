<?php

namespace App\Livewire;

use Livewire\Component;


class Contact extends Component
{
    public $firstname = '';
    public $lastname = '';
    public $email = '';
    public $country = 'Canada';
    public $street = '';
    public $city = '';
    public $state = '';
    public $zip = '';

    public function render()
    {
        return view('livewire.contact');
    }


    public function save()
    {

        $validated = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'country' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);

        \App\Models\Contact::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'country' => $this->country,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
        ]);

        session()->flash('message', 'Successfull!');
        $this->redirectRoute('welcome');
    }

}
