@extends('layouts.app')

@section('title', 'Sara Velázquez')

@section('content')
    <div class="min-h-screen bg-[#F7F5F0] flex flex-col">
        <!-- Header -->
        <x-header />

        <!-- Hero Section -->
        <section class="flex flex-col md:flex-row w-full flex-1">
            <div class="w-full md:w-1/3 h-[420px] md:h-auto flex items-center justify-center bg-white">
                <img src="/images/hero-left.jpg" alt="Chica con bola de disco" class="object-cover w-full h-full grayscale"
                    style="max-height:420px;">
            </div>
            <div class="w-full md:w-2/3 h-[420px] md:h-auto flex items-center justify-center bg-[#F7F5F0]">
                <img src="/images/hero-right.jpg" alt="Mesa con flores y cámara" class="object-cover w-full h-full"
                    style="max-height:420px;">
            </div>
        </section>

        <section class="flex flex-col md:flex-row w-full flex-1">
            <div class="w-full md:w-2/3 h-[420px] flex items-end justify-end py-8">
                <h1 class="!text-[150px] !md:text-[100px] !font-light text-gray-900 tracking-tight">Sara<span
                        class="font-bold">Velázquez</span></h1>
            </div>
            <div class="w-full md:w-1/3 h-[420px] flex flex-col items-start py-8">
                <p class="text-2xl text-gray-700 mb-8 max-w-2xl">Convertimos la marca de tus sueños en realidad, a través de
                    branding y diseño.</p>
                <a href="#contacto"
                    class="px-6 py-3 border border-gray-700 rounded-lg flex items-center gap-2 hover:bg-gray-100 transition text-base font-medium">Contáctanos
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L21 10.5m0 0l-3.75 3.75M21 10.5H3" />
                        </svg></span></a>
            </div>
        </section>
        <!-- Servicios -->
        <section id="servicios" class="w-full flex flex-col md:flex-row bg-[#F7F5F0] px-4 md:px-0">
            <div class="md:w-1/2 flex flex-col justify-center">
                <img src="/images/flores-telas.png" alt="Servicios" class="object-cover w-full mx-auto md:mx-0">
            </div>
            <div class="md:w-1/2 flex flex-col justify-between bg-white p-8">
                <div class="flex flex-wrap">
                    <h2 class="text-xl text-gray-700 mb-2 w-full">Nuestros servicios</h2>
                    <a href="#"
                        class="text-gray-700 text-base flex justify-end items-center gap-1 hover:underline mb-4 w-full">Servicios
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L21 10.5m0 0l-3.75 3.75M21 10.5H3" />
                        </svg></a>
                </div>
                <div class="mt-4">
                    <div class="border-t py-6 flex justify-between items-center">
                        <span class="text-3xl">Branding</span>
                        <span class="text-gray-400">(01)</span>
                    </div>
                    <div class="border-t py-6 flex justify-between items-center">
                        <span class="text-3xl">Contenido</span>
                        <span class="text-gray-400">(02)</span>
                    </div>
                    <div class="border-t py-6 flex justify-between items-center">
                        <span class="text-3xl">Packaging</span>
                        <span class="text-gray-400">(03)</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section id="portfolio" class="w-full bg-white py-16 px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-semibold text-gray-800">Portfolio</h2>
                <a href="#" class="text-blue-600 flex items-center gap-1 hover:underline">
                    Ver proyectos
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 6.75L21 10.5m0 0l-3.75 3.75M21 10.5H3" />
                    </svg>
                </a>
            </div>

            <div x-data="portfolioSlider()" class="relative w-full flex items-center overflow-hidden h-[700px]">


                <div class="w-full h-full relative">
                    <div class="flex h-full transition-transform duration-0" :style="`transform: translateX(-${offset}px);`"
                        x-ref="track">

                        <template x-for="(slide, i) in visibleSlides" :key="i">
                            <div class="flex items-end justify-center"
                                :style="`min-width:${slideWidth}px;max-width:${slideWidth}px;height:700px;`">

                                <div class="relative h-full w-full bg-gray-100 overflow-hidden flex flex-col shadow-xl">
                                    <img :src="slide.img" :alt="slide.alt" class="object-cover h-full w-full">
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script>
            function portfolioSlider() {
                return {
                    slides: [
                        { img: '/images/portfolio1.jpg', alt: 'Talhamany', title: 'Talhamany' },
                        { img: '/images/portfolio2.jpg', alt: 'Gine Vegana', title: 'Gine Vegana' },
                        { img: '/images/portfolio3.jpg', alt: 'Brinitt', title: 'Brinitt' },
                        { img: '/images/portfolio4.jpg', alt: 'Baby Essentials', title: 'Baby Essentials' },
                    ],
                    slideWidth: 500,
                    offset: 0,
                    animationFrame: null,
                    speed: 1.2,
                    isPlaying: true,

                    get visibleSlides() {
                        // Triple duplicación para bucle perfecto
                        return [...this.slides, ...this.slides, ...this.slides];
                    },

                    moveAuto() {
                        const totalWidth = this.slides.length * this.slideWidth;

                        this.offset += this.speed;

                        // Lógica de bucle perfecto (seamless loop)
                        if (this.offset >= totalWidth) {
                            this.offset -= totalWidth;
                        }

                        if (this.isPlaying) {
                            this.animationFrame = requestAnimationFrame(this.moveAuto.bind(this));
                        }
                    },

                    startAuto() {
                        if (!this.isPlaying) {
                            this.isPlaying = true;
                            this.moveAuto();
                        }
                    },

                    pauseAuto() {
                        if (this.animationFrame) {
                            cancelAnimationFrame(this.animationFrame);
                        }
                        this.isPlaying = false;
                        this.animationFrame = null;
                    },

                    togglePlayPause() {
                        if (this.isPlaying) {
                            this.pauseAuto();
                        } else {
                            this.startAuto();
                        }
                    },

                    init() {
                        // 1. Iniciar movimiento inmediatamente
                        this.moveAuto();

                        // 2. AÑADIR LA LÓGICA DE HOVER
                        // 'mouseenter' pausa el slider
                        this.$el.addEventListener('mouseenter', () => {
                            this.pauseAuto();
                        });

                        // 'mouseleave' reanuda el slider
                        this.$el.addEventListener('mouseleave', () => {
                            this.startAuto();
                        });
                    }
                }
            }

            document.addEventListener('alpine:init', () => {
                Alpine.data('portfolioSlider', portfolioSlider);
            });
        </script>

        <!-- Para creativos -->
        <section class="w-full bg-[#F7F5F0] py-20 flex flex-col items-center">
            <h2 class="!text-6xl mb-4">Para creativos</h2>
            <p class="text-gray-700 mb-6 text-center max-w-xl">Una sección creada para diseñadores, fotógrafos,
                ilustradores, creadores de contenido o freelancers creativos.</p>
            <a href="#"
                class="mb-10 px-6 py-3 border border-gray-700 rounded-lg hover:bg-gray-100 transition text-base font-medium">Ver
                más</a>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl">
                <img src="/images/mockup1.jpg" alt="Mockup Bundle" class="rounded-lg object-cover w-full h-64">
                <img src="/images/mockup2.jpg" alt="Cliente Ideal" class="rounded-lg object-cover w-full h-64">
                <img src="/images/mockup3.jpg" alt="Mockup Bundle 2" class="rounded-lg object-cover w-full h-64">
            </div>
        </section>

        <!-- Frase de impacto -->
        <section class="w-full bg-[#E6E8C3] py-20 flex flex-col items-center">
            <h2 class="text-5xl mb-6 text-center">Somos quienes crean marcas diferentes,<br>con alma y
                estrategia.</h2>
            <a href="#contacto"
                class="px-6 py-3 border border-gray-700 rounded-lg hover:bg-gray-100 transition text-base font-medium">Contáctanos
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 inline">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 6.75L21 10.5m0 0l-3.75 3.75M21 10.5H3" />
                    </svg></span></a>
        </section>

        <!-- Proceso de branding -->
        <section class="w-full bg-white py-16 px-4">
            <h2 class="text-lg text-gray-700 mb-8">Branding</h2>
            <div class="mb-8">
                <span class="block text-2xl text-gray-600">Así es nuestro<br><span class="font-bold">proceso de
                        branding:</span></span>
            </div>
            <div class="space-y-2">
                <details open class="bg-[#F7F5F0] p-6 border-b">
                    <summary class="text-2xl cursor-pointer">Conociendo tu marca</summary>
                    <div class="flex flex-col md:flex-row gap-6 mt-4">
                        <img src="/images/sara1.jpg" alt="Sara Velazquez" class="w-40 h-40 object-cover rounded-lg">
                        <div>
                            <span class="font-bold">Briefs, videollamada, bienvenida...</span>
                            <p class="text-gray-700 mt-2">Nos contactas, te enviamos información de este servicio y nos
                                reunimos en una videollamada para conocerte a ti y a tu proyecto. También deberás responder
                                algunos briefs.</p>
                        </div>
                    </div>
                </details>
                <details class="bg-[#F7F5F0] p-6 border-b">
                    <summary class="text-2xl cursor-pointer">Estrategia y concepto</summary>
                </details>
                <details class="bg-[#F7F5F0] p-6 border-b">
                    <summary class="text-2xl cursor-pointer">Identidad visual</summary>
                </details>
                <details class="bg-[#F7F5F0] p-6 border-b">
                    <summary class="text-2xl cursor-pointer">Diseños complementarios</summary>
                </details>
                <details class="bg-[#F7F5F0] p-6">
                    <summary class="text-2xl cursor-pointer">Lista para brillar</summary>
                </details>
            </div>
        </section>

        <section id="nosotras" class="w-full flex flex-col md:flex-row bg-white py-20 px-4 md:px-0">
            <div class="md:w-1/2 flex items-center justify-center">
                <img src="/images/sara2.jpg" alt="Sara Velazquez" class="object-cover w-full max-w-md rounded-lg">
            </div>
            <div class="md:w-1/2 flex flex-col justify-center px-8">
                <h2 class="text-5xl mb-6">Liderado por Sara Velazquez</h2>
                <p class="text-gray-700 mb-8">Soy Sara, hace 5 años empecé con Sara Velázquez y nunca imaginé que iba a
                    llegar
                    a ser lo que es hoy. El diseño es una profesión que me apasiona, crear me da vida, esa vida que también
                    quiero darle a tu marca. ¿Trabajamos juntos?</p>
                <a href="#nosotras"
                    class="inline-flex items-center justify-center px-6 py-3 bg-[#E6E8C3] text-gray-900 rounded transition font-medium border border-transparent hover:bg-[#d6d8b3]">Sobre
                    nosotras <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 6.75L21 10.5m0 0l-3.75 3.75M21 10.5H3" />
                    </svg></a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="w-full bg-[#F7F5F0] py-16 px-4 mt-10">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-start">
                    <img src="/images/logo-footer.png" alt="Sara Velázquez Logo" class="mb-2">
                    <span class="text-lg font-light text-gray-800">Sara Velázquez</span>
                </div>
                <div class="flex flex-col gap-2">
                    <a href="#servicios" class="hover:underline">Servicios</a>
                    <a href="#tienda" class="hover:underline">Tienda</a>
                    <a href="#nosotras" class="hover:underline">Nosotras</a>
                    <a href="#contacto" class="hover:underline">Contacto</a>
                    <a href="#portfolio" class="hover:underline">Portfolio</a>
                </div>
                <div class="flex flex-col gap-2">
                    <a href="#" class="hover:underline">Términos & Condiciones</a>
                    <a href="#" class="hover:underline">Política de Privacidad</a>
                    <a href="#" class="hover:underline">Política de Cookies</a>
                    <a href="#" class="hover:underline">Mi cuenta</a>
                    <a href="#" class="hover:underline">365 Días de Ideas</a>
                </div>
                <div>
                    <form class="mb-4">
                        <label for="newsletter" class="block text-gray-700 mb-2">Suscríbete a nuestra newsletter:</label>
                        <input type="email" id="newsletter" name="newsletter" placeholder="Email *"
                            class="w-full px-4 py-2 border border-gray-300 rounded mb-2">
                        <button type="submit"
                            class="w-full px-4 py-2 border border-gray-700 rounded hover:bg-gray-100 transition">Suscribirme</button>
                    </form>
                    <div>
                        <span class="font-bold">Síguenos</span>
                        <div class="flex gap-4 mt-2">
                            <a href="#" class="hover:underline">Instagram</a>
                            <a href="#" class="hover:underline">Facebook</a>
                            <a href="#" class="hover:underline">TikTok</a>
                            <a href="#" class="hover:underline">Youtube</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-gray-500 mt-8">© Sara Velázquez</div>
        </footer>
    </div>
@endsection
