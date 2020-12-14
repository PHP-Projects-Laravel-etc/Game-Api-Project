@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4">
    <div class="game-details border-b border-gray-800 pb-12 flex">
        <div class="flex-none">
            <img src="https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png" alt="diablo">
        </div>
        <div class="ml-12 mr-64">
            <h2 class="font-semibold text-4xl">Diablo</h2>
            <div class="text-gray-400">
                <span>Adventurei RPG</span>
                &middot;
                <span>Blizzard</span>
                &middot;
                <span>PC</span>
            </div>
            <div class="flex flex-wrap items-center mt-8 space-x-12">
                <div class="flex items-center">
                    <div class="w-16 h-16 rounded-full bg-gray-800">
                        <div class="flex font-semibold text-sm h-full justify-center items-center">90%</div>
                    </div>
                    <div class="ml-4 text-xs">Member<br>Score</div>
                </div>
                <div class="flex items-center ml-12">
                    <div class="w-16 h-16 rounded-full bg-gray-800">
                        <div class="flex font-semibold text-sm h-full justify-center items-center">92%</div>
                    </div>
                    <div class="ml-4 text-xs">Critic<br>Score</div>
                </div>
                <div class="flex items-center  ml-12">
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <p class="mt-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ea est, et facere fuga incidunt iusto labore magni nihil obcaecati quod sequi sunt. Ab ad at culpa debitis esse, excepturi fugiat iure labore, natus pariatur quas sequi tenetur vitae voluptates voluptatum. Beatae, eum fugiat fugit incidunt praesentium quasi recusandae voluptates?
            </p>
            <div class="mt-12">
                <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600
rounded transition ease-in-out duration-300">Watch Trailer</button>
            </div>
        </div>
    </div>
</div>
@endsection
