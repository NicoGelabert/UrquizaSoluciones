<div class="subscribe overflow-hidden my-24 flex flex-col md:flex-row gap-8">
    <div class="flex flex-col gap-8 md:w-1/2">
        <h2 class="font-bold text-left my-8">{{__('Confíe en nosotros.')}}</h2>
        <p class="text-lg leading-8 text-gray-400">{{__('Solicite un presupuesto y un asesor se contactará con usted.')}}</p>
        <div class="flex justify-start gap-6 social-icons">
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
    <div class="md:w-1/2 mb-8">
        <!-- <form id="subscriptionForm" action="{{ route('subscribe.store') }}" method="post">
            @csrf
            <div class="flex flex-col gap-6 w-full">
                <input id="nameInput" type="text" name="name" placeholder="Su nombre" required class="account w-full">
                <input id="emailInput" type="email" name="email" placeholder="Su email" required class="account w-full">
                <input id="phoneInput" type="number" name="phone" placeholder="Su teléfono" required class="account w-full">
                <select name="select">
                    <option value="value0">Zona del trabajo</option>
                    <option value="value1">Málaga</option>
                    <option value="value2">Torremolinos</option>
                    <option value="value3">Benalmádena</option>
                    <option value="value4">Los Boliches</option>
                    <option value="value5">Mijas</option>
                    <option value="value6">Fuengirola</option>
                    <option value="value7">Calahonda</option>
                    <option value="value8">Marbella</option>
                </select>
                <textarea id="messageInput" name="message" placeholder="Déjenos un mensaje" rows="4" required class="account w-full"></textarea>
                <button id="subscribeBtn" type="submit" class="btn-secondary w-fit">{{__('Enviar')}}</button>
            </div>
        </form>
        <div id="successMessage" style="display: none;">
            {{__('Mensaje enviado!')}}
        </div>
        <div id="errorMessage" style="display: none;">
            Falló el envío. Por favor intente de nuevo en unos minutos.
        </div> -->
        <form id="subscriptionForm" action="{{ route('subscribe.store') }}" method="post" class="flex gap-2 w-full">
            @csrf
            <div class="flex flex-col gap-6 w-full">
                <input id="nameInput" type="text" name="name" placeholder="Su nombre" required class="account w-full">
                <input id="emailInput" type="email" name="email" placeholder="Su correo electrónico" required class="account w-full">
                <input id="phoneInput" type="tel" name="phone" placeholder="Su teléfono" required class="account w-full" pattern="[0-9]{9}">
                <select name="area" required id="areaInput">
                    <option value="">Zona del trabajo</option>
                    <option value="Málaga">Málaga</option>
                    <option value="Torremolinos">Torremolinos</option>
                    <option value="Benalmádena">Benalmádena</option>
                    <option value="Los Boliches">Los Boliches</option>
                    <option value="Mijas">Mijas</option>
                    <option value="Fuengirola">Fuengirola</option>
                    <option value="Calahonda">Calahonda</option>
                    <option value="Marbella">Marbella</option>
                </select>
                <textarea id="messageInput" name="message" placeholder="Déjenos un mensaje" rows="4" required class="account w-full"></textarea>
                <div class="g-recaptcha" data-sitekey="6LcjHtMpAAAAAII4PAM3Vh2hT-0RDntu6B-3a_pH"></div>
                <button id="subscribeBtn" type="submit" class="btn-primary">{{__('Subscribe')}}</button>
            </div>
        </form>
        <div id="successMessage" style="display: none;">
            {{__('Subscription successful!')}}
        </div>
        <div id="errorMessage" style="display: none;">
            Subscription failed. Please try again.
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('subscriptionForm');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');

        form.addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent default form submission behavior

            const name = document.getElementById('nameInput').value;
            const email = document.getElementById('emailInput').value;
            const phone = document.getElementById('phoneInput').value;
            const area = document.getElementById('areaInput').value;
            const message = document.getElementById('messageInput').value;
            console.log(typeof name)
            console.log(typeof area)
            try {
                const response = await fetch('{{ route("subscribe.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ name, email, phone, area, message })
                });

                const data = await response.json();
                if (response.ok) {
                    successMessage.style.display = 'block';
                    form.style.display = 'none';
                } else {
                    errorMessage.style.display = 'block';
                }
            } catch (error) {
                errorMessage.style.display = 'block';
            }
        });
    });
</script>