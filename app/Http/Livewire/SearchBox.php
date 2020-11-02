<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchBox extends Component
{
    public $subject;
    public $attributes = 'search form-input text .text-center rounded-sm shadow-sm py-0';
    public $placeholder = 'Pesquisar';

    public function render()
    {
        return view('livewire.search-box');
    }

    public function search()
    {
        return;
    }
}
