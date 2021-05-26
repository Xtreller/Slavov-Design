@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    @foreach ($posts as $name => $post)
        <p>{{ strtoupper($name) }} ===== <div>{{ $post }}</div></p>


    @endforeach
@endsection
