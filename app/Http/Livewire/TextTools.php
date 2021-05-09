<?php

namespace App\Http\Livewire;

use App\Helpers\Tools;
use Livewire\Component;

class TextTools extends Component
{
    public $string = '';

    public $stringCharCount = 0;

    public $stringWordCount = 0;

    public $stringLineCount = 0;

    public $stringParaCount = 0;

    public function updatedString()
    {
        $this->stringCharCount = strlen($this->string);
        $this->stringWordCount = str_word_count($this->string);
        // $this->stringLineCount = substr_count($this->string, "\n");
        $this->stringLineCount = count(explode("\n", $this->string));
        $this->stringParaCount = substr_count($this->string, "\n\n");
    }

    public function getLower()
    {
        $this->string = Tools::text()->lowerCase($this->string);
    }

    public function getUpper()
    {
        $this->string = Tools::text()->upperCase($this->string);
    }

    public function titleCase()
    {
        $this->string = Tools::text()->titleCase($this->string);
    }

    public function capitalize()
    {
        $this->string = Tools::text()->capitalize($this->string);
    }

    public function swapCase()
    {
        $this->string = Tools::text()->swapCase($this->string);
    }

    public function reverseText()
    {
        $this->string = Tools::text()->reverseText($this->string);
    }

    public function removeAccents()
    {
        $this->string = Tools::text()->removeAccents($this->string);
    }

    public function tabsToSpaces()
    {
        $this->string = Tools::text()->tabsToSpaces($this->string);
    }

    public function spacesToTabs()
    {
        $this->string = Tools::text()->spacesToTabs($this->string);
    }

    public function spacesToNewlines()
    {
        $this->string = Tools::text()->spacesToNewlines($this->string);
    }

    public function newlinesToSpaces()
    {
        $this->string = Tools::text()->newlinesToSpaces($this->string);
    }

    public function removeExtraWhiteSpace()
    {
        $this->string = Tools::text()->removeExtraWhiteSpace($this->string);
    }

    public function removeAllWhiteSpace()
    {
        $this->string = Tools::text()->removeAllWhiteSpace($this->string);
    }

    public function extractEmails()
    {
        $this->string = Tools::text()->extractEmails($this->string);
    }

    public function extractURLs()
    {
        $this->string = Tools::text()->extractURLs($this->string);
    }

    public function extractNumbers()
    {
        $this->string = Tools::text()->extractNumbers($this->string);
    }

    public function render()
    {
        return view('livewire.text-tools');
    }
}
