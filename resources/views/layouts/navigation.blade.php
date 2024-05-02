<header
    x-data="{
        mobileMenuOpen: false,
        cartItemsCount: {{ \App\Helpers\Cart::getCartItemsCount() }},
    }"
    @cart-change.window="cartItemsCount = $event.detail.count"
    class="flex justify-between md:justify-center z-50 w-full py-2"
    id="navbar"
>
    <div class="logo flex items-center ml-6 md:hidden">
        <x-application-logo/>
    </div>

    <!-- Responsive Menu -->
    <div
        class="block fixed z-10 top-0 bottom-0 height h-full w-full transition-all mobile-menu md:hidden p-4"
        :class="mobileMenuOpen ? 'left-0' : 'left-full'"
    >
        <div class="flex flex-col justify-evenly items-center h-full">
            <div class="logo-hamburguer">
                <x-application-logo/>
            </div>
            <ul class="flex flex-col gap-y-4 items-center">
                <li>
                    <a
                        href="#servicios"
                        class="relative flex items-center justify-between py-2 px-3 transition-colors underline-hover"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2 -mt-1"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path d="m23.121,18.879l-7.68-7.681-1.411,1.398-5.01-5.01V3.422L3.129.025.044,3.109l3.398,5.891h4.164l5.003,5.003-1.431,1.417,7.7,7.701c.567.566,1.32.879,2.122.879s1.555-.312,2.121-.879c1.17-1.17,1.17-3.072,0-4.242Zm-14.768-3.455l1.424-1.424-2.009-2.009L.879,18.879c-1.17,1.17-1.17,3.072,0,4.242.567.566,1.32.879,2.122.879s1.555-.312,2.121-.879l5.465-5.465-2.233-2.233Zm14.766-11.366c.558,1.077.841,2.235.841,3.442,0,2.549-1.281,4.803-3.231,6.158l-5.281-5.281-1.412,1.397-3.017-3.017V2.355c1.368-1.446,3.297-2.355,5.44-2.355,1.181,0,2.318.272,3.381.811l.319.162-3.574,3.614c-.781.781-.781,2.047,0,2.828.781.781,2.047.781,2.828,0l3.573-3.612.132.256Z"/>
                        </svg>
                        <div class="flex items-center">
                            {{ __('Servicios') }}
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#sobrenosotros"
                        class="relative flex items-center justify-between py-2 px-3 transition-colors underline-hover"
                    >
                        <div class="flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2 -mt-1"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path d="m19,5v2H5v-2h1.023C6.262,2.365,8.366.261,11,.023v3.977h2V.023c2.634.239,4.738,2.343,4.977,4.977h1.023Zm-3,11h-8c-2.757,0-5,2.243-5,5v3h18v-3c0-2.757-2.243-5-5-5Zm-9.998-6.854c.078,3.241,2.738,5.854,5.998,5.854s5.92-2.613,5.998-5.854l.002-.146H6l.002.146Z"/>
                            </svg>
                            {{ __('Sobre Nosotros') }}
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#zonas"
                        class="relative inline-flex items-center py-navbar-item px-navbar-item underline-hover"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2 -mt-1"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path d="M23,24H1c-.445,0-.837-.294-.96-.722-.124-.427,.05-.885,.426-1.123,.204-.129,5.067-2.155,11.534-2.155s11.33,2.026,11.534,2.155c.376,.238,.55,.696,.426,1.123-.124,.428-.515,.722-.96,.722ZM11.997,.002S7.934-.145,4.738,2.11c-1.801,1.271-2.942,3.034-3.595,4.33-.388,.771,.234,1.686,1.05,1.546,1.384-.238,3.371-.789,5.179-2.065C10.568,3.666,11.997,.002,11.997,.002m.029,0s1.43,3.665,4.625,5.919c1.809,1.276,3.795,1.827,5.179,2.065,.816,.14,1.438-.775,1.05-1.546-.653-1.296-1.794-3.059-3.595-4.33C16.091-.145,12.027,.002,12.027,.002m-3.502,7.554c-.5,.353-1.01,.654-1.519,.918-.037,1.11,.169,2.206,.394,2.875,.196,.582,.961,.834,1.538,.507,1.147-.65,2.909-2.203,3.654-3.993,.709-1.703,.357-3.517-.024-4.674-.869,1.374-2.195,3.063-4.043,4.367Zm7.705,.475c-.245-.149-.489-.305-.73-.475-.216-.152-.421-.312-.623-.474-.088,.513-.222,1.032-.438,1.55-.275,.661-.66,1.289-1.096,1.877-.139,2.773-.98,5.501-1.772,7.501,.144-.002,.284-.008,.43-.008,1.634,0,3.173,.125,4.583,.317,.394-2.354,.715-5.853-.045-9.081-.099-.422-.204-.815-.309-1.206Z"/>
                        </svg>
                        {{ __('Zona de Cobertura') }}
                    </a>
                </li>
                <li>
                    <a
                        href="#contacto"
                        class="relative flex items-center justify-between py-2 px-3 transition-colors underline-hover"
                    >
                        <div class="flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2 -mt-1"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path d="M20,8c-2.21,0-4-1.79-4-4S17.79,0,20,0s4,1.79,4,4-1.79,4-4,4Zm-10.12,6.12c1.17,1.17,3.07,1.17,4.24,0l4.33-4.33c-2.56-.68-4.45-3.01-4.45-5.79,0-.34,.04-.67,.09-1H3c-1.15,0-2.13,.65-2.64,1.6L9.88,14.12Zm11.31-4.24l-5.65,5.65c-.97,.97-2.26,1.46-3.54,1.46s-2.56-.49-3.54-1.46L0,7.07V24H24V8.46c-.78,.7-1.74,1.2-2.81,1.42Z"/>
                            </svg>
                            {{ __('Contacto') }}
                        </div>
                        <!-- Cart Items Counter -->
                        <small
                            x-show="cartItemsCount"
                            x-transition
                            x-text="cartItemsCount"
                            x-cloak
                            class="py-[2px] px-[8px] rounded-full bg-red-500 cart-widget"
                        ></small>
                        <!--/ Cart Items Counter -->
                    </a>
                </li>
                <!-- @if (!Auth::guest())
                    <li x-data="{open: false}" class="relative">
                        <a
                            @click="open = !open"
                            class="cursor-pointer flex justify-between items-center py-2 px-3 underline-hover"
                        >
                        <span class="flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            />
                            </svg>
                            {{ __('My account') }}
                        </span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                        <ul
                            x-show="open"
                            x-transition
                            class="z-10 right-0 py-2"
                        >
                            <li>
                                <a href="{{ route('profile') }}" class="flex px-3 py-2 underline-hover">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                        />
                                    </svg>
                                    {{ __('My profile') }}
                                </a>
                            </li>
                            <li class="underline-hover">
                                <a
                                    href="{{ route('order.index') }}"
                                    class="flex items-center px-3 py-2 underline-hover"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                        />
                                    </svg>
                                    {{ __('My orders')}}
                                </a>
                            </li>
                            <li class="underline-hover">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <a href="{{ route('logout') }}"
                                       class="flex items-center px-3 py-2 underline-hover"
                                       onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 mr-2"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="1"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                            />
                                        </svg>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a
                            href="{{ route('login') }}"
                            class="flex items-center py-2 px-3 transition-colors underline-hover"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                                />
                            </svg>
                            {{ __('Login') }}
                        </a>
                    </li>
                    <li class="px-3 py-3">
                        <a
                            href="{{ route('register') }}"
                            class="block text-center py-2 px-3 rounded shadow-md transition-colors w-full btn-register"
                        >
                            {{ __('Register now') }}
                        </a>
                    </li>
                @endif -->
            </ul>
            <div class="flex justify-center gap-4 social-icons">
                <a href="https://wa.me/34622406965" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                    <i class="flex text-2xl leading-none fi fi-brands-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com/puntosurfuengirola/?hl=es" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                    <i class="flex text-2xl leading-none fi fi-brands-instagram"></i>
                </a>
                <a href="https://maps.app.goo.gl/22GUnZ2foJeEYud98" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                    <i class="flex text-2xl leading-none fi fi-rs-map-marker"></i>
                </a>
            </div>
        </div>
    </div>
    <!--/ Responsive Menu -->

    <nav class="hidden md:flex w-full justify-around">
        <div class="logo flex justify-center">
            <x-application-logo/>
        </div>
        <ul class="grid grid-flow-col items-center justify-end">
            <!-- <li x-data="{open: false}" class="relative">
                <a
                    @click="open = !open"
                    class="cursor-pointer flex items-center py-navbar-item px-navbar-item pr-5 underline-hover"
                >
                <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span><span class="small-text">{{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 ml-2"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </a>
                <ul
                    @click.outside="open = false"
                    x-show="open"
                    x-transition
                    x-cloak
                    class="absolute z-10 right-0 w-48 dropdown px-4"
                >
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <li>
                                <a class="flex items-center underline-hover py-lang-navbar-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span><span class="small-text">{{$language['display']}}</span></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li> -->
            <li>
                <a
                    href="#servicios"
                    class="relative inline-flex items-center py-navbar-item px-navbar-item underline-hover"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path d="m23.121,18.879l-7.68-7.681-1.411,1.398-5.01-5.01V3.422L3.129.025.044,3.109l3.398,5.891h4.164l5.003,5.003-1.431,1.417,7.7,7.701c.567.566,1.32.879,2.122.879s1.555-.312,2.121-.879c1.17-1.17,1.17-3.072,0-4.242Zm-14.768-3.455l1.424-1.424-2.009-2.009L.879,18.879c-1.17,1.17-1.17,3.072,0,4.242.567.566,1.32.879,2.122.879s1.555-.312,2.121-.879l5.465-5.465-2.233-2.233Zm14.766-11.366c.558,1.077.841,2.235.841,3.442,0,2.549-1.281,4.803-3.231,6.158l-5.281-5.281-1.412,1.397-3.017-3.017V2.355c1.368-1.446,3.297-2.355,5.44-2.355,1.181,0,2.318.272,3.381.811l.319.162-3.574,3.614c-.781.781-.781,2.047,0,2.828.781.781,2.047.781,2.828,0l3.573-3.612.132.256Z"/>
                    </svg>
                    {{ __('Servicios') }}
                </a>
            </li>
            <li>
                <a
                    href="#sobrenosotros"
                    class="relative inline-flex items-center py-navbar-item px-navbar-item underline-hover"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2 -mt-1"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path d="m19,5v2H5v-2h1.023C6.262,2.365,8.366.261,11,.023v3.977h2V.023c2.634.239,4.738,2.343,4.977,4.977h1.023Zm-3,11h-8c-2.757,0-5,2.243-5,5v3h18v-3c0-2.757-2.243-5-5-5Zm-9.998-6.854c.078,3.241,2.738,5.854,5.998,5.854s5.92-2.613,5.998-5.854l.002-.146H6l.002.146Z"/>
                    </svg>
                    {{ __('Sobre Nosotros') }}
                </a>
            </li>
            <li>
                <a
                    href="#zonas"
                    class="relative inline-flex items-center py-navbar-item px-navbar-item underline-hover"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2 -mt-1"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path d="M23,24H1c-.445,0-.837-.294-.96-.722-.124-.427,.05-.885,.426-1.123,.204-.129,5.067-2.155,11.534-2.155s11.33,2.026,11.534,2.155c.376,.238,.55,.696,.426,1.123-.124,.428-.515,.722-.96,.722ZM11.997,.002S7.934-.145,4.738,2.11c-1.801,1.271-2.942,3.034-3.595,4.33-.388,.771,.234,1.686,1.05,1.546,1.384-.238,3.371-.789,5.179-2.065C10.568,3.666,11.997,.002,11.997,.002m.029,0s1.43,3.665,4.625,5.919c1.809,1.276,3.795,1.827,5.179,2.065,.816,.14,1.438-.775,1.05-1.546-.653-1.296-1.794-3.059-3.595-4.33C16.091-.145,12.027,.002,12.027,.002m-3.502,7.554c-.5,.353-1.01,.654-1.519,.918-.037,1.11,.169,2.206,.394,2.875,.196,.582,.961,.834,1.538,.507,1.147-.65,2.909-2.203,3.654-3.993,.709-1.703,.357-3.517-.024-4.674-.869,1.374-2.195,3.063-4.043,4.367Zm7.705,.475c-.245-.149-.489-.305-.73-.475-.216-.152-.421-.312-.623-.474-.088,.513-.222,1.032-.438,1.55-.275,.661-.66,1.289-1.096,1.877-.139,2.773-.98,5.501-1.772,7.501,.144-.002,.284-.008,.43-.008,1.634,0,3.173,.125,4.583,.317,.394-2.354,.715-5.853-.045-9.081-.099-.422-.204-.815-.309-1.206Z"/>
                    </svg>
                    {{ __('Zona de Cobertura') }}
                </a>
            </li>
            
            <li>
                <a
                    href="#contacto"
                    class="relative inline-flex items-center py-navbar-item px-navbar-item underline-hover"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20,8c-2.21,0-4-1.79-4-4S17.79,0,20,0s4,1.79,4,4-1.79,4-4,4Zm-10.12,6.12c1.17,1.17,3.07,1.17,4.24,0l4.33-4.33c-2.56-.68-4.45-3.01-4.45-5.79,0-.34,.04-.67,.09-1H3c-1.15,0-2.13,.65-2.64,1.6L9.88,14.12Zm11.31-4.24l-5.65,5.65c-.97,.97-2.26,1.46-3.54,1.46s-2.56-.49-3.54-1.46L0,7.07V24H24V8.46c-.78,.7-1.74,1.2-2.81,1.42Z"/>
                        </svg>
                    {{ __('Contacto') }}
                    <small
                        x-show="cartItemsCount"
                        x-transition
                        x-cloak
                        x-text="cartItemsCount"
                        class="absolute z-[100] top-4 -right-1 py-[2px] px-[8px] rounded-full bg-red-500 cart-widget mix-blend-multiply"
                    ></small>
                </a>
            </li>
        </ul>
    </nav>
    <div class="flex md:hidden">
        <!-- <div x-data="{open: false}" class="relative">
            <a
                @click="open = !open"
                class="cursor-pointer flex items-center py-navbar-item px-navbar-item pr-5 underline-hover h-full"
            >
                <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span>
                <span class="small-text">{{ Config::get('languages')[App::getLocale()]['display'] }}</span>
            </a>
            <ul
                @click.outside="open = false"
                x-show="open"
                x-transition
                x-cloak
                class="absolute z-10 right-0 w-48 dropdown px-4"
            >
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li>
                            <a class="flex items-center underline-hover py-lang-navbar-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span><span class="small-text">{{$language['display']}}</span></a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div> -->
        <x-hamburguer />
    </div>
</header>
<style>
    .left-full{
        left:-100%;
    }
</style>
<script>
    var prevScrollpos = window.pageYOffset;
    var navbar = document.getElementById("navbar");
    // navbar.style.top = "5px";
    var scrollThreshold = 15; // Umbral de desplazamiento mínimo antes de ocultar el encabezado
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        var scrollDifference = Math.abs(prevScrollpos - currentScrollPos);
        if (scrollDifference >= scrollThreshold) {
            if (prevScrollpos > currentScrollPos) {
                navbar.style.top = "0";
            } else {
                navbar.style.top = "-110px";
            }
        }
        prevScrollpos = currentScrollPos;

        var distanceFromTop = Math.abs(window.scrollY);
        if(distanceFromTop <= 5){
            document.getElementById("navbar").classList.remove("scrolled-bottom");
        }else{
            document.getElementById("navbar").classList.add("scrolled-bottom");
        }
    }    
</script>