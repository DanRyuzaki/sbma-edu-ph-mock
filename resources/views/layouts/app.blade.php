<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'St. Bernadette Montessori Academy')</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- Lets a specific page pull in extra <link>/<style> tags (e.g. a Google Font)
     without every other page having to load it too. --}}
@stack('styles')
</head>
<body class="bg-slate-50 font-sans">

  {{-- A page can override the shared navbar/footer by defining its own
       @section('navbar') / @section('footer') — otherwise the default
       shared partials are used, same as before. --}}
  @hasSection('navbar')
    @yield('navbar')
  @else
    @include('partials.navbar')
  @endif

  @yield('content')

  @hasSection('footer')
    @yield('footer')
  @else
    @include('partials.footer')
  @endif

  @stack('scripts')

</body>
</html>