@extends('layouts.app')
@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4">Books</h3>
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
                            <th>{{ $book->created_at->format('m-d-Y') }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
