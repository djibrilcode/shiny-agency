<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('todo')]
class Todo extends Component
{
    public $todo = '';

    public $todos = [
        'wash dishes',
    ];

    public function add() {
        $this->todos[] = $this->todo;

        $this->todo = '';
    }

    public function updatedTodo($value) {

        $this->todo = strtoupper($value);

        // $this->validate();
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
