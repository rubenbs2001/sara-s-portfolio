<header class="w-full flex items-center justify-between px-10 py-6 bg-[#F7F5F0]">
    <div class="text-lg font-light tracking-tight text-gray-800">Sara Velázquez</div>
    <!-- Botón hamburguesa (solo visible en móvil/tablet) -->
    <button id="menu-toggle" class="md:hidden block text-gray-700 focus:outline-none w-6 h-6" aria-label="Abrir menú">
        <!-- Lucide menu icon -->
        <x-lucide-menu />
    </button>
    <!-- Menú de navegación -->
    <nav id="main-menu"
        class="flex items-center gap-8 text-gray-700 text-base md:flex hidden absolute top-full left-0 w-full bg-[#F7F5F0] md:static md:w-auto md:bg-transparent md:relative md:items-center md:gap-8 z-50">
        <a href="#servicios" class="hover:underline block px-6 py-3 md:px-0 md:py-0">Servicios</a>
        <a href="#tienda" class="hover:underline block px-6 py-3 md:px-0 md:py-0">Tienda</a>
        <a href="#nosotras" class="hover:underline block px-6 py-3 md:px-0 md:py-0">Nosotras</a>
        <a href="#contacto" class="hover:underline block px-6 py-3 md:px-0 md:py-0">Contacto</a>
        <a href="#portfolio" class="hover:underline block px-6 py-3 md:px-0 md:py-0">Portfolio</a>
        <a href="#contacto"
            class="ml-4 px-4 py-2 border border-gray-700 rounded-full flex items-center gap-2 hover:bg-gray-100 transition text-sm font-medium block md:inline-flex">Trabajemos
            juntos <span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.25 6.75L21 10.5m0 0l-3.75 3.75M21 10.5H3" />
                </svg></span></a>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu-toggle');
            const mainMenu = document.getElementById('main-menu');
            menuToggle.addEventListener('click', function () {
                mainMenu.classList.toggle('hidden');
            });
        });
    </script>
</header>
