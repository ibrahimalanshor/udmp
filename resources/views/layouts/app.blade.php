<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.app.head')

        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">
                @include('includes.app.nav')

                @include('includes.app.sidebar')

                <div class="content-wrapper">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">@yield('title')</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item active">
                                            Dashboard
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="content pb-3">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </section>
                </div>

                @include('includes.app.footer')

                <aside class="control-sidebar control-sidebar-dark"></aside>
            </div>

            @include('includes.app.script')
            @stack('script')
        </body>
    </head>
</html>
