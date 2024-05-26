@extends('layouts.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4">General Setting</h4>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0">
                            <div class="card-body">
                                <form action="{{ route('store.setting') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $theme->id ?? '' }}">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="form-label">App Name</label>
                                            <input type="text" class="form-control" id="app_name" name="app_name" value="{{ $theme->app_name ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="form-label">App Logo</label>
                                            <input type="file" class="form-control" id="app_img" name="app_img">
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="form-label">App Side Toggler</label>
                                            <input type="text" class="form-control" id="navbar_toggler" name="navbar_toggler" value="{{ $theme->navbar_toggler ?? '' }}" required>
                                        </div>
                                    </div>

                                    {{-- Step 2 --}}

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="form-label">Logged Toggler</label>
                                            <input type="text" class="form-control" id="logged_toggler" name="logged_toggler" value="{{ $theme->logged_toggler ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="form-label">Logged Message</label>
                                            <input type="text" class="form-control" id="loggin_message" name="loggin_message" value="{{ $theme->loggin_message ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="form-label">Menu Names</label>
                                            <input type="text" class="form-control" id="menu_name" name="menu_name[]" value="{{ implode(',', json_decode($theme->menu_name) ?? []) }}" required>
                                        </div>
                                    </div>

                                    {{-- Step 3 --}}
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <label class="form-label">Theme</label>
                                            <input type="color" class="form-control form-control-color" id="theme_front_color" name="theme_front_color" value="{{ $theme->theme_front_color ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-1">
                                            <label class="form-label">ThemeBg</label>
                                            <input type="color" class="form-control form-control-color" id="theme_background_color" name="theme_background_color" value="{{ $theme->theme_background_color ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-1">
                                            <label class="form-label">Footer</label>
                                            <input type="color" class="form-control form-control-color" id="footer_front_color" name="footer_front_color" value="{{ $theme->footer_front_color ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-1">
                                            <label class="form-label">FooterBg</label>
                                            <input type="color" class="form-control form-control-color" id="footer_background_color" name="footer_background_color" value="{{ $theme->footer_background_color ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="form-label">Footer</label>
                                            <input type="text" class="form-control" id="footer_title" name="footer_title" value="{{ $theme->footer_title ?? '' }}" required>
                                        </div>

                                        <div class="col-lg-2">
                                            <label class="form-label">Year</label>
                                            <input type="number" class="form-control" id="footer_year" name="footer_year" value="{{ $theme->footer_year ?? '' }}" required>
                                        </div>
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

