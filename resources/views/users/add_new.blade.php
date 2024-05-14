@extends('layouts.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4">Create User</h4>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0">
                            <div class="card-body">
                                <form action="{{ route('users.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Roles</label>
                                        <select class="form-select" name="role">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                {{-- When we use => <option value="{{ $role->id }}">{{ $role->name }}</option> --}}
                                                {{-- There is no role named `1` for guard `web`. --}}
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</main>
@endsection

