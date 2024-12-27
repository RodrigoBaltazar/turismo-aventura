<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="relative min-h-screen flex flex-col bg-fundo">
            <!-- <nav class="flex-shrink-0 bg-primary-600"> -->
            <nav class="flex-shrink-0 bg-primary-950">
                <div class="max-w-7xl mx-auto px-8">
                    <div class="relative flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center px-2">
                        <div class="flex-shrink-0">
                        <img class="h-8 w-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjfV8s62JzoTwVwN_siMf17lHJWALTJv7a4Q&s" alt="Workflow">
                        </div>
                    </div>

                    <!-- Menu para Desktop -->
                    <div class="hidden md:flex space-x-8">
                        <a href="#inicio" class="text-white hover:text-primary-300">Início</a>
                        <a href="#faq" class="text-white hover:text-primary-300">Perguntas Frequentes</a>
                        <a href="#contato" class="text-white hover:text-primary-300">Contato</a>
                    </div>

                    <!-- Botão para Mobile -->
                    <div class="md:hidden flex items-center">
                        <button id="dropdown-button" class="text-white hover:text-primary-300 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        </button>
                    </div>
                    </div>
                </div>

                <!-- Dropdown para Mobile -->
                <div id="dropdown-menu" class="hidden md:hidden bg-primary-800 text-white">
                    <a href="#inicio" class="block px-4 py-2 hover:bg-primary-700">Início</a>
                    <a href="#faq" class="block px-4 py-2 hover:bg-primary-700">Perguntas Frequentes</a>
                    <a href="#contato" class="block px-4 py-2 hover:bg-primary-700">Contato</a>
                </div>
                </nav>

                <script>
                // Script para mostrar/ocultar o dropdown no mobile
                const dropdownButton = document.getElementById("dropdown-button");
                const dropdownMenu = document.getElementById("dropdown-menu");

                dropdownButton.addEventListener("click", () => {
                    dropdownMenu.classList.toggle("hidden");
                });
</script>


            @yield('body')
        </div>
        <footer class="bg-primary-800 text-gray-300 py-8">
            <div class="container mx-auto flex flex-wrap justify-around">
                <!-- Sobre Nós -->
                <div class="w-full sm:w-1/3 px-4 mb-6">
                <h4 class="text-lg font-semibold mb-4">Sobre Nós</h4>
                <p class="text-sm">
                    Somos uma agência dedicada a oferecer soluções criativas e eficazes para o seu negócio.
                </p>
                </div>
                <!-- Links Úteis -->
                <div class="w-full sm:w-1/3 px-4 mb-6">
                <h4 class="text-lg font-semibold mb-4">Links Úteis</h4>
                <ul class="space-y-2">
                    <li><a href="#servicos" class="hover:text-primary-400 transition">Serviços</a></li>
                    <li><a href="#sobre" class="hover:text-primary-400 transition">Sobre</a></li>
                    <li><a href="#contato" class="hover:text-primary-400 transition">Contato</a></li>
                    <li><a href="#blog" class="hover:text-primary-400 transition">Blog</a></li>
                </ul>
                </div>
                <!-- Contato -->
                <div class="w-full sm:w-1/3 px-4 mb-6">
                <h4 class="text-lg font-semibold mb-4">Contato</h4>
                <p class="text-sm">Email: contato@agencia.com</p>
                <p class="text-sm">Telefone: (11) 1234-5678</p>
                <p class="text-sm">Endereço: Rua Exemplo, 123, São Paulo</p>
                </div>
            </div>
            <div class="border-t border-primary-700 mt-6 pt-4 text-center">
                <p class="text-sm">&copy; 2024 Agência Criativa. Todos os direitos reservados.</p>
            </div>
            </footer>

        
        @livewireScripts
    </body>
</html>
