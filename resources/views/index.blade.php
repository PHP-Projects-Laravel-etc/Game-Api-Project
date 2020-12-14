@extends('layouts/app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games border-b border-gray-800 text-sm grid grid-cols-6 gap-12 pb-8">
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
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Recently Reviewed
                </h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative inline-block">
                            <a href="">
                                <img class="hover:opacity-75 transition ease-in-out duration-150"
                                     src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png"
                                     alt="diablo">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                                 style="bottom:-20px; right: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Mostly Anticipated
                </h2>
            </div>
        </div>
    </div>

@endsection
