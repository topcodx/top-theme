<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfyOm Theme</title>
    <link href="{{ mix('css/third-party.css') }}" rel="stylesheet">
    @if(session()->get('theme_mode', 'light') === 'light')
        <link href="{{ mix('css/plugins.css') }}" rel="stylesheet">
        <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    @else
        <link href="{{ mix('css/plugins.dark.css') }}" rel="stylesheet">
        <link href="{{ mix('css/style.dark.css') }}" rel="stylesheet">
    @endif
    @livewireStyles
</head>
<body>

<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid">
        @include('layouts.sidebar')
        <div class="wrapper d-flex flex-column flex-row-fluid">
            <div class='container-fluid d-flex align-items-stretch justify-content-between px-0'>
                @include('layouts.header')
            </div>
            <div class='content d-flex flex-column flex-column-fluid pt-7'>
                @yield('header_toolbar')
                <div class='d-flex flex-column-fluid'>
                    @yield('content')
                </div>
            </div>
            <div class='container-fluid'>
                @include('layouts.footer')
            </div>
        </div>
    </div>
</div>

@livewireScripts
<script>
    let sweetAlertIcon = "{{ asset('images/remove.png') }}"
</script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/plugins.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
@yield('page_js')
</body>
</html>
