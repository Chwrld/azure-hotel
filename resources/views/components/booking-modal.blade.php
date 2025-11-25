{{-- Available Rooms Modal --}}
<div id="availableRoomsModal" class="hidden fixed inset-0 z-50 bg-black/80" onclick="closeAvailableRoomsModalOnBackdrop(event)">
    <div class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl bg-white rounded-lg shadow-lg p-6 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 id="availableRoomsTitle" class="text-2xl font-bold">Available Rooms</h2>
                <p class="text-sm text-gray-600 mt-1">Select a room to proceed with booking</p>
            </div>
            <button onclick="closeAvailableRoomsModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div id="availableRoomsList" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{-- Available rooms will be populated here --}}
        </div>
    </div>
</div>

{{-- Confirmation Ticket Modal --}}
<div id="confirmationModal" class="hidden fixed inset-0 z-50 bg-black/80" onclick="closeConfirmationModalOnBackdrop(event)">
    <div class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden max-h-[95vh] overflow-y-auto" onclick="event.stopPropagation()">
        {{-- Ticket Content --}}
        <div id="ticketContent" class="bg-gradient-to-br from-blue-50 to-white p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Left Column --}}
                <div>
                    {{-- Hotel Header --}}
                    <div class="text-center mb-6 pb-6 border-b-2 border-dashed border-blue-300">
                        <h1 class="text-3xl font-bold text-blue-900 mb-2">Azure Grand Hotel</h1>
                        <p class="text-sm text-gray-600">Booking Confirmation</p>
                        <div class="mt-3 inline-block bg-green-100 text-green-800 px-4 py-1 rounded-full text-sm font-semibold">
                            ✓ CONFIRMED
                        </div>
                    </div>

                    {{-- Booking Reference --}}
                    <div class="bg-white rounded-lg p-4 mb-6 shadow-sm border border-blue-100">
                        <p class="text-xs text-gray-500 mb-1">Booking Reference</p>
                        <p id="ticketBookingId" class="text-2xl font-bold text-blue-900 tracking-wide">BOOK-XXXXXX</p>
                    </div>

                    {{-- Guest Details --}}
                    <div class="space-y-3 mb-6">
                        <h3 class="font-semibold text-gray-900 mb-3">Guest Information</h3>
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Guest Name:</span>
                            <span id="ticketGuestName" class="text-sm font-semibold text-gray-900 text-right">-</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Email:</span>
                            <span id="ticketGuestEmail" class="text-sm font-semibold text-gray-900 text-right">-</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Phone:</span>
                            <span id="ticketGuestPhone" class="text-sm font-semibold text-gray-900 text-right">-</span>
                        </div>
                    </div>

                    {{-- Room Details --}}
                    <div class="bg-blue-900 text-white rounded-lg p-4">
                        <p class="text-xs text-blue-200 mb-2">Room Details</p>
                        <p id="ticketRoomName" class="text-lg font-bold mb-1">-</p>
                        <p id="ticketRoomNumber" class="text-sm text-blue-200">-</p>
                    </div>
                </div>

                {{-- Right Column --}}
                <div>
                    {{-- Stay Details --}}
                    <div class="mb-6">
                        <h3 class="font-semibold text-gray-900 mb-3">Stay Period</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                                <p class="text-xs text-gray-500 mb-1">Check-in</p>
                                <p id="ticketCheckIn" class="text-sm font-bold text-gray-900">-</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                                <p class="text-xs text-gray-500 mb-1">Check-out</p>
                                <p id="ticketCheckOut" class="text-sm font-bold text-gray-900">-</p>
                            </div>
                        </div>
                    </div>

                    {{-- Payment Details --}}
                    <div class="bg-white rounded-lg p-4 mb-6 shadow-sm border border-blue-100">
                        <h3 class="font-semibold text-gray-900 mb-3">Payment Summary</h3>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">Nights:</span>
                            <span id="ticketNights" class="text-sm font-semibold text-gray-900">-</span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">Payment Method:</span>
                            <span id="ticketPaymentMethod" class="text-sm font-semibold text-gray-900">-</span>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-gray-200">
                            <span class="text-base font-bold text-gray-900">Total Amount:</span>
                            <span id="ticketTotalAmount" class="text-xl font-bold text-blue-900">-</span>
                        </div>
                    </div>

                    {{-- Payment Instructions --}}
                    <div id="ticketPaymentInstructions" class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-6">
                        <p class="text-xs font-semibold text-yellow-800 mb-2">📱 Payment Instructions:</p>
                        <p class="text-xs text-yellow-900" id="ticketInstructionText">-</p>
                    </div>

                    {{-- Footer --}}
                    <div class="text-center pt-6 border-t-2 border-dashed border-blue-300">
                        <p class="text-xs text-gray-500 mb-2">Please present this confirmation upon check-in</p>
                        <p class="text-xs text-gray-400">Thank you for choosing Azure Grand Hotel!</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="bg-gray-50 p-4 flex gap-3">
            <button 
                onclick="screenshotTicket()"
                class="flex-1 inline-flex items-center justify-center gap-2 rounded-md px-4 py-3 bg-blue-600 text-white hover:bg-blue-700 transition-colors font-medium"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Screenshot
            </button>
            <button 
                onclick="closeConfirmationModal()"
                class="flex-1 inline-flex items-center justify-center rounded-md px-4 py-3 border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 transition-colors font-medium"
            >
                Close
            </button>
        </div>
    </div>
