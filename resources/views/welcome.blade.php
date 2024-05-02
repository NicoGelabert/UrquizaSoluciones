
    <x-app-layout>
        <div id="hero_banner" class="mt-24 flex flex-col splide">
            <div class="w-full h-full relative splide__track">
                <ul class="splide__list">
                    @foreach ($slider_images as $slider_image)
                    <li class="splide__slide slider flex flex-col sm:flex-row items-center {{$slider_image -> background}}">
                        <div class="w-full hero_banner_content flex items-center rounded-3xl" style="background-image:url({{$slider_image -> image}}">
                        </div>
                        <div class="w-full text-center absolute h-full flex flex-col justify-center gap-4"
                        >
                            <div class="flex justify-center w-auto">
                                <div class="text-description flex items-center py-2 px-4 rounded-xl gap-2">
                                    <img src="{{ url($slider_image -> background) }}" alt="">
                                    <p class="text-sm">{{$slider_image -> description}}</p>
                                </div>
                            </div>
                            <h2 class="font-bold">{{$slider_image -> headline}}</h2>
                            <div class="flex gap-3 justify-center">
                                <a href="{{$slider_image -> link}}" class="btn-secondary">
                                {{__('Ver ')}}{{$slider_image -> headline}} 
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
                <a href="{{ route('services.view', $service->slug) }}" style="background-image:url({{$service -> image}})">
                    <div class="servicesContent">
                        <img src="{{$service -> icon}}" alt="{{$service -> title}}">
                        <h3>{{$service -> title}}</h3>
                    </div>
                </a>
                @endforeach
            </div>
        </section>

        <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 mt-24" id="sobrenosotros" />

        <x-promo-welcome />

        <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 mt-24" id="zonas" />

        <x-cobertura />

        <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 mt-24" id="contacto" />

        <x-newsletter />
        
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
