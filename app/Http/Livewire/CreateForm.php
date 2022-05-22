<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class CreateForm extends Component
{
    public Contact $contact;
    public $isOpen=false;

    protected $rules = [
        'contact.fullname' => ['required'],
        'contact.gender' => ['required'],
        'contact.email' => ['required'],
        'contact.postcode' => ['required'],
        'contact.address' => ['required'],
        'contact.building_name' => ['required'],
        'contact.opinion' => ['required'],
    ];

    public function mount()
    {
        $this->contact = new contact();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();
        $this->contact->save();
        $this->contact = new contact;

    }
    
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function create()
    {
        
        $this->contact->save();

        $this->emit('created-contact');

        $this->contact = new Contact;

        //$this->closeModal();
        //$this->resetInputFields();
    }


    public function render()
    {
        return view('livewire.create-form');
    }
}
