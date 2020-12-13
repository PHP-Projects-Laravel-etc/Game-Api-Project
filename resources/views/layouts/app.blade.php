<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ugur Video Game</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-3">
            <div class="flex items-center">
                <a href="">
                    <img src="https://icons.veryicon.com/png/Game/Game/Diablo%20II.png"
                         alt="game-image" class="w-24  flex-none">
                </a>
                <ul class="flex ml-16 space-x-8">
                    <li><a href="" class="hover:text-gray-400">Games</a></li>
                    <li><a href="" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="text-sm rounded-full bg-gray-800 px-3 w-64 py-1 focus:outline-none
                    focus:shadow-outline-black pl-8" placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="text-gray-400 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href=""><img src="https://lh3.googleusercontent.com/ogw/ADGmqu_HqHHv95kQQ-RBR2tJBCbvn1c70RMriQjheOKLtA=s32-c-mo" class="rounded-full w-8" alt=""></a></div>
            </div>

        </nav>

    </header>
<main class="py-8">
    @yield('content')
</main>

<footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
        Powered By <a href="" class="underline hover:text-gray-400">IGDB API</a>
    </div>

</footer>
</body>
</html>
