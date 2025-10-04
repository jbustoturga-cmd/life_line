<nav x-data="{ open: false }" class="navbar">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/Group 22.png') }}">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Panel') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('usuarios.index') }}" :active="request()->routeIs('usuarios.*')">
                        {{ __('Usuarios') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                        {{ __('Contáctanos') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-white hover:text-blue-200 focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293..."/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-blue-200 hover:bg-blue-900">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Panel') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('usuarios.index') }}" :active="request()->routeIs('usuarios.*')">
                {{ __('Usuarios') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                {{ __('Contáctanos') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-blue-900">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-blue-200">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Cerrar sesión') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

    <!-- ---------------- Estilos Integrados Tipo Login ---------------- -->
    <style>
        nav.navbar {
            background: linear-gradient(135deg, #1a2c54 60%, #3c51a0 100%);
            border-bottom: 2px solid #3c51a0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            position: relative;
            z-index: 50;
        }

        nav.navbar a,
        nav.navbar .x-dropdown-link,
        nav.navbar .x-responsive-nav-link {
            color: #fff;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        nav.navbar a:hover,
        nav.navbar .x-dropdown-link:hover,
        nav.navbar .x-responsive-nav-link:hover,
        nav.navbar .active {
            color: #a8c0ff;
            text-decoration: underline;
        }

        .x-dropdown {
            background-color: #1a2c54;
            border: 1px solid #3c51a0;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .x-dropdown a {
            color: #fff;
            padding: 0.5rem 1rem;
        }

        .x-dropdown a:hover {
            color: #a8c0ff;
            background-color: rgba(60,81,160,0.1);
        }

        nav button svg {
            stroke: #fff;
        }

        .x-responsive-nav-link {
            display: block;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
            border-radius: 6px;
        }

        .x-responsive-nav-link:hover {
            color: #a8c0ff;
            background-color: rgba(60,81,160,0.1);
        }
    </style>
</nav>
