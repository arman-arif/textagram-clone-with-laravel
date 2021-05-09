<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@isset($pageTitle) {{ $pageTitle }} - @endisset {{ config('app.name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
    @yield('css')
    @livewireStyles
</head>
<body>
    <div class="container-fluid p- vh-100">
        @include('partials.header')

        <div class="row">

            <div class="col-md-3 h-100">
                @include('partials.sidebar')
            </div>

            <div class="col-md-9">
                @yield('content')
            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('js')
    @livewireScripts
</body>
</html>
