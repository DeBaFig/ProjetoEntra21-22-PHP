    <div class="w-full max-w-full px-3 lg:w-1/3 lg:flex-none">
        <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
            <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('{{ asset('assets/img/bg-admin-link-component.jpg') }}')">
                <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-green-900 to-blue-800 opacity-80"></span>
                <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                    <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-sm" {{ $attributes }}>
                        <h5 class="pt-2 mb-6 font-bold text-white">{{ $title }}</h5>
                        <p class="text-white">{{ $slot }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>