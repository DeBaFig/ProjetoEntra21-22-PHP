<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 " style="padding: 10px;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo />
                    </a>
                </div>
                <!-- search -->
                <form action="" method="POST" class="flex self-center">
                    @csrf
                    <x-text-input id="home_search" class="block mt-1 w-full" style="margin:10px ;" placeholder="Procure seu comprador!" type="text" name="home_search" :value="old('home_search')" autofocus />
                    <x-primary-button class="ml-3">
                        {{ __('Quero Vender!') }}
                    </x-primary-button>
                </form>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <x-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                        {{ __('Contato') }}
                    </x-nav-link>
                    <x-nav-link :href="route('sobre')" :active="request()->routeIs('sobre')">
                        {{ __('Sobre Nós') }}
                    </x-nav-link>
                    <x-nav-link :href="route('sobre-balcao')" :active="request()->routeIs('sobre-balcao')">
                        {{ __('Sobre Balcão Brasil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-nav-link>

                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <x-responsive-nav-link :href="route('contato')">
                {{ __('Contato') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('sobre')">
                {{ __('Sobre Nós') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('sobre-balcao')">
                {{ __('Sobre Balcão Brasil') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>
            <div class="mt-3 space-y-1">

            </div>
        </div>
    </div>
</nav>