<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name') }}</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/img/puntosur.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=albert-sans:200,300,500,700|battambang:100,300,400,700,900" rel="stylesheet" />
        
        <!-- reCaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
    #loader-wrapper{
        width:100%;
        height: 100vh;
        display:flex;
        justify-content: center;
        align-items: center;
    }
    
    #body-content{
        display:none;
    }
</style>
    <body>
        <div id="loader-wrapper">
            <x-spinner />
        </div>
        <div id="body-content">
            @include('layouts.navigation')

            <main class="w-full mx-auto">
                {{ $slot }}
            </main>
            
            @include('layouts.footer')
            <!-- Toast -->
            <div
                x-data="toast"
                x-show="visible"
                x-transition
                x-cloak
                @notify.window="show($event.detail.message)"
                class="fixed w-full	sm:max-w-[50%] sm:left-1/2 sm:-ml-[25%] top-16 py-2 px-4 pb-4 bg-emerald-500 text-white"
            >
                <div class="font-semibold" x-text="message"></div>
                <button
                    @click="close"
                    class="absolute flex items-center justify-center right-2 top-2 w-[30px] h-[30px] rounded-full hover:bg-black/10 transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
                <!-- Progress -->
                <div>
                    <div
                        class="absolute left-0 bottom-0 right-0 h-[6px] bg-black/10"
                        :style="{'width': `${percent}%`}"
                    ></div>
                </div>
            </div>
            <!--/ Toast -->
        </div>
    </body>
</html>
<script>
    window.onload = function () {
    //Find the element with id "loader-wrapper" and hide it
        var loaderWrapper = document.getElementById('loader-wrapper');
        var bodyContent = document.getElementById('body-content');
        
        if (loaderWrapper) {
            loaderWrapper.style.display = 'none';
            bodyContent.style.display = 'block';
        }
    };
</script>