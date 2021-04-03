<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|min:34',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

        Contact::create($validatedData);
    }
}
