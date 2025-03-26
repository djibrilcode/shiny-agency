<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TodoList extends Component
{

    public $todos ;
    public $todo = [];

    public $updateMode = false;

    public function mount ()
    {
        $this->todos = Task::all();
    }

    private function resetInoutField()
    {
        $this->reset('todo');
    }

    public function store()
    {
        $validator = Validator::make($this->todo, [
            'title' => 'required|max:255',
            'status' => 'required|max:60'
        ])->validate();

        Task::create($this->todo);
        $this->reset('todo');
        $this->todos = Task::all();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $task = Task::find($id);

        $this->todo = [
            'id' => $task->id,
            'title' => $task->title,
            'status' => $task->status
        ];
    }

    public function update()
    {
        $validator = Validator::make($this->todo, [
            'title' => 'required|max:255',
            'status' => 'required|max:60'
        ])->validate();

        if ($this->todo['id']){
            $task = Task::find($this->todo['id']);
            $task->update([
                'title' => $this->todo['title'],
                'status' => $this->todo['status'],
            ]);


            $this->updateMode = false;
            $this->reset('todo');
            $this->todos = Task::all();
        }


    }

    public function delete($id)
    {
        if($id) {
            Task::where('id', $id)->delete();
            $this->todos = Task::all();
        }
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
