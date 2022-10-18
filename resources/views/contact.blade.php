
@php
    $valor="valor de una variable php2";
@endphp

{{--<x-layout :variable="$valor" meta-description="algo que lo describe" >--}}
{{--    <x-slot:title>--}}
{{--        Contact--}}
{{--    </x-slot:title>--}}
{{--    <x-slot name="body">--}}
{{--        <h1>Contact</h1>--}}
{{--    </x-slot>--}}
{{--    <x-slot name="variable" >--}}

{{--        {{$valor}}--}}

{{--    </x-slot>--}}
{{--    todo el contenido fuera de los x-slot va ser parte del slot principal--}}
{{--</x-layout>--}}

@extends('layouts.app')

@section('body')
    @include('header')
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Contact</h1>
@endsection
