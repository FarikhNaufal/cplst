<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostView extends Component
{

    public $perPage = 3;
    public $posts = [];

    public function loadMore()
    {
        $this->perPage += 3;
        $this->loadData();
    }

    public function loadData()
    {
        $loadedPostIds = collect($this->posts)->pluck('id')->toArray();

        $fetchedPosts = Post::latest()
            ->whereNotIn('id', $loadedPostIds)
            ->paginate($this->perPage)
            ->items();

        $this->posts = array_merge($this->posts, $fetchedPosts);
    }

    public function render()
    {
        $this->loadData();
        return view('livewire.post-view', ['posts' => $this->posts]);
    }


}
