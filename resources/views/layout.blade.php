<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Streamify 🎧</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">
    <nav class="bg-gray-800 p-4 flex justify-between">
        <h1 class="text-xl font-bold">🎵 Streamify</h1>
        <ul class="flex gap-6">
            <li><a href="{{ route('home') }}" class="hover:text-green-400">Home</a></li>
            <li><a href="{{ route('explorar') }}" class="hover:text-green-400">Explorar</a></li>
            <li><a href="{{ route('perfil') }}" class="hover:text-green-400">Perfil</a></li>
        </ul>
    </nav>

    <div class="p-8">
        @yield('content')
    </div>
</body>
</html>
