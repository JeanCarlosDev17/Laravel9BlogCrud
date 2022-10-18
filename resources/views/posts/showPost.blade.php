@extends('layouts.app')
@section('title','Blog')


@section('body')
    @extends('header')

    <hr>


    <div class="mt-7 border-b-blue-600 max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800 mx-auto">
        <a href="{{route('post.show',['post'=>$post->id])}}" class="inline-block text-2xl font-semibold">{{$post->title}}</a>
        <p>{{$post->body??''}}</p>
        <div class="flex justify-between">
            <a class="inline-flex items-center text-xs font-semibold underline tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{ route('blog') }}">Regresar</a>

            <a class="inline-flex items-center justify-end text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{ route('post.edit', $post->id) }}">Edit</a>







        </div>
    </div>
@endsection


