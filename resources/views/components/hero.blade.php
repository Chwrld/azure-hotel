{{-- Hero Component --}}
<section class="relative h-[70vh] min-h-[500px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero-hotel.jpg') }}')">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/95 to-primary/70"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold text-primary-foreground mb-6 animate-fade-in">
            Welcome to Azure Grand Hotel
        </h1>
        <p class="text-lg md:text-xl text-primary-foreground/90 mb-8 max-w-2xl mx-auto">
            Experience luxury and comfort in the heart of the city. Book your perfect stay today.
        </p>
        <a href="#rooms" class="inline-flex items-center justify-center rounded-md text-lg px-8 py-6 bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-lg">
            Explore Our Rooms
        </a>
    </div>
</section>
