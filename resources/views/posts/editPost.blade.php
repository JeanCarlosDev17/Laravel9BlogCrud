@extends('layouts.app')

@section('title','Crear post')


@section('body')
    <x-layouts.header></x-layouts.header>
    <x-sessionStatusSave></x-sessionStatusSave>
    <x-errors></x-errors>
    <div class="status">
        {{session('status')}}

    </div>
    <h1 class="text-3xl mt-10">Editar  post</h1>
    <form action="{{route('post.update',['post'=>$post])}}" method="POST" class="mx-40">
        @csrf
        @method('PATCH')
        <x-layouts.dataFormPost :post="$post">
            <x-slot name="textButton">
                Crear
            </x-slot>

        </x-layouts.dataFormPost>

    </form>

@endsection
