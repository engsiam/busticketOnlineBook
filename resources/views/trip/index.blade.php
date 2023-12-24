<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Trip</title>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="">
        @csrf

        <label for="bus_id">Select Bus:</label>
        <select name="bus_id" id="bus_id">
            @foreach ($buses as $bus)
                <option value="{{ $bus->id }}">{{ $bus->name }}</option>
            @endforeach
        </select>

        <select name="seat_id" id="seat_id">
            @foreach ($seats as $seat)
                <option value="{{ $seat->id }}">{{ $seat->seat_number }}</option>
            @endforeach
        </select>

        <label for="departure_location_id">Select Departure Location:</label>
        <select name="departure_location_id" id="departure_location_id">
            @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <label for="arrival_location_id">Select Arrival Location:</label>
        <select name="arrival_location_id" id="arrival_location_id">
            @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Trip</button>
    </form>
</body>
</html>
