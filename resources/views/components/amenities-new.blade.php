{{-- Amenities Component --}}
<section id="amenities" class="py-20 px-4 bg-background">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">World-Class Amenities</h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Discover the exceptional facilities and services designed to make your stay unforgettable
            </p>
        </div>

        @php
            $amenities = [
                ['icon' => 'wifi', 'title' => 'Free High-Speed WiFi', 'description' => 'Stay connected with complimentary high-speed internet throughout the hotel'],
                ['icon' => 'utensils', 'title' => 'Fine Dining Restaurant', 'description' => 'Enjoy exquisite cuisine prepared by our award-winning chefs'],
                ['icon' => 'dumbbell', 'title' => 'Fitness Center', 'description' => 'State-of-the-art gym equipment available 24/7 for your convenience'],
                ['icon' => 'waves', 'title' => 'Rooftop Pool', 'description' => 'Relax in our stunning infinity pool with panoramic city views'],
                ['icon' => 'coffee', 'title' => 'Coffee Lounge', 'description' => 'Premium coffee and refreshments available all day'],
                ['icon' => 'car', 'title' => 'Valet Parking', 'description' => 'Complimentary valet parking service for all our guests'],
                ['icon' => 'sparkles', 'title' => 'Luxury Spa', 'description' => 'Rejuvenate with our full-service spa and wellness treatments'],
                ['icon' => 'shield', 'title' => '24/7 Security', 'description' => 'Your safety is our priority with round-the-clock security'],
            ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($amenities as $amenity)
                <div class="group hover:shadow-lg transition-all duration-300 hover:-translate-y-1 rounded-lg border border-gray-300" style="background-color: #D9D9D9;">
                    <div class="p-6 space-y-4">
                        <div class="w-12 h-12 rounded-lg bg-white/50 flex items-center justify-center group-hover:bg-white/70 transition-colors">
                            <i data-lucide="{{ $amenity['icon'] }}" class="w-6 h-6 text-gray-700"></i>
                        </div>
                        <h3 class="font-semibold text-lg text-gray-900">{{ $amenity['title'] }}</h3>
                        <p class="text-sm text-gray-700 leading-relaxed">{{ $amenity['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
