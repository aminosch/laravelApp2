<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
<div class="flex min-h-screen bg-background">
    <!-- Linker helft: afbeelding met indigo overlay en schuine rand -->
    <div class="hidden lg:block w-1/2 relative overflow-hidden">
        <!-- Achtergrondafbeelding met overlay -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80');">
            <div class="absolute inset-0 bg-indigo-600/60"></div>
        </div>

        <!-- Schuine rand rechts -->
        <svg class="absolute right-0 inset-y-0 h-full w-24 text-white dark:text-neutral-800 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
        </svg>

        <!-- Content op de afbeelding -->
        <div class="absolute inset-0 flex flex-col justify-center px-12 text-white">
            <div class="mb-6">
                <svg class="h-12 w-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <h2 class="text-5xl font-extrabold mb-4">Welkom bij YourSaaS</h2>
            <p class="text-2xl text-indigo-100 mb-6">Log in op je account om toegang te krijgen tot je persoonlijke dashboard.</p>
            <div class="mt-4">
                <div class="flex space-x-4">
                    <div class="w-2 h-2 rounded-full bg-indigo-200"></div>
                    <div class="w-2 h-2 rounded-full bg-indigo-300"></div>
                    <div class="w-2 h-2 rounded-full bg-indigo-400"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rechter helft: login formulier -->
    <div class="flex w-full lg:w-1/2 items-center justify-center p-6 md:p-10 bg-white dark:bg-neutral-800">
        <div class="w-full max-w-md space-y-8">
            <div class="flex flex-col gap-6 mt-8">
                {{ $slot }}
            </div>

            <!-- Extra navigatie onderaan -->
            <div class="mt-10 pt-6 border-t border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-center space-x-4 text-sm">
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                        Hulp nodig?
                    </a>
                    <span class="text-gray-300 dark:text-gray-600">|</span>
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                        Privacybeleid
                    </a>
                    <span class="text-gray-300 dark:text-gray-600">|</span>
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                        Voorwaarden
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@fluxScripts
</body>
</html>
