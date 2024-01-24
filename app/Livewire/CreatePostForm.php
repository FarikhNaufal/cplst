<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePostForm extends Component
{
    use WithFileUploads;
    #[Validate(['required','min:3'])]
    public $caption = '';

    #[Validate(['nullable', 'image','max:10240'])]
    public $media;
    public $user;


    public function __construct()
    {
        $this->user = Auth::id();
    }


    public function createPost(){
        $this->validate();

        $imageName = null;

        if ($this->media) {
            $imageName = time() . '-' . $this->media->getClientOriginalName();
            $path = "public/users/$this->user/posts/";
            $this->media->storeAs($path, $imageName, 'azure');
        }

        Post::create([
            'user_id' => $this->user,
            'caption' => $this->caption,
            'media' => $imageName,
            'slug' => $this->user. time(),
        ]);

        $this->reset();
        return redirect()->intended()->with('success', 'You make an awesome greate post.');
    }

    public function removeMedia()
    {
        $this->reset(['media']);
    }

    public function render()
    {
        return view('livewire.create-post-form');
    }
}
