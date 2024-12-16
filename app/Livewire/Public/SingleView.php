<?php

namespace App\Livewire\Public;

use App\Models\Post;
use Livewire\Component;

class SingleView extends Component
{
    public $post_id;
    public function render()
    {
        $data['post'] = Post::find($this->post_id);
        $data['related_post'] = Post::where('topic_id', $data['post']->topic_id)->where("id",$this->post_id)->take(5)->get();
        return view('livewire.public.single-view', $data);
    }
}
