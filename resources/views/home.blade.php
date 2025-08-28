@extends('layout')

@section('content')
<div class="text-center">
    <h2 class="text-3xl font-bold mb-4">Bienvenido a Streamify 🎶</h2>
    <p class="text-gray-300 mb-6">Descubre millones de canciones y playlists personalizadas.</p>
    <a href="{{ route('explorar') }}" 
       class="bg-green-500 hover:bg-green-600 px-6 py-2 rounded-full text-white font-semibold">
       Explorar ahora
    </a>
</div>
@endsection
