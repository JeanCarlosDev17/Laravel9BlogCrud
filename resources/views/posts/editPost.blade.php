@extends('layouts.app')

@section('title','Crear post')


@section('body')
    <x-layouts.header></x-layouts.header>
    <x-sessionStatusSave></x-sessionStatusSave>
    <x-errors></x-errors>
    <div class="status">
        {{session('status')}}

    </div>
        <div class="container mx-auto px-6 max-w-md">
        <h1 class="text-3xl mt-10 px-4  ">Editar  post</h1>
        <form action="{{route('post.update',['post'=>$post])}}" method="POST" class="mx-auto px-4">
            @csrf
            @method('PATCH')
            <x-layouts.formFieldsPost :post="$post">
                <x-slot name="textButton">
                    Actualizar
                </x-slot>

            </x-layouts.formFieldsPost>

        </form>
    </div>

@endsection
