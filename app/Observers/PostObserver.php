<?php

namespace App\Observers;

use App\Post;

class PostObserver
{
    public function creating(Post $post)
    {
        if (auth()->check()) {
            $post->user_id = auth()->user()->id;
        }
    }
}
