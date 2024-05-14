@extends('layouts.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4">Edit Role</h4>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0">
                            <div class="card-body">
                                <form action="{{ route('users.update', $roles->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $roles->name }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $roles->email }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" value="{{ $roles->password }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Roles</label>
                                        <input type="text" class="form-control" name="roles[]" value="{{ $roles->roles }}" required>
                                    </div>

                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <input type="submit" class="btn btn-primary" value="Update">
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

