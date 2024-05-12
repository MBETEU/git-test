<?php

namespace App\Livewire;

use Livewire\Component;

class Donate extends Component
{
    public $donate;
    public function addLike()
    {
        if(auth()->check())
        {
            auth()->user()->likes()->toggle($this->donate->id);
        } else  {
            $this->emit('flash', 'Merci de vos connecter pour ajouter un donneur à votre liste','error');
        }
    }
    public function render()
    {
        return view('livewire.donate');
    }
}
