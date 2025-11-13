<div class="bg-card overflow-hidden rounded-lg shadow-md border border-border/50 hover:shadow-2xl transition-all duration-300">
    <div class="relative h-64 overflow-hidden">
        <img 
            src="{{ $room->image ?? asset('images/rooms/' . Str::slug($room->name) . '.jpg') }}" 
            alt="{{ $room->name }}"
            class="w-full h-full object-cover transition-transform duration-300 hover:scale-110"
        />
        <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full text-sm font-semibold">
            {{ $room->type }}
        </div>
    </div>
    
    <div class="p-6">
        <h3 class="text-2xl font-bold mb-2">{{ $room->name }}</h3>
        <div class="flex items-center gap-2 text-base text-muted-foreground mb-4">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            Up to {{ $room->capacity }} guests
        </div>
        
        <p class="text-muted-foreground mb-4">{{ $room->description }}</p>
        
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach($room->amenities as $index => $amenity)
                @if($index < 4)
                <span class="bg-muted text-muted-foreground px-3 py-1 rounded-full text-sm">
                    {{ $amenity }}
                </span>
                @endif
            @endforeach
        </div>
        
        <div class="text-3xl font-bold text-primary mb-4">
            ₱{{ number_format($room->price) }}
            <span class="text-base font-normal text-muted-foreground"> / night</span>
        </div>
        
        <button 
            onclick="openBookingModal({{ $room->id }})"
            class="w-full bg-secondary hover:bg-secondary/90 text-white font-semibold py-3 rounded-lg shadow-md transition-all hover:shadow-lg hover:scale-105"
        >
            Book Now
        </button>
    </div>
</div>
