@extends('layouts.app')

@section('title','Crear post')


@section('body')
    <x-layouts.header></x-layouts.header>
    <x-sessionStatusSave></x-sessionStatusSave>
    <x-errors></x-errors>

    <h1 class="text-3xl mt-10">Crear post</h1>

    <form action="{{route('storePost')}}" method="post" class="mx-40">
        @csrf
        <x-layouts.dataFormPost>
            <x-slot name="textButton">
                Crear
            </x-slot>
        </x-layouts.dataFormPost>

    </form>

@endsection
