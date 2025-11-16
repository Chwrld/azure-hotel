@extends('layouts.app')

@section('title', 'Azure Grand Hotel - Book Your Luxury Stay')

@section('content')
<div class="min-h-screen">
    {{-- Hero Section --}}
    @include('components.hero')
    
    {{-- About Section --}}
    @include('components.about')
    
    {{-- Amenities Section --}}
    @include('components.amenities')
    
    {{-- Rooms Section --}}
    <section id="rooms" class="py-20 px-4 bg-background">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Our Luxury Rooms</h2>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                    Choose from our selection of beautifully appointed rooms, each designed to provide the ultimate comfort and luxury.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $rooms = [
                        [
                            'id' => '1',
                            'name' => 'Standard Room',
                            'type' => 'Standard',
                            'price' => 3500,
                            'capacity' => 2,
                            'image' => 'images/standard-room.jpg',
                            'amenities' => ['Free WiFi', 'TV', 'Air Conditioning', 'Work Desk'],
                            'description' => 'Comfortable room with modern amenities perfect for short stays.'
                        ],
                        [
                            'id' => '2',
                            'name' => 'Deluxe Room',
                            'type' => 'Deluxe',
                            'price' => 5500,
                            'capacity' => 3,
                            'image' => 'images/deluxe-room.jpg',
                            'amenities' => ['Free WiFi', 'TV', 'Air Conditioning', 'City View', 'Mini Bar', 'Room Service'],
                            'description' => 'Spacious room with premium furnishings and stunning city views.'
                        ],
                        [
                            'id' => '3',
                            'name' => 'Executive Suite',
                            'type' => 'Suite',
                            'price' => 8500,
                            'capacity' => 4,
                            'image' => 'images/suite-room.jpg',
                            'amenities' => ['Free WiFi', 'TV', 'Air Conditioning', 'Panoramic View', 'Living Area', 'Mini Bar', 'Room Service', 'Luxury Bath'],
                            'description' => 'Luxurious suite with separate living area and premium amenities.'
                        ]
                    ];
                @endphp
                
                @foreach($rooms as $room)
                    @include('components.room-card', ['room' => $room])
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    @include('components.contact')
</div>
@endsection

@push('scripts')
<script>
    // Smooth scroll to sections
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>
@endpush