</div>

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

// Available Rooms Modal Functions
function showAvailableRooms(roomType) {
    // Sample data - replace with actual available rooms from your database
    const availableRooms = {
        'Standard': [
            { id: 101, number: '101', floor: 1, view: 'City View', status: 'available' },
            { id: 102, number: '102', floor: 1, view: 'Garden View', status: 'available' },
            { id: 103, number: '103', floor: 1, view: 'City View', status: 'available' },
            { id: 201, number: '201', floor: 2, view: 'Pool View', status: 'available' },
        ],
        'Deluxe': [
            { id: 301, number: '301', floor: 3, view: 'Ocean View', status: 'available' },
            { id: 302, number: '302', floor: 3, view: 'Ocean View', status: 'available' },
            { id: 303, number: '303', floor: 3, view: 'City View', status: 'available' },
        ],
        'Suite': [
            { id: 401, number: '401', floor: 4, view: 'Panoramic Ocean View', status: 'available' },
            { id: 402, number: '402', floor: 4, view: 'Panoramic City View', status: 'available' },
        ]
    };

    const rooms = availableRooms[roomType.type] || [];
    
    document.getElementById('availableRoomsTitle').textContent = `Available ${roomType.type} Rooms`;
    
    const roomsList = document.getElementById('availableRoomsList');
    roomsList.innerHTML = '';
    
    if (rooms.length === 0) {
        roomsList.innerHTML = '<p class="text-center text-gray-500 col-span-2">No rooms available at the moment.</p>';
    } else {
        rooms.forEach(room => {
            const roomCard = `
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow cursor-pointer bg-white" onclick='selectRoom(${JSON.stringify(roomType)}, ${JSON.stringify(room)})'>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xl font-bold">Room ${room.number}</h3>
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">Available</span>
                    </div>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Floor ${room.floor}
                        </p>
                        <p class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            ${room.view}
                        </p>
                        <p class="text-lg font-bold text-blue-600 mt-3">₱${roomType.price.toLocaleString()} / night</p>
                    </div>
                </div>
            `;
            roomsList.innerHTML += roomCard;
        });
    }
    
    document.getElementById('availableRoomsModal').classList.remove('hidden');
}

function selectRoom(roomType, specificRoom) {
    // Combine room type info with specific room details
    const fullRoomInfo = {
        ...roomType,
        roomNumber: specificRoom.number,
        floor: specificRoom.floor,
        view: specificRoom.view,
        roomId: specificRoom.id
    };
    
    closeAvailableRoomsModal();
    openBookingModal(fullRoomInfo);
}

