<?php

namespace App\Http\Livewire;

use App\Helpers\Tools;
use Livewire\Component;

class TextTools extends Component
{
    public $string = '';

    public $charCount = 0;

    public $wordCount = 0;

    public $lineCount = 0;

    public $paraCount = 0;

    public function updatedString()
    {
        $this->string = mb_convert_encoding($this->string, 'UTF-8', 'UTF-8');
        $this->charCount = strlen($this->string);
        $this->wordCount = str_word_count($this->string);
        // $this->lineCount = substr_count($this->string, "\n");
        $this->lineCount = empty($this->string) ? 0 : count(explode("\n", $this->string));
        // $this->paraCount = substr_count($this->string, "\n\n");
        $this->paraCount = empty($this->string) ? 0 : count(explode("\n\n", $this->string));
    }

    public function resetClear()
    {
        $this->string = '';
        $this->charCount = 0;
        $this->wordCount = 0;
        $this->lineCount = 0;
        $this->paraCount = 0;
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

    public function morseToText()
    {
        $this->string = Tools::text()->morseToText($this->string);
    }

    public function textToMorse()
    {
        $this->string = Tools::text()->textToMorse($this->string);
    }

    public function countCharFreq()
    {
        $this->string = Tools::text()->countCharFreq($this->string);
    }

    public function countWordFreq()
    {
        $this->string = Tools::text()->countWordFreq($this->string);
    }

    public function render()
    {
        return view('livewire.text-tools');
    }
}
