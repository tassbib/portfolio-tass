<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message' => 'required|min:10',
    ];
    
    protected $messages = [
        'name.required' => 'Le nom est obligatoire',
        'email.required' => 'L\'email est obligatoire',
        'email.email' => 'L\'email doit être valide',
        'subject.required' => 'Le sujet est obligatoire',
        'message.required' => 'Le message est obligatoire',
        'message.min' => 'Le message doit contenir au moins 10 caractères',
    ];
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function submitForm()
    {
        $this->validate();
        
        // Ici vous pouvez envoyer l'email
        // Mail::to('zoumaro95@gmail.com')->send(new ContactMail($this->all()));
        
        session()->flash('message', 'Message envoyé avec succès ! Je vous répondrai bientôt. 🚀');
        
        $this->reset(['name', 'email', 'subject', 'message']);
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
