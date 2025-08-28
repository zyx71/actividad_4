@extends('layout')

@section('content')
<div class="flex flex-col items-center">
    <h2 class="text-2xl font-bold">Mi Perfil</h2>
    <p class="text-gray-400">Usuario Premium ⭐</p>

    <div class="mt-6 w-full max-w-md">
        <h3 class="font-semibold mb-3">Mis Playlists</h3>
        <ul class="space-y-2">
            <li class="bg-gray-800 p-3 rounded">Workout Energy ⚡</li>
            <li class="bg-gray-800 p-3 rounded">Chill Nights 🌙</li>
            <li class="bg-gray-800 p-3 rounded">Favoritas ❤️</li>
        </ul>
    </div>
</div>
@endsection
