<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.partials.main-styles')
    @yield('styles')
    <title>@yield('title','residence')</title>
</head>
<body>

{{-- header --}}
@include('layouts.partials.header')
{{-- end header --}}

{{-- content --}}
@yield('content')
{{-- end content --}}

{{-- footer --}}
@include('layouts.partials.footer')
{{-- end footer --}}

@include('layouts.partials.main-scripts')

@yield('scripts')
</body>
</html>
