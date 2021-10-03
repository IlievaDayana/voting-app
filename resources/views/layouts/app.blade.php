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
        <livewire:styles/>
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
                <div class="border-2 sticky top-8 border-blue rounded-xl mt-16 p-5 text-gray-900 bg-white">
                    @auth
                        <livewire:create-idea />       
                    @else
                        <div class="flex items-center justify-between flex-col space-x-3 space-y-5">
                            <h2> Start your brainstorming now!</h2>
                            <div class="flex items-center justify-between space-x-3">
                                <a 
                                    href="{{route('login')}}"
                                    class="flex items-center justify-center text-xs w-22 h-11 rounded-xl font-semibold border border-gray-200 bg-gray-200 hover:border-gray-400
                                    transition duration-150 ease-in">
                                    Login
                                </a>
                                <a
                                    href="{{route('register')}}"
                                    class="flex items-center text-center text-xs justify-center w-22 h-11 rounded-xl font-semibold border text-white border-blue bg-blue hover:border-blue
                                    transition duration-150 ease-in">
                                    Register
                                </a>
                            </div>
                        </div>
                    @endauth
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
     <livewire:scripts/>
</html>
