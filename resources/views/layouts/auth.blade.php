<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>AdminLTE 3 | Log in (v2)</title>

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />

        <link
            rel="stylesheet"
            href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}"
        />

        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}" />
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            @yield('content')
        </div>

        <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
