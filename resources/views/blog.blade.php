@extends('layouts.app')
@section('title','Blog')


@section('body')
    @include('header')
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500 mx-auto">Blog</h1>



    </header>
    <hr class="my-5">

    <a href="{{route('post.create')}}" class="ml-4">
        <button type="button" class="text-white bg-sky-800 hover:bg-sky-900 focus:outline-none focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-sky-800 dark:hover:bg-sky-700 dark:focus:ring-sky-700 dark:border-sky-700">
            Crear Post
        </button>
    </a>
    <section class="px-5">


        @forelse($posts as $post)

            <div class="mt-7 border-b-blue-600 max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
                <a href="{{route('post.show',['post'=>$post->id])}}" class="inline-block text-2xl font-semibold">{{$post->title}}</a>
                <p>{{$post->body??''}}</p>
                <div class="flex justify-between">
                    <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{ route('post.edit', $post->id) }}">Edit</a>


                </div>
            </div>


        @empty
        @endforelse


    </section>
@endsection


