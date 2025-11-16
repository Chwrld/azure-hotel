{{-- About Component --}}
<section id="about" class="py-20 px-4 bg-gradient-to-br from-background to-muted/30">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-4xl md:text-5xl font-bold text-foreground">
                    Welcome to Azure Grand Hotel
                </h2>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    Experience unparalleled luxury in the heart of the city. Since 2009, Azure Grand Hotel 
                    has been setting the standard for excellence in hospitality, combining timeless elegance 
                    with modern amenities.
                </p>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    Our commitment to exceptional service and attention to detail ensures that every guest 
                    enjoys a memorable stay. From our beautifully appointed rooms to our world-class dining 
                    and spa facilities, we offer everything you need for a perfect getaway.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-6">
                @php
                    $stats = [
                        ['icon' => 'building-2', 'label' => 'Luxury Rooms', 'value' => '150+'],
                        ['icon' => 'award', 'label' => 'Awards Won', 'value' => '25+'],
                        ['icon' => 'users', 'label' => 'Happy Guests', 'value' => '10K+'],
                        ['icon' => 'clock', 'label' => 'Years Experience', 'value' => '15+'],
                    ];
                @endphp
                @foreach($stats as $stat)
                    <div class="bg-card p-6 rounded-lg shadow-lg border border-border hover:shadow-xl transition-shadow">
                        <svg class="w-10 h-10 text-primary mb-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            @if($stat['icon'] === 'building-2')
                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/>
                            @elseif($stat['icon'] === 'award')
                                <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/>
                            @elseif($stat['icon'] === 'users')
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            @else
                                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                            @endif
                        </svg>
                        <div class="text-3xl font-bold text-foreground mb-2">{{ $stat['value'] }}</div>
                        <div class="text-sm text-muted-foreground">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
