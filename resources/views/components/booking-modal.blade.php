{{-- Booking Modal Component --}}
<div id="bookingModal" class="hidden fixed inset-0 z-50 bg-black/80" onclick="closeBookingModalOnBackdrop(event)">
    <div class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-lg bg-white rounded-lg shadow-lg p-6 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <div class="flex items-center justify-between mb-6">
            <h2 id="modalTitle" class="text-2xl font-bold">Book Your Stay</h2>
            <button onclick="closeBookingModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <p id="modalDescription" class="text-gray-600 dark:text-gray-400 mb-6">
            Complete your reservation
        </p>

        {{-- Step 1: Guest Details Form --}}
        <form id="detailsForm" class="space-y-6">
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium">Check-in Date</label>
                    <input 
                        type="date" 
                        id="checkInDate" 
                        name="check_in"
                        min="{{ date('Y-m-d') }}"
                        required 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary"
                    />
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium">Check-out Date</label>
                    <input 
                        type="date" 
                        id="checkOutDate" 
                        name="check_out"
                        min="{{ date('Y-m-d') }}"
                        required 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary"
                    />
                </div>
            </div>

            <div class="space-y-2">
                <label for="guestName" class="text-sm font-medium">Full Name</label>
                <input 
                    type="text" 
                    id="guestName" 
                    name="name"
                    placeholder="Juan Dela Cruz" 
                    required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary"
                />
            </div>

            <div class="space-y-2">
                <label for="guestEmail" class="text-sm font-medium">Email</label>
                <input 
                    type="email" 
                    id="guestEmail" 
                    name="email"
                    placeholder="juan@example.com" 
                    required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary"
                />
            </div>

            <div class="space-y-2">
                <label for="guestPhone" class="text-sm font-medium">Phone Number</label>
                <input 
                    type="tel" 
                    id="guestPhone" 
                    name="phone"
                    placeholder="+63 912 345 6789" 
                    required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary"
                />
            </div>

            <div id="summaryBox" class="hidden p-4 rounded-lg space-y-2" style="background-color: #3d4e5fff;">
                <div class="flex justify-between text-sm text-white">
                    <span>Room Rate:</span>
                    <span id="roomRate">₱0</span>
                </div>
                <div class="flex justify-between text-sm text-white">
                    <span>Number of Nights:</span>
                    <span id="numNights">0</span>
                </div>
                <div class="flex justify-between font-bold text-lg border-t border-white-400 pt-2 text-white">
                    <span>Total Amount:</span>
                    <span id="totalAmount">₱0</span>
                </div>
            </div>

            <button 
                type="submit" 
                class="w-full inline-flex items-center justify-center rounded-md text-lg px-4 py-3 bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg"
            >
                Continue to Payment
            </button>
        </form>

        {{-- Step 2: Payment Form --}}
        <div id="paymentForm" class="hidden space-y-6">
            <div class="p-4 rounded-lg space-y-2" style="background-color: #3d4e5fff;">
                <h3 class="font-semibold text-white">Booking Summary</h3>
                <div class="text-sm space-y-1 text-white">
                    <p><span class="text-gray-300">Room:</span> <span id="summaryRoom"></span></p>
                    <p><span class="text-gray-300">Guest:</span> <span id="summaryGuest"></span></p>
                    <p><span class="text-gray-300">Check-in:</span> <span id="summaryCheckIn"></span></p>
                    <p><span class="text-gray-300">Check-out:</span> <span id="summaryCheckOut"></span></p>
                    <p class="font-bold pt-2 border-t border-white">
                        <span class="text-gray-300">Total:</span> <span id="summaryTotal"></span>
                    </p>
                </div>
            </div>

            <div class="space-y-3">
                <label class="text-sm font-medium">Payment Method</label>
                <div class="space-y-2">
                    <label class="flex items-center space-x-3 border rounded-lg p-3 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <input type="radio" name="payment_method" value="gcash" checked class="w-4 h-4 text-primary" onchange="togglePaymentInput()">
                        <div class="flex-1">
                            <div class="font-medium">GCash</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Pay via GCash mobile payment</div>
                        </div>
                    </label>
                    <label class="flex items-center space-x-3 border rounded-lg p-3 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <input type="radio" name="payment_method" value="cash" class="w-4 h-4 text-primary" onchange="togglePaymentInput()">
                        <div class="flex-1">
                            <div class="font-medium">Cash</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Pay with cash upon check-in</div>
                        </div>
                    </label>
                </div>
            </div>

            {{-- GCash Input --}}
            <div id="gcashInput" class="space-y-4">
                {{-- QR Code Section --}}
                <div class="bg-white border-2 border-blue-200 rounded-lg p-6 text-center">
                    <h3 class="text-lg font-semibold mb-3 text-gray-800">Scan GCash QR Code</h3>
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/gcash-qr.png') }}" alt="GCash QR Code" class="w-64 h-64 border-4 border-gray-200 rounded-lg shadow-lg">
                    </div>
                    <div class="bg-blue-50 p-3 rounded-md mb-3">
                        <p class="text-sm font-medium text-gray-700">Scan this QR code using your GCash app</p>
                        <p class="text-xs text-gray-600 mt-1">Enter the total amount shown above</p>
                    </div>
                </div>

                {{-- GCash Number Input --}}
                <div class="space-y-2">
                    <label for="gcashNumber" class="text-sm font-medium">Your GCash Number (for confirmation)</label>
                    <input 
                        type="tel" 
                        id="gcashNumber" 
                        name="gcash_number"
                        placeholder="+63 912 345 6789" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary"
                    />
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                        Enter your GCash number used for payment verification
                    </p>
                </div>
            </div>

            {{-- Cash Input --}}
            <div id="cashInput" class="hidden space-y-2">
                <label for="cashAmount" class="text-sm font-medium">Cash Amount</label>
                <input 
                    type="number" 
                    id="cashAmount" 
                    name="cash_amount"
                    placeholder="₱0" 
                    min="0"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary"
                />
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    Enter the amount you will pay (minimum: <span id="minCashAmount">₱0</span>)
                </p>
                <p id="changeAmount" class="hidden text-xs text-green-600 dark:text-green-400">
                    Change: ₱<span id="changeValue">0</span>
                </p>
            </div>

            <div id="paymentNote" class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-4 rounded-lg">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    <span id="paymentNoteText">You will receive a GCash payment request to complete your booking.</span>
                </p>
            </div>

            <div class="flex gap-3">
                <button 
                    type="button" 
                    onclick="backToDetails()"
                    class="w-full inline-flex items-center justify-center rounded-md px-4 py-3 border border-gray-400 bg-gray-100 hover:bg-gray-200 transition-colors"
                >
                    Back
                </button>
                <button 
                    type="button"
                    onclick="confirmPayment()" 
                    class="w-full inline-flex items-center justify-center rounded-md text-lg px-4 py-3 bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg"
                >
                    Confirm & Pay
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
let currentRoom = null;
let totalPrice = 0;

