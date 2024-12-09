<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- card pour afficher tous les posts --}}
    @if(isset($posts) && $posts->count() > 0)
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold text-gray-800 mb-2">
                    {{ $post->title }}
                </h2>
                <p class="text-sm text-gray-600 mb-4">
                    {{ $post->content }}
                </p>
             
            </div>
        @endforeach
    </div>
@else
    <p class="text-center text-gray-600 mt-8">Aucun post disponible pour le moment.</p>
@endif

    <!-- pagination -->
    <div class="flex justify-center mt-8">
        {{ $posts->links() }}
    </div>

    
</body>
</html>