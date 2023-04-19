<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10;

    public function off(){
        $this-> brightness = 0;
    }

    public function on(){
        $this-> brightness = 100;
    }

    public function  increment(){
        // $this-> brightness += 10;
        $this-> brightness = min(100, $this-> brightness + 10);
    }

    public function  decrement(){
        // $this-> brightness -= 10;
        $this-> brightness = min(0, $this-> brightness + 10);
    }

    public function render()
    {
        return view('livewire.light');
    }
}
