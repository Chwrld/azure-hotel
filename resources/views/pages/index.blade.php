@extends('layouts.app')

@section('title', 'Azure Grand Hotel - Luxury Accommodation')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    @include('components.hero')
    
    <!-- About Section -->
    @include('components.about')
    
    <!-- Amenities Section -->
    @include('components.amenities')
    
    <!-- Rooms Section -->
    <section id="rooms" class="py-20 px-4 bg-background">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Our Luxury Rooms</h2>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                    Choose from our selection of beautifully appointed rooms, each designed to provide the ultimate comfort and luxury.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($rooms as $room)
                    @include('components.room-card', ['room' => $room])
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    @include('components.contact')

    <!-- Booking Modal -->
    @include('components.booking-modal')
</div>
@endsection

@push('scripts')
<script>
    // Pass rooms data to JavaScript
    window.roomsData = @json($rooms);
</script>
@endpush
