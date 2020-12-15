@extends('layouts/app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games border-b border-gray-800 text-sm grid grid-cols-1
         md:grid-cols-2 lg:grid-cols-6  xl:grid-cols-6 gap-12 pb-8">
            @foreach($popularGames as $game)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="">
                            <img class="hover:opacity-75 transition ease-in-out duration-150 max-h-60"
                                 src="{{array_key_exists('cover',$game) ? \Illuminate\Support\Str::replaceFirst('thumb','cover_big',$game['cover']['url'])  : ''}}"
                                 alt="diablo">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="bottom:-20px; right: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">{{round($game['rating'])}}%</div>
                        </div>
                    </div>
                    <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8
                transition ease-in-out duration-500">{{$game['name']}}</a>
                    <div class="text-gray-400 mt-1">
                        @foreach($game['platforms'] as $platform)
                            {{ array_key_exists('abbreviation',$platform) ? $platform['abbreviation'] : '' }},
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w:full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Recently Reviewed
                </h2>
                @foreach($recentlyViewedGames as $game)
                    <div class="recently-reviewed-container space-y-12 mt-8">
                        <div class="bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="">
                                    <img class="w-32 hover:opacity-75 transition ease-in-out duration-150"
                                         src="{{array_key_exists('cover',$game) ? \Illuminate\Support\Str::replaceFirst('thumb','cover_big',$game['cover']['url']) : ''}}"
                                         alt="diablo">
                                </a>
                                <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-900 rounded-full"
                                     style="bottom:-20px; right: -20px;">
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">{{round($game['rating'])}}%</div>
                                </div>
                            </div>
                            <div class="ml-12">
                                <a href="" class="block text-lg font-semibold leading-tight hover:text-gray-400
                transition ease-in-out duration-500">{{$game['name']}}</a>
                                <div class="text-gray-400 mt-1">
                                    @foreach($game['platforms'] as $platform)
                                    {{array_key_exists('abbreviation', $platform) ? $platform['abbreviation'] : ''}},
                                    @endforeach
                                </div>
                                <p class="mt-2 text-gray-400 hidden lg:block">
                                    {{$game['summary']}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="most-anticipated w-full lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Mostly Anticipated
                </h2>
                <div class="most-anticipated-container space-y-12 mt-8">
                    <div class="game flex">
                        <a href="">
                            <img class="w-12 hover:opacity-75 transition ease-in-out duration-150"
                                 src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png"
                                 alt="diablo">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover:text-gray-300">Diablo</a>
                            <div class="text-gray-300 text-sm mt-1">Sept 16</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
