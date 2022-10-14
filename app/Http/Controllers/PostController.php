<?php

namespace App\Http\Controllers;

use App\actions\post\StorePost;
use App\actions\post\UpdatePost;
use App\Http\Requests\storePostRequest;
use App\Http\Requests\updatePostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

class PostController extends Controller
{
    private $storePost;
    private $updatePost;

    public function __construct(StorePost $storePost,UpdatePost $updatePost)
    {
        $this->storePost=$storePost;
        $this->updatePost=$updatePost;
    }

    public function index():View
    {
        $posts= DB::select('select id,title,body  from posts');

        return view('blog',['posts'=>$posts]);
    }


    public function create()
    {

        return view('posts.createPost');
    }


    public function store(storePostRequest $request)
    {

        $this->storePost->execute($request->validate());
//        $this->storePost->execute($request->all()); otra manera de obtener el array de datos
//        return redirect()->route('blog');
        session()->flash('status',"post creado");
        return to_route('createPost')->with('message',('ya coronamos'));
        //2 MANERAS DE ENVIAR UN MENSAJE DE SESSION

    }


    public function show(Post $post):View
    {

        return view('posts.showPost',['post'=>$post]);
    }


    public function edit( $post)
    {
//        dd(Post::find($post)->title);
        return view('posts.editPost',['post'=>Post::find($post)]);
    }



    public function update(updatePostRequest $request, Post $post)
    {
        $post = $this->updatePost->execute($post,$request->all());
        return to_route('post.edit',["post"=>$post])->with("status","Actualizado correctamete");
//        view('posts.editPost',["post"=>$post])->with("status","Actualizado correctamete");
    }


    public function destroy($id)
    {
        //
    }
}
