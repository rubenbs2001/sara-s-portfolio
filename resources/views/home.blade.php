@extends('layouts.app')

@section('title', 'Sara Velázquez | Interior Designer')

@section('content')
    <div class="min-h-screen bg-gray-50 flex flex-col items-center">
        <header class="text-center mt-12 mb-8">
            <img src="/logo.png" alt="Sara Velázquez Logo" class="mx-auto mb-6 w-32 h-32 object-contain">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Sara Velázquezz</h1>
            <h2 class="text-2xl text-gray-700 mb-6">Interior Designer & Creative Visionary</h2>
            <p class="max-w-xl mx-auto text-gray-600">Transforming spaces into unique experiences. Discover my portfolio and
                let’s create something beautiful together.</p>
        </header>

        <!-- Galería de Diseños Destacados -->
        <section id="portfolio" class="w-full max-w-6xl px-4 py-8">
            <h3 class="text-3xl font-semibold text-center text-gray-800 mb-8">Featured Designs</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Proyecto 1 -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <img src="/images/design1.jpg" alt="Scandinavian Serenity: A Fusion of Light and Nature"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Scandinavian Serenity: A Fusion of Light and Nature</h4>
                        <p class="text-gray-600 text-sm">A space designed to maximize natural light and promote well-being.
                            This project balances minimalist Nordic aesthetics with the warmth of light wood and organic
                            textiles. The neutral color palette with botanical accents creates a functionally calming
                            atmosphere, perfect for relaxation and family enjoyment.
                        </p>
                    </div>
                </div>
                <!-- Proyecto 2 -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <img src="/images/design2.jpg" alt="City Essence: Sophisticated Industrial Character"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">City Essence: Sophisticated Industrial Character</h4>
                        <p class="text-gray-600 text-sm">A loft design that celebrates the structure and history of the
                            materials. The combination of exposed brick, dark metal, and contemporary furniture with clean
                            lines creates a dynamic contrast. The atmosphere is bold and contemporary, with strategic
                            lighting design that highlights the texture and artistry of the space.</p>
                    </div>
                </div>
                <!-- Proyecto 3 -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <img src="/images/design3.jpg" alt="Functional Elegance: The Kitchen as a Design Space"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-2">Functional Elegance: The Kitchen as a Design Space</h4>
                        <p class="text-gray-600 text-sm">A design that prioritizes efficiency and visual clarity. The design
                            focuses on matte finishes, monochromatic tones, and handleless integrated storage for a seamless
                            look. The central island not only optimizes workflow but also becomes the social hub of the
                            home, merging high aesthetics with everyday practicality.
                        </p>
                    </div>
                </div>
                <!-- Puedes duplicar este bloque para más proyectos -->
            </div>
        </section>

        <!-- Sección de Contacto -->
        <section id="contact" class="w-full max-w-2xl px-4 py-12 text-center">
            <h3 class="text-2xl font-semibold mb-4">Let’s work together</h3>
            <p class="text-gray-600 mb-6">Interested in collaborating or want to know more? Get in touch!</p>
            <a href="mailto:contact@saradesign.com"
                class="inline-block px-8 py-3 bg-gray-900 text-white rounded-full shadow hover:bg-gray-700 transition">Contact
                Me</a>
        </section>
    </div>
@endsection
