<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function eventStatistics()
    {
        $totalEvents = Event::count();

        $totalAcceptedEvents = Event::where('status', 'Accepted')->count();

        $totalReservations = Reservation::count();

        $totalUsers = User::count();

        return view('dashboard', compact('totalEvents', 'totalAcceptedEvents', 'totalReservations', 'totalUsers'));
    }

    public function reservationStatistics()
    {

        $confirmedReservations = Reservation::where('status', 'Confirmed')->count();
        $pendingReservations = Reservation::where('status', 'Pending')->count();
        $cancelledReservations = Reservation::where('status', 'Cancelled')->count();

        $labels = ['Confirmed', 'Pending', 'Cancelled'];
        $data = [$confirmedReservations, $pendingReservations, $cancelledReservations];

        return view('statistics.reservations', compact('confirmedReservations', 'pendingReservations', 'cancelledReservations'));
    }

}