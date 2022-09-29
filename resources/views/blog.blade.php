@extends('layouts.app')
@section('title','Blog')


@section('body')
    @extends('header')
@endsection

<hr>
@forelse($posts as $post)
    <h2>{{$post['title']}}</h2>
@empty
@endforelse
