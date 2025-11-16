{{-- Contact Component --}}
<section id="contact" class="py-20 px-4 bg-gradient-to-br from-muted/30 to-background">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Get In Touch</h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Have questions? Our team is here to help make your stay perfect
            </p>
        </div>

        @php
            $contactInfo = [
                ['icon' => 'map-pin', 'title' => 'Address', 'details' => '123 Luxury Avenue, Downtown District, Metro City'],
                ['icon' => 'phone', 'title' => 'Phone', 'details' => '+63 917 123 4567'],
                ['icon' => 'mail', 'title' => 'Email', 'details' => 'reservations@azuregrand.com'],
                ['icon' => 'clock', 'title' => 'Check-in / Check-out', 'details' => 'Check-in: 2:00 PM | Check-out: 12:00 PM'],
            ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @foreach($contactInfo as $info)
                <div class="text-center hover:shadow-lg transition-shadow bg-card border border-border rounded-lg">
                    <div class="p-6 space-y-4">
                        <div class="w-12 h-12 mx-auto rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="{{ $info['icon'] }}" class="w-6 h-6 text-primary"></i>
                        </div>
                        <h3 class="font-semibold text-lg">{{ $info['title'] }}</h3>
                        <p class="text-sm text-muted-foreground">{{ $info['details'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="overflow-hidden bg-card border border-border rounded-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.4858449845547!2d121.01705!3d14.5547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDMzJzE2LjkiTiAxMjHCsDAxJzAxLjQiRQ!5e0!3m2!1sen!2sph!4v1234567890"
                width="100%"
                height="400"
                style="border: 0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Hotel Location"
            ></iframe>
        </div>
    </div>
</section>
