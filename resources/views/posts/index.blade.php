<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 via-white-100 to-white-100 min-h-screen p-6">
    <div class="max-w-4xl mx-auto">
        <header class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-purple-700 mb-2">Challenge Mini-Hackaton</h1>
            <p class="text-lg text-purple-500">Bienvenidos</p>
        </header>

        @if($posts->isEmpty())
            <div class="bg-white border-l-4 border-red-400 text-red-700 p-6 rounded shadow text-center">
                <p class="text-lg font-medium">No hay posts aún.</p>
            </div>
        @else
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($posts as $post)
                    <li class="bg-white border-l-4 border-indigo-400 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="text-2xl font-bold text-indigo-600 mb-2">{{ $post->title }}</h3>
                        <p class="text-gray-700">{{ $post->content }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
