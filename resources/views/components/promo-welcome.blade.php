<div class="about flex flex-col md:flex-row gap-8 px-4 mt-24">
    <!-- text -->
    <div class="flex flex-col justify-between md:w-1/2">
        <div class="logo">
            <x-application-logo/>
        </div>
        <p class="my-8 text-base text-gray-500">En el año 2021, nació Urquiza Soluciones con un propósito claro: ser la respuesta a las necesidades de instalación y mantenimiento de aires acondicionados, servicios de electricidad y fontanería en la Costa del Sol. Desde entonces, nos hemos destacado como líderes, gracias a nuestra dedicación implacable hacia la excelencia y la sólida confianza depositada por nuestros clientes.</p>
        <div class="whatsapp">
            <p class="font-bold text-base">{{__('¿Tienes una urgencia? ¡Llámanos!')}}</p>
            <div class="wsIcon">
                <a href="https://wa.me/34692372830"><i class="fi fi-brands-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <!-- text -->
    <!-- image -->
    <div class="flex md:w-1/2 items-center gap-3 md:gap-6">
        <div class="w-1/3 gap-y-4 flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/img/aire-acondicionado.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/img/electricidad.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
        </div>
        <div class=" w-1/3 gap-y-4 flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/img/fontaneria.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/img/aire-acondicionado.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/img/electricidad.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
        </div>
        <div class=" w-1/3 gap-y-4 flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/img/fontaneria.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/img/aire-acondicionado.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
        </div>
    </div>
    <!-- image -->
</div>