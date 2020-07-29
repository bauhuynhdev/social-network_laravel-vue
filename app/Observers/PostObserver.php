<?php

namespace App\Observers;

use App\Post;

class PostObserver
{
    public function creating(Post $post)
    {
        $post->user_id = auth()->user()->id;
    }
}
