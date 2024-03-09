<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where('status', 'Pending')->get();
        return view('organizer.reservations.index', compact('reservations'));
    }
    public function reserve(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);
        $userId = auth()->id();

        $existingReservation = Reservation::where('user_id', $userId)
            ->where('event_id', $eventId)
            ->first();

        if ($existingReservation) {
            return redirect()->back()->with('message', 'You have already reserved this event.');
        }

        if ($event->type_reservation === 'automatic') {
            Reservation::create([
                'user_id' => $userId,
                'event_id' => $eventId,
                'status' => 'Confirmed',
            ]);

            return redirect()->back()->with('success', 'Event reserved successfully.');
        } else {
            Reservation::create([
                'user_id' => $userId,
                'event_id' => $eventId,
                'status' => 'Pending',
            ]);

            return redirect()->back()->with('message', 'Reservation is pending for approval.');
        }
    }


    /**
     * Confirm a reservation.
     */
    public function confirm($reservationId)
    {
        $reservation = Reservation::findOrFail($reservationId);
        $reservation->status = 'Confirmed';
        $reservation->save();

        return redirect()->back()->with('success', 'Reservation confirmed successfully.');
    }

    /**
     * Cancel a reservation.
     */
    public function cancel($reservationId)
    {
        $reservation = Reservation::findOrFail($reservationId);
        $reservation->status = 'Cancelled';
        $reservation->save();

        return redirect()->back()->with('success', 'Reservation cancelled successfully.');
    }

}