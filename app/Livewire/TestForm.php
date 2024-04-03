<?php

namespace App\Livewire;

use Livewire\Component;

class TestForm extends Component
{
    public $name;
    public $sent = false;

    public function create()
    {
        dump($this->name);

        $this->sent = true;

        $validate = $this->validate([
            'name' => 'required',
        ], attributes: [
            'name' => 'Вали!',
        ]);

        dump($this->name);
    }

    public function render()
    {
        return view('livewire.test-form');
    }
}
