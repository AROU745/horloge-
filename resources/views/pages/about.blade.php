@extends('layouts.app', ['title' => 'About Us' ])




@section('content')
<img src="{{ asset('images/index.png') }}" alt="ong togo" class="my-12 rounded-full shadow-md">

<h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span> by LETEACHERSS DU NET.
</h2>


<p>
    <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">
        Revenir a la page d'accueuil
    </a>
</p>


@endsection