@extends('layouts.app', ['language' => $language, 'seo' => $seo])

@section('content')
    <h1 class="text-3xl font-bold underline">{{$title}}</h1>
    <p class="text-lg">{{$content}}</p>
@endsection
