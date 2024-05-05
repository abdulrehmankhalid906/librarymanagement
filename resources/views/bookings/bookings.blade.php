@extends('layouts.app')
@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4">Bookings</h3>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>Bookings Listing
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Book Name</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Opertion</th>
                    </tr>
                </thead>

                {{-- {{ dump($bookings) }} --}}

                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <th>{{ $booking->id }}</th>
                            <th>{{ $booking->user->name }}</th>
                            <th>{{ $booking->book->name }}</th>
                            <th>{{ $booking->booking_date }}</th>
                            <th>{{ $booking->booking_status === 1 ? 'Booked' : 'Pending' }}</th>
                            <th>
                                <a href="#" class="btn btn-primary btn-sm">Manage</a>
                            </th>
                            {{-- <th>{{ $booking->created_at->format('m-d-Y') }}</th> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
