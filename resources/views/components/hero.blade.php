<section class="relative h-[70vh] min-h-[500px] flex items-center justify-center overflow-hidden">
    <div 
        class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero-hotel.jpg') }}');"
    >
        <div class="absolute inset-0 bg-gradient-to-r from-primary/95 to-primary/70"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 animate-fade-in">
            Welcome to Azure Grand Hotel
        </h1>
        <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
            Experience luxury and comfort in the heart of the city. Book your perfect stay today.
        </p>
        <button 
            onclick="scrollToRooms()"
            class="bg-secondary hover:bg-secondary/90 text-white font-semibold text-lg px-8 py-4 rounded-lg shadow-lg transition-all hover:shadow-xl hover:scale-105"
        >
            Explore Our Rooms
        </button>
    </div>
</section>
