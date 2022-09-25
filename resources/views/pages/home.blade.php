@extends('layouts.app')

@section('content')

<img src="{{ asset('images/ong2.png') }}" alt="ong togo" class="mt-12 rounded shadow-md" style="width:160px;">

<h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">hello from quebec!</h1>

<p class="text-lg text-gray-800">Its currently {{date('h:i A')}}.



</p>

@endsection