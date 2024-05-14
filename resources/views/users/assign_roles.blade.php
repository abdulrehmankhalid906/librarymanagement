@extends('layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="m-0">Mange Permissions</h4>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Role : {{ $roles->name }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-assign-permissions', $roles->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                @foreach ($permissions as $permission)
                                    <div class="col-md-2">
                                        <label class="form-label">{{ $permission->name }}</label>
                                        <input type="checkbox" class="form-control" name="permission[]" value="{{ $permission->name}}">
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-lg-3 mt-3">
                                    <div class="d-grid">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

