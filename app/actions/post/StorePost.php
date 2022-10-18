<?php

namespace App\actions\post;

use App\Models\Post;
use Illuminate\Support\Arr;

class StorePost
{
    public function execute(array $data)
    {
        Post::create($data);
    }
}
