<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view events|filter events|search events|view details|reserve place|generate ticket')->only('show');
        $this->middleware('permission:create events|manage events|view own event stats|manage reservations')->only('store');
        $this->middleware('permission:validate events')->only('accept', 'reject');
    }
    public function show(Reservation $reservation)
    {
        if (!Auth::user()->can('view', $reservation)) {
            abort(403, 'Unauthorized action.');
        }

        return view('reservations.show', compact('reservation'));
    }

    public function store(ReservationRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['user_id'] = Auth::id();

        Reservation::create($validatedData);

        return redirect()->route('home')->with('success', 'Reservation created successfully.');
    }

    public function accept(Reservation $reservation)
    {
        if (!Auth::user()->can('accept', $reservation)) {
            abort(403, 'Unauthorized action.');
        }

        $reservation->update(['status' => 'Accepted']);

        return redirect()->route('home')->with('success', 'Reservation accepted successfully.');
    }

    public function reject(Reservation $reservation)
    {
        if (!Auth::user()->can('reject', $reservation)) {
            abort(403, 'Unauthorized action.');
        }

        $reservation->update(['status' => 'Rejected']);

        return redirect()->route('home')->with('success', 'Reservation rejected successfully.');
    }
}
