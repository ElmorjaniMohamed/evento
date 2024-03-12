<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Event;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;



class TicketController extends Controller
{
    public function downloadTicket($reservationId)
    {
        // Retrieve reservation details
        $reservation = Reservation::findOrFail($reservationId);
        $event = $reservation->event;

        // Generate QR code
        // $qrCodeText = "Reservation ID: {$reservation->id}\nEvent Title: {$event->title}\nEvent Date: {$event->date}\nEvent Location: {$event->location}";
        // $qrCodePath = storage_path("app/public/tickets/qr_code_{$reservation->id}.png");
        // QrCode::size(400)->format('png')->generate($qrCodeText, $qrCodePath);

        // Generate PDF content
        $pdfContent = view('tickets.pdf', compact('reservation', 'event'))->render();

        // Configure DomPDF options
        $options = new Options();
        // $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        // $options->set('isRemoteEnabled', true);


        // Instantiate DomPDF
        $dompdf = new Dompdf($options);

        // Load PDF content
        $dompdf->loadHtml($pdfContent);

        // Render PDF
        $dompdf->render();

        // Generate a unique filename for the PDF
        $filename = 'ticket_' . $reservation->id . '.pdf';

        // Save PDF to storage
        Storage::disk('public')->put('tickets/' . $filename, $dompdf->output());

        // Download PDF
        return response()->download(storage_path('app/public/tickets/' . $filename));
    }
}