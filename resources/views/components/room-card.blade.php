{{-- Room Card Component --}}
@props(['room'])

<div class="overflow-hidden hover:shadow-2xl transition-all duration-300 border-border/50 bg-card border rounded-lg">
    <div class="relative h-64 overflow-hidden">
        <img 
            src="{{ asset($room['image']) }}" 
            alt="{{ $room['name'] }}"
            class="w-full h-full object-cover transition-transform duration-300 hover:scale-110"
        />
        <div class="absolute top-4 right-4 px-3 py-1 rounded-full text-sm font-semibold
            @if($room['type'] === 'Standard') bg-blue-500 text-white
            @elseif($room['type'] === 'Deluxe') bg-purple-500 text-white
            @elseif($room['type'] === 'Suite') bg-amber-500 text-white
            @else bg-gray-500 text-white
            @endif">
            {{ $room['type'] }}
        </div>
    </div>
    
    <div class="p-6">
        <h3 class="text-2xl font-bold mb-2">{{ $room['name'] }}</h3>
        <p class="flex items-center gap-2 text-base text-muted-foreground mb-4">
            <i data-lucide="users" class="h-4 w-4"></i>
            Up to {{ $room['capacity'] }} guests
        </p>
        
        <p class="text-muted-foreground mb-4">{{ $room['description'] }}</p>
        
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach(array_slice($room['amenities'], 0, 4) as $amenity)
                <span class="px-3 py-1 rounded-full text-sm font-medium text-gray-800" style="background-color: #C8D5E1;">
                    {{ $amenity }}
                </span>
            @endforeach
        </div>
        
        <div class="text-3xl font-bold text-primary mb-4">
            ₱{{ number_format($room['price']) }}
            <span class="text-base font-normal text-muted-foreground"> / night</span>
        </div>
        
        <button 
            onclick="showAvailableRooms({{ json_encode($room) }})"
            class="w-full inline-flex items-center justify-center rounded-md text-lg px-4 py-3 bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg"
        >
            Book Now
        </button>
    </div>
</div>
