<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Oswaldo';
    public $loud = false;
    public $greeting = ["Ola"];
    public function render()
    {
        return view('livewire.hello-world');
    }
}
