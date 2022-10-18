@extends('layouts.app')

@section('title','Crear post')


@section('body')
    <x-layouts.header></x-layouts.header>
    <x-sessionStatusSave></x-sessionStatusSave>
    <x-errors></x-errors>

    <div class="container mx-auto px-6 max-w-md">
        <h1 class="text-3xl mt-10">Crear post</h1>

        <form action="{{route('post.store')}}" method="post" class="">
            @csrf
            <x-layouts.formFieldsPost>
                <x-slot name="textButton">
                    Crear
                </x-slot>
            </x-layouts.formFieldsPost>

        </form>
    </div>

@endsection
