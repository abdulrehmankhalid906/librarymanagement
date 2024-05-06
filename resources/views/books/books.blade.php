@extends('layouts.app')
@section('content')

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="mt-4">Books</h3>
        <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm">Add Book</a>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>Books Listing
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Pages</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th>Operation</th>
                    </tr>
                </thead>

                {{-- {{ dump($books) }} --}}

                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th>{{ $book->id }}</th>
                            <th>{{ $book->name }}</th>
                            <th>{{ $book->author }}</th>
                            <th>{{ $book->pages }}</th>
                            <th>{{ $book->is_active === 0 ? 'Yes' : 'No' }}</th>
                            <th>{{ $book->created_at->diffForHumans(); }}</th>
                            <th>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('books.destroy', $book->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="BookBooking({{ $book->id }})">Book Now</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    function BookBooking(bookId)
    {

        console.log(bookId);
        $.ajax({
            url: "{{ route('booking.order') }}",
            type: 'POST',
            data: {
                book_id: bookId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response)
            {
                if(response)
                {
                    console.log('The Booking has been created');
                }
                console.log(response)

            },
        });
    }
</script>
@endsection
