<?php

namespace App\Http\Livewire;

use App\Helpers\Tools;
use Livewire\Component;

class TextTools extends Component
{
    public $str = '';

    public function getLower(){
        $this->str = Tools::text()->lowerCase($this->str);
    }

    public function getUpper(){
        $this->str = Tools::text()->upperCase($this->str);
    }

    public function titleCase(){
        $this->str = Tools::text()->titleCase($this->str);
    }

    public function capitalize(){
        $this->str = Tools::text()->capitalize($this->str);
    }

    public function swapCase() {
        $this->str = Tools::text()->swapCase($this->str);
    }

    public function reverseText() {
        $this->str = Tools::text()->reverseText($this->str);
    }

    public function removeAccents() {
        $this->str = Tools::text()->removeAccents($this->str);
    }

    public function render() {
        return view('livewire.text-tools');
    }
}
