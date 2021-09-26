<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#">Laracasts logo</a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}</a>
                        </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">Avatar</a>
            </div>
        </header>
        <main class="container mx-auto flex max-w-custom">
            <div class="mr-5 w-70">
                <div class="border-2 border-blue rounded-xl mt-16 p-5 text-gray-900 bg-white">
                    <div>
                        <h3 class="font-semibold text-center my-2">Add an idea</h3>
                        <p class="text-center text-xs">Let us know what you like and will review it</p> 
                    </div>
                    <form action="#" method="POST" class="space-y-4 px-4 py-6">
                        <div>
                            <input type="text" class="w-full bg-gray-100  text-sm rounded-xl border-none placeholder-gray-900 px-4 py-2" placeholder="Your Idea">
                        </div>
                        <div>
                            <select name="category_add" id="category_add" class="w-full bg-gray-100  text-sm rounded-xl border-none placeholder-gray-900 px-4 py-2">
                                <option value="Category One">Category One</option>
                                <option value="Category Two">Category Two</option>
                                <option value="Category Three">Category Three</option>
                                <option value="Category Four">Category Four</option>
                            </select>
                        </div>
                        <div>
                            <textarea name="idea" id="idea" cols="30" rows="4" placeholder="describe your idea" class="w-full bg-gray-100  text-sm rounded-xl border-none placeholder-gray-900 px-4 py-2"></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" 
                                class="flex items-center text-xs justify-between w-1/2 h-11 rounded-xl font-semibold border border-gray-200 bg-gray-200 hover:border-gray-400 px-6 py-3
                                transition duration-150 ease-in">
                                Attach
                                <svg xmlns="http://www.w3.org/2000/svg" class="transform rotate-140" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.988 511.988" style="enable-background:new 0 0 511.988 511.988;" xml:space="preserve" width="15px" height="15px">
                                    <g transform="translate(1 1)">
                                        <g>
                                            <path d="M489.305,185.463c-8.354-8.309-21.861-8.272-30.17,0.081L202.687,443.379c-33.271,33.271-87.308,33.271-120.641-0.045    c-33.308-33.325-33.308-87.362,0.004-120.674L346.089,57.234c20.772-20.771,54.543-20.771,75.375,0.045    c20.826,20.826,20.826,54.593-0.005,75.425L202.727,351.434c-0.014,0.014-0.026,0.03-0.04,0.044    c-8.333,8.287-21.8,8.276-30.116-0.04c-8.33-8.33-8.33-21.831,0-30.161l105.58-105.602c8.33-8.332,8.329-21.84-0.003-30.17    c-8.332-8.33-21.84-8.329-30.17,0.003l-105.579,105.6c-24.991,24.991-24.991,65.507,0.002,90.499    c24.992,24.992,65.508,24.992,90.501,0c0.029-0.029,0.052-0.06,0.08-0.089l218.646-218.646c37.494-37.494,37.494-98.276,0-135.77    c-37.499-37.472-98.277-37.472-135.749,0L51.84,292.53C1.906,342.464,1.906,423.509,51.876,473.504    c50.003,49.977,131.049,49.977,181.022,0.004l256.489-257.875C497.695,207.279,497.658,193.772,489.305,185.463z"/>
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </button>
                            <button type="button" 
                                class="flex items-center text-xs justify-between w-1/2 h-11 rounded-xl font-semibold border text-white border-blue bg-blue hover:border-blue px-6 py-3
                                transition duration-150 ease-in">
                                submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-175">
                <nav class="flex justify-between items-center text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li>
                            <a href="" class="border-b-4 border-blue pb-3">All Ideas (87)</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-gray-900">Considering (6)</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-gray-900">In progress (1)</a>
                        </li>
                    </ul>
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li>
                            <a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-gray-900">Implemented (87)</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-gray-900">Closed (6)</a>
                        </li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{$slot}}
                </div>
            </div>
        </main>
    </body>
</html>
