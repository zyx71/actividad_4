@extends('layout')

@section('content')
<h2 class="text-2xl font-bold mb-6">Explorar Playlists</h2>

<div class="grid grid-cols-3 gap-6">
    <div class="bg-gray-800 p-4 rounded-lg shadow hover:scale-105 transform transition">
        <img src="https://picsum.photos/200?1" class="rounded mb-3">
        <h3 class="font-semibold">Top Hits</h3>
        <p class="text-gray-400 text-sm">Lo más escuchado 🔥</p>
    </div>
    <div class="bg-gray-800 p-4 rounded-lg shadow hover:scale-105 transform transition">
        <img src="https://picsum.photos/200?2" class="rounded mb-3">
        <h3 class="font-semibold">Lo-Fi Beats</h3>
        <p class="text-gray-400 text-sm">Para estudiar o relajarte ☕</p>
    </div>
    <div class="bg-gray-800 p-4 rounded-lg shadow hover:scale-105 transform transition">
        <img src="https://picsum.photos/200?3" class="rounded mb-3">
        <h3 class="font-semibold">Reggaetón 2025</h3>
        <p class="text-gray-400 text-sm">Puro perreo intenso 💃</p>
    </div>
</div>
@endsection
