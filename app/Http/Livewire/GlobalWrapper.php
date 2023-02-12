<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GlobalWrapper extends Component
{
    public array $componentNames = ['single-input', 'single-input'];
    public function render()
    {
        return view('livewire.global-wrapper');
    }
}
