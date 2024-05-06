@extends('layouts.app')
@section('content')
<div class="container-fluid px-4">
    <h3 class="mt-4">Books</h3>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>Add Book
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Book Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $books->name }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Author Name</label>
                            <input type="text" class="form-control" name="author" value="{{ $books->author }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pages</label>
                            <input type="number" class="form-control" name="pages" value="{{ $books->pages }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
