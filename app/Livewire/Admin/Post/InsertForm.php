<?php

namespace App\Livewire\Admin\Post;

use App\Livewire\Admin\Topic\Calling\Topic;
use App\Models\Post;
use App\Models\Topic as ModelsTopic;
use Livewire\Component;
use Livewire\WithFileUploads;


class InsertForm extends Component
{
    use WithFileUploads;

   
    public $title;
    public $content;
    public $user_id;
    public $topic_id;
    public $views;
    public $likes;
    public $status;
    public $featured_image;


    public function rules(){
        return[
            'title' =>'required|max:255',
            'content' =>'required',
            'topic_id' =>'required|numeric',
            'featured_image' =>'image|max:2048',
            
        ];
        
    }
    public function store(){
        $this->validate();
        $post =  new Post();
        $post->title= $this->title;
        $post->content= $this->content;
        $post->topic_id= $this->topic_id;
         if($this->featured_image){
            $imageName = time().'.'.$this->featured_image->getClientOriginalExtension();
            $this->featured_image->storeAs("public/images",$imageName);
            $post->featured_image = $imageName;
         }
         $post->save();

         $this->reset("title","content","featured_image", "topic_id");
         return redirect()->route('admin.post');
    }

    public function render()
    {
        $data['topics'] = ModelsTopic::all();
        return view('livewire.admin.post.insert-form',$data);
    }
}
