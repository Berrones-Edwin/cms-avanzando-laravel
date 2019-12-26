@extends('layouts.app')

@section('title','Inicio')
@section('content')
    <ul class="list-group ">
        @foreach($users as $user)
            <li class="list-group-item">
                {{ $user->name }}
                <em>Ultima actualización:: ===</em>
            </li>
        @endforeach
    </ul>
@endsection
