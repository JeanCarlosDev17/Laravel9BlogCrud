<?php

namespace App\actions\post;

use App\Models\Post;

class UpdatePost
{
    public function execute(Post $post,$data){
        $post->update($data);
        return $post;

    }
}
