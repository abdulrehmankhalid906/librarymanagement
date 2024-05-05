<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard - SB Admin</title>
        <link href="{{ asset('dashboard/css/simple-datatable.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('dashboard/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('dashboard/js/font-awesome.min.js') }}"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('inc.header')

        <div id="layoutSidenav">
            @include('inc.sidebar')

            <div id="layoutSidenav_content">
                <main>
                   @yield('content')
                </main>

                @include('inc.footer')
            </div>
        </div>
        <script src="{{ asset('dashboard/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
        <script src="{{ asset('dashboard/js/chart.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('dashboard/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('dashboard/js/simple-datatable.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/datatables-simple-demo.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
           $(document).ready(function(){
                $('#logout-btn').click(function(){
                    $('#logout-from').submit();
                });
            });
        </script>
    </body>
</html>
