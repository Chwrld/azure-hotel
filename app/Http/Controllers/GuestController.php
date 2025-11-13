<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display the home page with all sections
     */
    public function index()
    {
        // Room data
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

        return view('pages.index-new', compact('rooms'));
    }

    /**
     * Handle booking submission
     */
    public function storeBooking(Request $request)
    {
        // Validate booking data
        $validated = $request->validate([
            'room_id' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'payment_method' => 'required|in:gcash,cash',
            'gcash_number' => 'required_if:payment_method,gcash',
            'cash_amount' => 'required_if:payment_method,cash|numeric|min:0',
        ]);

        // Here you would typically:
        // 1. Save the booking to database
        // 2. Send confirmation email
        // 3. Process payment (if applicable)

        // For now, just return success response
        return response()->json([
            'success' => true,
            'message' => 'Booking confirmed successfully!',
            'booking_id' => uniqid('BOOK-')
        ]);
    }
}
