<div class="min-h-screen bg-gradient-to-b from-indigo-50 to-white">
    <!-- Hero Section -->
    <div class="relative bg-indigo-600 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-indigo-600 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-indigo-600 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10" aria-label="Global">
                        <!-- Linker gedeelte (logo + menu items) -->
                        <div class="flex items-center">
                            <div class="flex items-center flex-shrink-0">
                                <a href="{{ route('home') }}" class="flex items-center">
                                    <svg class="h-8 w-auto sm:h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    <span class="ml-2 text-white font-semibold hidden md:inline">YourSaaS</span>
                                </a>
                            </div>
                            <div class="hidden md:block md:ml-10">
                                <div class="flex space-x-8">
                                    <a href="#pricing" class="font-medium text-white hover:text-indigo-100">Prijzen</a>
                                    <a href="#features" class="font-medium text-white hover:text-indigo-100">Features</a>
                                </div>
                            </div>
                        </div>

                        <!-- Rechter gedeelte (account links) -->
                        <div class="hidden md:block">
                            <div class="flex items-center space-x-6">
                                @auth
                                    <a href="{{ route('dashboard') }}" class="font-medium text-white hover:text-indigo-100">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}" class="font-medium text-white hover:text-indigo-100">
                                        @csrf
                                        <button class="flex items-center cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                            </svg>

                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="font-medium text-white hover:text-indigo-100">Login</a>
                                    <a href="{{ route('register') }}" class="font-medium text-white hover:text-indigo-100 border border-white rounded-md px-3 py-1 whitespace-nowrap">Registreren</a>
                                @endauth
                            </div>
                        </div>
                    </nav>
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">Welkom bij</span>
                            <span class="block text-indigo-200">Jouw SaaS Platform</span>
                        </h1>
                        <p class="mt-3 text-base text-indigo-100 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Ontdek de kracht van onze oplossingen voor jouw bedrijf. Efficiënt, schaalbaar en betrouwbaar.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start space-y-3 sm:space-y-0 sm:space-x-4">
                            <div class="rounded-md shadow">
                                <a href="#pricing" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 md:py-4 md:text-lg md:px-10">
                                    Bekijk prijzen
                                </a>
                            </div>
                            @auth
                                <div class="rounded-md shadow">
                                    <a href="{{ route('dashboard') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-800 hover:bg-indigo-900 md:py-4 md:text-lg md:px-10">
                                        Dashboard
                                    </a>
                                </div>
                            @else
                                <div class="rounded-md shadow">
                                    <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-800 hover:bg-indigo-900 md:py-4 md:text-lg md:px-10">
                                        Login
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="Dashboard preview">
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Mogelijkheden</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Alles wat je nodig hebt
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Ontdek waarom onze klanten voor onze service kiezen.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Snelle implementatie</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Binnen enkele minuten aan de slag met onze intuïtieve interface.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Veilig en betrouwbaar</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Maximale beveiliging en 99.9% uptime garantie.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Schaalbaar</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Groei met je behoeften mee, van startup tot enterprise.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="py-12 bg-gray-50">
        <livewire:plans.show-plans />
    </div>

    <!-- Login/Register Section -->
    {{--@guest
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-md mx-auto">
                    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                        <div class="text-center mb-6">
                            <h2 class="text-2xl font-bold text-gray-900">
                                Account
                            </h2>
                            <p class="mt-2 text-sm text-gray-600">
                                Login of registreer om toegang te krijgen tot je persoonlijke dashboard
                            </p>
                        </div>
                        <div class="mt-6 grid grid-cols-2 gap-3">
                            <div>
                                <a href="{{ route('login') }}" class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <span>Login</span>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('register') }}" class="w-full inline-flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                    <span>Registreren</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest--}}

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8 xl:col-span-1">
                    <div class="flex items-center">
                        <svg class="h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="ml-2 text-white font-semibold text-xl">YourSaaS</span>
                    </div>
                    <p class="text-gray-300 text-base">
                        Maak je bedrijf efficiënter met onze SaaS-oplossingen.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Oplossingen
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Project management
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Automatisering
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Rapportages
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Ondersteuning
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Documentatie
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Handleidingen
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        FAQ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Bedrijf
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Legal
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Privacybeleid
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Algemene voorwaarden
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 text-center">
                    &copy; 2025 Jouw SaaS Platform. Alle rechten voorbehouden.
                </p>
            </div>
        </div>
    </footer>
</div>
