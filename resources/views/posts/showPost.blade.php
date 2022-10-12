@extends('layouts.app')
@section('title','Blog')


@section('body')
    @extends('header')

    <hr>

    <h2>{{$post->title ?? 'no hay un titulo definido para este post'}}</h2>
@endsection


