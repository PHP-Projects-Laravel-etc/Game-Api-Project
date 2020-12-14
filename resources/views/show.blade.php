@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
            </div>
            <div class="lg:ml-12 lg:mr-64 ">
                <h2 class="font-semibold text-4xl leading-tight mt-1">Diablo</h2>
                <div class="text-gray-400">
                    <span>Adventure RPG</span>
                    &middot;
                    <span>Blizzard</span>
                    &middot;
                    <span>PC</span>
                </div>
                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 rounded-full bg-gray-800">
                            <div class="flex font-semibold text-sm h-full justify-center items-center">90%</div>
                        </div>
                        <div class="ml-4 text-xs">Member<br>Score</div>
                    </div>
                    <div class="flex items-center ml-6 ">
                        <div class="w-16 h-16 rounded-full bg-gray-800">
                            <div class="flex font-semibold text-sm h-full justify-center items-center">92%</div>
                        </div>
                        <div class="ml-4 text-xs">Critic<br>Score</div>
                    </div>
                    <div class="flex items-center space-x-4 lg:ml-12 mt-4 lg:mt-0">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="mt-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ea est, et facere fuga incidunt
                    iusto labore magni nihil obcaecati quod sequi sunt. Ab ad at culpa debitis esse, excepturi fugiat
                    iure labore, natus pariatur quas sequi tenetur vitae voluptates voluptatum. Beatae, eum fugiat fugit
                    incidunt praesentium quasi recusandae voluptates?
                </p>
                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600
rounded transition ease-in-out duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-4">Watch Trailer</span></button>
                </div>
            </div>
        </div><!--end game details -->
        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="font-semibold tracking-wide text-blue-500 uppercase">Images</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="">
                    </a>
                </div>
            </div>

        </div><!--end images container -->
        <div class="similar-games-container mt-8">
            <h2 class="font-semibold tracking-wide text-blue-500 uppercase">Similar Games</h2>
            <div class="popular-games  text-sm grid grid-cols-1
         md:grid-cols-2 lg:grid-cols-6  xl:grid-cols-6 gap-12 pb-8">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img class="hover:opacity-75 transition ease-in-out duration-150"
                                 src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="bottom:-20px; right: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8
                transition ease-in-out duration-500">Diablo 3</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>


                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img class="hover:opacity-75 transition ease-in-out duration-150"
                                 src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="bottom:-20px; right: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8
                transition ease-in-out duration-500">Diablo 3</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img class="hover:opacity-75 transition ease-in-out duration-150"
                                 src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="bottom:-20px; right: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8
                transition ease-in-out duration-500">Diablo 3</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img class="hover:opacity-75 transition ease-in-out duration-150"
                                 src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="bottom:-20px; right: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8
                transition ease-in-out duration-500">Diablo 3</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img class="hover:opacity-75 transition ease-in-out duration-150"
                                 src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="bottom:-20px; right: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8
                transition ease-in-out duration-500">Diablo 3</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img class="hover:opacity-75 transition ease-in-out duration-150"
                                 src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="bottom:-20px; right: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8
                transition ease-in-out duration-500">Diablo 3</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
            </div>
        </div>
    </div>
@endsection
