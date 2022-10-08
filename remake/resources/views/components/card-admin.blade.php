<div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 p-6  ">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border rounded-lg border border-gray-200">
        <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                        <p class="mb-0 font-sans font-semibold leading-normal text-sm">{{ $title }}</p>
                        <h5 class="mb-0 font-bold">
                            {{ $slot }}
                        </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-700 to-green-500">
                        <img class="w-12 h-12 p-1" src="{{ $icon }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>