<footer>
    <div class="footer-container flex flex-col md:flex-row md:items-center max-w-[90%] lg:max-w-[80%] mx-auto gap-y-8">
        <div class="logo flex flex-col align-center gap-y-6 justify-between">
            <x-application-logo class="block fill-current" />
            <div class="hidden md:flex justify-center gap-4 social-icons">
                <a href="https://wa.me/34692372830" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                    <i class="flex text-2xl leading-none fi fi-brands-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com/puntosurfuengirola/?hl=es" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                    <i class="flex text-2xl leading-none fi fi-brands-instagram"></i>
                </a>
                <a href="https://maps.app.goo.gl/HumhySSbnbBbkqgP8" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                    <i class="flex text-2xl leading-none fi fi-rs-map-marker"></i>
                </a>
            </div>
        </div>
        <div>
            <ul class="flex flex-col gap-4 text-center md:flex-row footer-menu">
                <li><a href="/">{{ __('Inicio') }}</a></li>
                <li><a href="#servicios">{{ __('Servicios') }}</a></li>
                <li><a href="#proyectos">{{ __('Proyectos') }}</a></li>
                <li><a href="#contacto">{{ __('Contacto') }}</a></li>
            </ul>
        </div>
        <div class="md:hidden flex justify-center gap-6 social-icons">
            <a href="https://wa.me/34692372830" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                <i class="flex text-2xl leading-none fi fi-brands-whatsapp"></i>
            </a>
            <!-- <a href="https://www.instagram.com/puntosurfuengirola/?hl=es" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                <i class="flex text-2xl leading-none fi fi-brands-instagram"></i>
            </a> -->
            <a href="https://maps.app.goo.gl/HumhySSbnbBbkqgP8" class="h-10 w-10 aspect-square rounded-md bg-black/5 p-2 ring-1 ring-black/10" target="_blank">
                <i class="flex text-2xl leading-none fi fi-rs-map-marker"></i>
            </a>
        </div>
    </div>
    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent opacity-50 dark:opacity-100" />
    <div class="post-footer max-w-[90%] lg:max-w-[80%] ">
        <span>{{__('Site design and developed by')}}<a href="https://nicolasgelabert.com.ar"> Nicolás Gelabert</a></span>
        <!-- <ul class="flex gap-x-4">
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <li>
                        <a class="flex items-center gap-x-1 opacity-50" href="{{ route('lang.switch', $lang) }}">
                            <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                            <span>{{$language['display']}}</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="flex items-center gap-x-1" href="{{ route('lang.switch', $lang) }}">
                            <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                            <span>{{$language['display']}}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul> -->
    </div>
</footer>