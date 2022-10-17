<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo {class="block h-10 w-auto fill-current text-gray-600" } />
                    </a>
                </div>

                <!-- Navigation Links -->

                @if (Auth::guard('admin')->check())
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.index')">
                        {{ __('Início') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.products')">
                        {{ __('Gerenciar Anúncios') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.users')">
                        {{ __('Gerenciar Usuários') }}
                    </x-nav-link>
                </div>
                @elseif(Auth::check())
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('user.home')">
                        {{ __('Início') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('user.add.product')">
                        {{ __('Criar Anúncio') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('user.product')">
                        {{ __('Meus Anúncios') }}
                    </x-nav-link>
                </div>
                @endif

            </div>

            <!-- Settings Dropdown -->

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            @if (Auth::check())
                            <div>{{ Auth::user()->name }}</div>
                            @elseif(Auth::guard('admin'))
                            <div>{{ Auth::guard('admin')->user()->name }}</div>
                            @endif
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        @if (Auth::check())
                        <x-dropdown-link :href="route('user.product')">
                            {{ __('Meus Anúncios') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.edit')">
                            {{ __('Meus Dados') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.edit.password')">
                            {{ __('Alterar Senha') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @elseif(Auth::guard('admin'))
                        <x-dropdown-link :href="route('admin.products')">
                            {{ __('Gerenciar Anúncios') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.users')">
                            {{ __('Gerenciar Usuários') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.index')">
                            {{ __('Registar novo Admin') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.index')">
                            {{ __('Alterar Senha') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.index')">
                            {{ __('Alterar Meus Dados') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('admin.logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @endif
                        
                    </x-slot>
                </x-dropdown>
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
            <div class="px-4">
                @if (Auth::check())
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @elseif(Auth::guard('admin')->check())
                <div class="font-medium text-base text-gray-800">{{ Auth::guard('admin')->user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::guard('admin')->user()->email }}</div>
                @endif
            </div>

            @if (Auth::guard('admin')->check())
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('admin.index')">
                    {{ __('Início') }}
                </x-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('admin.products')">
                    {{ __('Gerenciar Anúncios') }}
                </x-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('admin.users')">
                    {{ __('Gerenciar Usúarios') }}
                </x-responsive-nav-link>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('admin.logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
            @elseif(Auth::check())
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('user.home')">
                    {{ __('Início') }}
                </x-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('user.home')">
                    {{ __('Criar Anúncio') }}
                </x-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('user.product')">
                    {{ __('Meus Anúncios') }}
                </x-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('user.edit')">
                    {{ __('Meus Dados') }}
                </x-responsive-nav-link>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
            @endif
            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                
            </div>
            </div>
        </div>
</nav>