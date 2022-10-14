@extends('layouts.app')
@section('title','Blog')


@section('body')
    @extends('header')
    <hr class="my-5">
    <a href="{{route('createPost')}}">
        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            Crear Post
        </button>
    </a>

    <section>
        <table class="table-auto"">
            <thead>
                <tr>
                    <th>titulo</th>
                    <th>cuerpo</th>
                    <th>editar</th>
                </tr>

            </thead>


        @forelse($posts as $post)
            <tr>
                <td>
                    <p class=" inline-block text-2xl"><a href="{{route('showPost',['post'=>$post->id])}}">{{$post->title}}</a></p>
                </td>
                <td>
                    <span>{{$post->body??''}}</span>
                </td>
                <td>
                    <a href="{{route('post.edit',['post'=>$post->id])}}" class="text-purple-900 font-bold">Editar</a>
                </td>
            </tr>




        @empty
        @endforelse
        </table>
    </section>
@endsection


