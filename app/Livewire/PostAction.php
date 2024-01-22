<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PostAction extends Component
{
    public $post;
    public $postUrl;

    #[Validate(['required'])]
    public $content;

    public function mount($post){
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post-action', [
            'likes' => $this->post->likes()->count(),
            'userHasLiked' => $this->userHasLiked(),
            'comments' => $this->post->comments()->latest()->get(),
        ]);
    }

    public function likeButton(){
        if (Auth::check()) {
            if (!$this->userHasLiked()) {
                $this->post->likes()->create([
                    'user_id' => Auth::id(),
                ]);

            } else {
                $this->post->likes()->where('user_id', Auth::id())->delete();
            }
        } else {
            $this->dispatch('show-auth');
        }
    }

    public function storeComment(){
        if (Auth::check()) {
            $this->validate();

            Comment::create([
                'post_id' => $this->post->id,
                'user_id' => Auth::id(),
                'content' => $this->content,
            ]);

            $this->reset('content');
        } else{
            $this->dispatch('show-auth');
        }
    }


    public function shareButton(){
        $this->postUrl = env('APP_URL') . '/post/' . $this->post->slug;
        $this->dispatch('post-link-copied', $this->postUrl);
        // session()->flash('success', 'Link copied.');

        // return Redirect::back(); 

    }


    protected function userHasLiked(){
        return $this->post->likes()->where('user_id', Auth::id())->exists();
    }
}
