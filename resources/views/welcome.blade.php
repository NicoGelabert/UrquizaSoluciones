
    <x-app-layout>
        <div id="hero_banner" class="flex flex-col splide">
            <div class="w-full h-full relative splide__track">
                <ul class="splide__list">
                    @foreach ($slider_images as $slider_image)
                    <li class="splide__slide slider flex flex-col sm:flex-row items-center {{$slider_image -> icon}}">
                        <div class="w-full hero_banner_content flex items-center" style="background-image:url({{$slider_image -> image}}">
                        </div>
                        <div class="absolute w-full lg:max-w-[1080px] mx-auto h-full flex flex-col justify-center items-start gap-4 px-4 lg:px-16 top-0 bottom-0 left-0 right-0"
                        >
                            <div class="text-description flex flex-col items-start gap-2">
                                <img src="{{ $slider_image -> icon }}" alt="">
                                <h2 class="font-bold">{{$slider_image -> headline}}</h2>
                            </div>
                            <p class="text-sm">{{$slider_image -> description}}</p>
                            <div class="flex gap-3 justify-center">
                                <a href="#" class="btn-secondary">
                                {{__('Ver Servicio')}}
                                </a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <ul class="splide__pagination"></ul>
        </div>

        <div id="servicios" class="mb-24"></div>

        <section class="services">
            <h2 class="font-bold text-center my-8">Servicios</h2>
            <div id="servicesbuttons">
                @foreach ($services as $service)
                <a href="#" style="background-image:url({{$service -> image}})">
                    <div class="servicesContent">
                        <img src="{{$service -> icon}}" alt="{{$service -> title}}">
                        <h3>{{$service -> title}}</h3>
                    </div>
                </a>
                @endforeach
            </div>
            <div id="sobrenosotros"></div>
        </section>
        
        <div class="lg:max-w-[1536px] px-4 mx-auto">
    
            <x-promo-welcome />
    
            <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 mt-24" id="zonas" />
    
            <x-cobertura />
    
            <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 mt-24" id="contacto" />
    
            <x-newsletter />
        </div>

        
    </x-app-layout>
<style>
    @keyframes rotateAnimation {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(180deg); }
    }

    /* Aplicar la animación de rotación */
    .rotating {
        animation: rotateAnimation 0.25s linear 1;
    }
    /* Animaciones de movimiento */
    /* Animación para botón activo */
    .active-animation {
        transition: transform 0.3s ease; /* Duración y tipo de transición */
        transform: translateX(10px); /* Desplazamiento inicial */
    }

    /* Animación para revertir */
    .active-animation.revert {
        transform: translateX(0); /* Desplazamiento de regreso a su posición original */
    }

</style>
<script>
</script>