function openBookingModal(room) {
    currentRoom = room;
    document.getElementById('bookingModal').classList.remove('hidden');
    document.getElementById('modalDescription').textContent = `Complete your reservation for ${room.name}`;
    document.getElementById('roomRate').textContent = `₱${room.price.toLocaleString()}`;
}

function closeBookingModal() {
    document.getElementById('bookingModal').classList.add('hidden');
    resetForm();
}

function closeBookingModalOnBackdrop(event) {
    if (event.target.id === 'bookingModal') {
        closeBookingModal();
    }
}

function resetForm() {
    document.getElementById('detailsForm').reset();
    document.getElementById('detailsForm').classList.remove('hidden');
    document.getElementById('paymentForm').classList.add('hidden');
    document.getElementById('modalTitle').textContent = 'Book Your Stay';
}

function calculateNights() {
    const checkIn = document.getElementById('checkInDate').value;
    const checkOut = document.getElementById('checkOutDate').value;
    
    if (!checkIn || !checkOut) return 0;
    
    const start = new Date(checkIn);
    const end = new Date(checkOut);
    const diffTime = Math.abs(end - start);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    
    return diffDays;
}

function updateSummary() {
    const nights = calculateNights();
    if (nights > 0 && currentRoom) {
        totalPrice = currentRoom.price * nights;
        document.getElementById('numNights').textContent = nights;
        document.getElementById('totalAmount').textContent = `₱${totalPrice.toLocaleString()}`;
        document.getElementById('summaryBox').classList.remove('hidden');
    } else {
        document.getElementById('summaryBox').classList.add('hidden');
    }
}

