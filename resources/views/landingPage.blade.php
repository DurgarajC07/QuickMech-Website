@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
       
        @auth
        @if(auth()->user()->name)
        @include('authUser')
        @endif
        @foreach($members as $user)
        @if($user->name == auth()->user()->name)
        @include('userHome')
        @else
        @include('authUser')
        @endif
        @endforeach  
        @endauth

        @guest
        @include('guestUser')
        @endguest
    </div>
@endsection