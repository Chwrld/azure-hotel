<!-- Booking Modal -->
<div id="bookingModal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-2xl max-w-[500px] w-full max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="sticky top-0 bg-white border-b border-border p-6 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold" id="modalTitle">Book Your Stay</h2>
                <p class="text-sm text-muted-foreground" id="modalDescription">Complete your reservation</p>
            </div>
            <button onclick="closeBookingModal()" class="text-muted-foreground hover:text-foreground">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Content -->
        <div class="p-6">
            <!-- Step 1: Details Form -->
            <form id="detailsForm" class="space-y-6">
                <input type="hidden" id="selectedRoomId" name="room_id">
                
                <!-- Date Selection -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="text-sm font-medium">Check-in Date</label>
                        <input 
                            type="date" 
                            id="checkInDate" 
                            name="check_in"
                            class="w-full px-3 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium">Check-out Date</label>
                        <input 
                            type="date" 
                            id="checkOutDate" 
                            name="check_out"
                            class="w-full px-3 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                            required
                        />
                    </div>
                </div>

                <!-- Guest Information -->
                <div class="space-y-2">
                    <label for="guestName" class="text-sm font-medium">Full Name</label>
                    <input 
                        type="text" 
                        id="guestName" 
                        name="guest_name"
                        placeholder="Juan Dela Cruz"
                        class="w-full px-3 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                        required
                    />
                </div>

                <div class="space-y-2">
                    <label for="guestEmail" class="text-sm font-medium">Email</label>
                    <input 
                        type="email" 
                        id="guestEmail" 
                        name="guest_email"
                        placeholder="juan@example.com"
                        class="w-full px-3 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                        required
                    />
                </div>

                <div class="space-y-2">
                    <label for="guestPhone" class="text-sm font-medium">Phone Number</label>
                    <input 
                        type="tel" 
                        id="guestPhone" 
                        name="guest_phone"
                        placeholder="+63 912 345 6789"
                        class="w-full px-3 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                        required
                    />
                </div>

                <!-- Booking Summary -->
                <div id="bookingSummary" class="hidden bg-muted p-4 rounded-lg space-y-2">
                    <div class="flex justify-between text-sm">
                        <span>Room Rate:</span>
                        <span id="roomRate">₱0</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span>Number of Nights:</span>
                        <span id="numNights">0</span>
                    </div>
                    <div class="flex justify-between font-bold text-lg border-t border-border pt-2">
                        <span>Total Amount:</span>
                        <span class="text-primary" id="totalAmount">₱0</span>
                    </div>
                </div>

                <button 
                    type="submit"
                    class="w-full bg-secondary hover:bg-secondary/90 text-white font-semibold py-3 rounded-lg shadow-md transition-all hover:shadow-lg"
                >
                    Continue to Payment
                </button>
            </form>

            <!-- Step 2: Payment Form -->
            <form id="paymentForm" class="hidden space-y-6">
                <!-- Summary -->
                <div class="bg-muted p-4 rounded-lg space-y-2">
                    <h3 class="font-semibold">Booking Summary</h3>
                    <div class="text-sm space-y-1" id="paymentSummary"></div>
                </div>

                <!-- GCash Payment -->
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="gcashNumber" class="text-sm font-medium">GCash Number</label>
                        <input 
                            type="tel" 
                            id="gcashNumber" 
                            name="gcash_number"
                            placeholder="+63 912 345 6789"
                            class="w-full px-3 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                            required
                        />
                        <p class="text-xs text-muted-foreground">
                            Enter your GCash mobile number to complete the payment
                        </p>
                    </div>

                    <div class="bg-accent/10 border border-accent/20 p-4 rounded-lg">
                        <p class="text-sm text-muted-foreground">
                            You will receive a GCash payment request for <span class="font-bold text-foreground" id="paymentAmount">₱0</span> to complete your booking.
                        </p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <button 
                        type="button"
                        onclick="backToDetails()"
                        class="w-full border border-border hover:bg-muted text-foreground font-semibold py-3 rounded-lg transition-colors"
                    >
                        Back
                    </button>
                    <button 
                        type="submit"
                        class="w-full bg-secondary hover:bg-secondary/90 text-white font-semibold py-3 rounded-lg shadow-md transition-all hover:shadow-lg"
                    >
                        Confirm & Pay
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