document.getElementById('checkInDate')?.addEventListener('change', updateSummary);
document.getElementById('checkOutDate')?.addEventListener('change', updateSummary);

document.getElementById('detailsForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const checkIn = document.getElementById('checkInDate').value;
    const checkOut = document.getElementById('checkOutDate').value;
    const name = document.getElementById('guestName').value;
    const email = document.getElementById('guestEmail').value;
    const phone = document.getElementById('guestPhone').value;
    
    if (!checkIn || !checkOut || !name || !email || !phone) {
        alert('Please fill in all required fields');
        return;
    }
    
    // Update summary
    document.getElementById('summaryRoom').textContent = currentRoom.name;
    document.getElementById('summaryGuest').textContent = name;
    document.getElementById('summaryCheckIn').textContent = new Date(checkIn).toLocaleDateString();
    document.getElementById('summaryCheckOut').textContent = new Date(checkOut).toLocaleDateString();
    document.getElementById('summaryTotal').textContent = `₱${totalPrice.toLocaleString()}`;
    document.getElementById('minCashAmount').textContent = `₱${totalPrice.toLocaleString()}`;
    document.getElementById('cashAmount').min = totalPrice;
    
    // Switch to payment step
    document.getElementById('detailsForm').classList.add('hidden');
    document.getElementById('paymentForm').classList.remove('hidden');
    document.getElementById('modalTitle').textContent = 'Payment Details';
    document.getElementById('modalDescription').textContent = 'Enter your GCash payment information';
});

function backToDetails() {
    document.getElementById('paymentForm').classList.add('hidden');
    document.getElementById('detailsForm').classList.remove('hidden');
    document.getElementById('modalTitle').textContent = 'Book Your Stay';
    document.getElementById('modalDescription').textContent = `Complete your reservation for ${currentRoom.name}`;
}

function togglePaymentInput() {
    const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;
    const gcashInput = document.getElementById('gcashInput');
    const cashInput = document.getElementById('cashInput');
    const paymentNoteText = document.getElementById('paymentNoteText');
    
    if (paymentMethod === 'gcash') {
        gcashInput.classList.remove('hidden');
        cashInput.classList.add('hidden');
        paymentNoteText.textContent = `You will receive a GCash payment request for ₱${totalPrice.toLocaleString()} to complete your booking.`;
    } else {
        gcashInput.classList.add('hidden');
        cashInput.classList.remove('hidden');
        paymentNoteText.textContent = `Please prepare ₱${totalPrice.toLocaleString()} in cash for payment upon check-in.`;
    }
}

document.getElementById('cashAmount')?.addEventListener('input', function() {
    const cashAmount = parseFloat(this.value);
    const changeAmountDiv = document.getElementById('changeAmount');
    
    if (cashAmount > totalPrice) {
        const change = cashAmount - totalPrice;
        document.getElementById('changeValue').textContent = change.toLocaleString();
        changeAmountDiv.classList.remove('hidden');
    } else {
        changeAmountDiv.classList.add('hidden');
    }
});

function confirmPayment() {
    const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;
    
    if (paymentMethod === 'gcash') {
        const gcashNumber = document.getElementById('gcashNumber').value;
        if (!gcashNumber) {
            alert('Please enter your GCash number');
            return;
        }
    } else {
        const cashAmount = parseFloat(document.getElementById('cashAmount').value);
        if (!cashAmount || cashAmount < totalPrice) {
            alert(`Cash amount must be at least ₱${totalPrice.toLocaleString()}`);
            return;
        }
    }
    
    // Submit booking
    const message = paymentMethod === 'gcash' 
        ? 'Booking confirmed! You will receive a GCash payment request shortly.'
        : `Booking confirmed! Please prepare ₱${parseFloat(document.getElementById('cashAmount').value).toLocaleString()} for payment upon check-in.`;
    
    alert(message);
    closeBookingModal();
}
</script>
@endpush
