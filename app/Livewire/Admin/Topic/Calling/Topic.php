<?php

namespace App\Livewire\Admin\Topic\Calling;

use App\Models\Topic as ModelsTopic;
use Livewire\Attributes\On;
use Livewire\Component;

class Topic extends Component
{

    public $search = "";

public function deleteTopic($id){
    $topic = ModelsTopic::findOrFail($id);
    $topic->delete();

    session()->flash('message', 'topic deleted successfully');
}
     
#[On('clear')]
    public function render()
    {
        $data['topics'] =ModelsTopic::where('topic_name','LIKE',"%".$this->search."%")->get();
        return view('livewire.admin.topic.calling.topic', $data);
    }
}