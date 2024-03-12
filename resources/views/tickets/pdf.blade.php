<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Ticket</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            padding: 20px;
        }
        .ticket {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            border-top: 6px solid #FF5A1F;
            border-bottom: 6px solid #FF5A1F;
            background-size: cover;
            display: flex;
            flex-wrap: nowrap;
        }
        .event-title {
            font-size: 24px;
            font-weight: bold;
            color: #15005D;
            margin-bottom: 10px;
            flex-basis: 100%;
        }
        .event-details {
            margin-bottom: 20px;
            font-size: 16px;
            color: #15005D;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            flex-basis: calc(50% - 10px);
        }
        .detail-item {
            margin-bottom: 10px;
        }
        .detail-item span {
            font-weight: bold;
            color: #FF5A1F;
        }
        .event-image {
            margin-top: 20px;
            text-align: center;
            flex-basis: calc(50% - 10px);
        }
        .event-image img {
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-top: 20px;
            flex-basis: 100%;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="event-title">Event: {{ $event->title }}</div>
        <div class="event-details">
            <div class="detail-item"><span>Date:</span> {{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</div>
            <div class="detail-item"><span>Time:</span> {{ \Carbon\Carbon::parse($event->date)->format('h:i A') }}</div>
            <div class="detail-item"><span>Location:</span> {{ $event->location }}</div>
            <div class="detail-item"><span>Price:</span> ${{ $event->price }}</div>
        </div>
        <!-- Event image -->
        <div class="event-image">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents('storage/events/'.$event->image)) }}" alt="Event Image">
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        Thank you for choosing our event. For inquiries, contact us at elmorjanimohamed@gmail.com.
    </div>

</body>
</html>
