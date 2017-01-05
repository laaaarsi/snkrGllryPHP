@extends('layouts.default')

@section('content')
<h1>Users</h1>


@foreach($users as $user)
    <div>
        <a href="/users/{{$user->id}}">{{$user->id}}</a>
        {{$user->username}}
        {{$user->location}}
    </div>

    @endforeach

@endsection