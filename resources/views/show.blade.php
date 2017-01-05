@extends('layouts.default')

@section('content')

    <div>{{$user->username}}</div>

    <ul>
        @foreach($user->comments as $comment)
            <li>{{$comment->comment}}</li>

        @endforeach
    </ul>

@endsection