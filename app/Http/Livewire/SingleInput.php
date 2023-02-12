<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingleInput extends Component
{
    public string $propValue;
    public string $validationClass;
    public string $elementaryValidationMessage;

    public function mount()
    {
        $this->propValue = 'xren';

    }
    public function updated()
    {
        $this->isValid();
    }
    public function isValid()
    {
        $pattern = "/^[0-9]+$/";
        if(preg_match($pattern, $this->propValue)){
            $this->validationClass = 'not_error';
            $this->elementaryValidationMessage = '';

        } else {
            $this->elementaryValidationMessage = 'invalid value';
            $this->validationClass = 'error';
        }

    }

    public function render()
    {
        return view('livewire.single-input');
    }
}