function closeAvailableRoomsModal() {
    document.getElementById('availableRoomsModal').classList.add('hidden');
}

function closeAvailableRoomsModalOnBackdrop(event) {
    if (event.target.id === 'availableRoomsModal') {
        closeAvailableRoomsModal();
    }
}

function openBookingModal(room) {
    currentRoom = room;
    document.getElementById('bookingModal').classList.remove('hidden');
    
    const roomDescription = room.roomNumber 
        ? `Complete your reservation for ${room.name} - Room ${room.roomNumber} (${room.view})`
        : `Complete your reservation for ${room.name}`;
    
    document.getElementById('modalDescription').textContent = roomDescription;
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
    
    // Generate booking ID
    const bookingId = 'BOOK-' + Math.random().toString(36).substr(2, 6).toUpperCase();
    
    // Get form data
    const checkIn = document.getElementById('checkInDate').value;
    const checkOut = document.getElementById('checkOutDate').value;
    const name = document.getElementById('guestName').value;
    const email = document.getElementById('guestEmail').value;
    const phone = document.getElementById('guestPhone').value;
    const nights = calculateNights();
    
    // Populate ticket
    document.getElementById('ticketBookingId').textContent = bookingId;
    document.getElementById('ticketGuestName').textContent = name;
    document.getElementById('ticketGuestEmail').textContent = email;
    document.getElementById('ticketGuestPhone').textContent = phone;
    document.getElementById('ticketRoomName').textContent = currentRoom.name;
    
    const roomNumberText = currentRoom.roomNumber 
        ? `Room ${currentRoom.roomNumber} • ${currentRoom.view}`
        : 'Room assignment upon check-in';
    document.getElementById('ticketRoomNumber').textContent = roomNumberText;
    
    document.getElementById('ticketCheckIn').textContent = new Date(checkIn).toLocaleDateString('en-US', { 
        month: 'short', day: 'numeric', year: 'numeric' 
    });
    document.getElementById('ticketCheckOut').textContent = new Date(checkOut).toLocaleDateString('en-US', { 
        month: 'short', day: 'numeric', year: 'numeric' 
    });
    document.getElementById('ticketNights').textContent = `${nights} night${nights > 1 ? 's' : ''}`;
    document.getElementById('ticketPaymentMethod').textContent = paymentMethod === 'gcash' ? 'GCash' : 'Cash';
    document.getElementById('ticketTotalAmount').textContent = `₱${totalPrice.toLocaleString()}`;
    
    // Payment instructions
    const instructionText = paymentMethod === 'gcash'
        ? `Please scan the QR code above and pay ₱${totalPrice.toLocaleString()} via GCash. Your booking will be confirmed once payment is received.`
        : `Please prepare ₱${totalPrice.toLocaleString()} in cash for payment upon check-in.`;
    document.getElementById('ticketInstructionText').textContent = instructionText;
    
    // Close booking modal and show confirmation
    closeBookingModal();
    showConfirmationModal();
}

function showConfirmationModal() {
    document.getElementById('confirmationModal').classList.remove('hidden');
}

function closeConfirmationModal() {
    document.getElementById('confirmationModal').classList.add('hidden');
}

function closeConfirmationModalOnBackdrop(event) {
    if (event.target.id === 'confirmationModal') {
        closeConfirmationModal();
    }
}

function screenshotTicket() {
    // Create instruction for user
    alert('📸 Screenshot Instructions:\n\n' +
          '1. This window will close\n' +
          '2. Take a screenshot of the ticket\n' +
          '   • Windows: Press Windows Key + Shift + S\n' +
          '   • Or use Snipping Tool\n' +
          '3. Save the screenshot for your records\n\n' +
          'Present this confirmation at check-in!');
    
    // Optional: Use html2canvas library if you want automatic screenshot
    // For now, we'll just keep the modal open for manual screenshot
}
</script>
@endpush
