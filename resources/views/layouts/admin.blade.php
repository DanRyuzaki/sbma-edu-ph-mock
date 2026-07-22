@extends('layouts.app')

@section('navbar')
@endsection

@section('footer')
@endsection

@section('content')
<div class="flex min-h-screen bg-slate-50 overflow-hidden">
  @include('partials.admin-sidebar', ['activePage' => View::yieldContent('active_page')])

  <main class="flex-1 overflow-y-auto px-8 py-7">
    <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-1">Informations</p>
    <h1 class="font-serif text-slate-900 text-3xl font-bold mb-6">@yield('page_title')</h1>

    @yield('page_actions')
    @yield('page_content')
  </main>
</div>
@endsection
