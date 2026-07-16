@extends('layouts.app')

@section('title', 'Administrator Login | St. Bernadette Montessori Academy')

{{-- The login screen is a standalone full-bleed page, so it overrides the
     shared navbar/footer with empty sections instead of including them. --}}
@section('navbar')
@endsection

@section('content')

  {{-- ============ ADMIN LOGIN ============ --}}
  <section id="admin-login" class="relative min-h-screen flex items-center justify-center px-4 py-10 overflow-hidden">

    {{-- Blurred backdrop reusing a hero photo, darkened to match the site's navy palette --}}
    <div class="absolute inset-0">
      <img src="{{ asset('images/hero/hero-1.jpg') }}" class="w-full h-full object-cover blur-md scale-110">
      <div class="absolute inset-0 bg-[#0F1B33]/80"></div>
    </div>

    {{-- Login card --}}
    <div class="relative w-full max-w-md bg-white rounded-2xl shadow-2xl overflow-hidden">

      {{-- Card header --}}
      <div class="bg-[#0F1B33] px-7 py-6 flex items-center justify-between">
        <div class="flex items-center gap-3">
          <img src="https://sbma.edu.ph/assets/images/logo-192x192.png" alt="SBMA logo" class="w-10 h-10 rounded-full shrink-0">
          <span class="leading-tight">
            <span class="block text-white font-serif font-bold text-base">St. Bernadette Montessori Academy</span>
            <span class="block text-amber-400 font-sans font-semibold text-[11px] tracking-widest uppercase">Administrator Portal</span>
          </span>
        </div>
        <a href="/" aria-label="Close" class="text-slate-400 hover:text-white transition shrink-0">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </a>
      </div>

      {{-- Card body --}}
      <div class="px-7 py-8">
        <h1 class="font-serif text-slate-900 text-2xl font-bold mb-1">Administrator Login</h1>
        <p class="text-slate-500 text-sm mb-7">Restricted access. Authorized personnel only.</p>

        @if ($errors->any())
          <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            {{ $errors->first() }}
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
          @csrf

          {{-- Username --}}
          <div>
            <label for="username" class="block text-slate-700 text-xs font-semibold tracking-wide uppercase mb-2">Username</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
              </span>
              <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username') }}"
                placeholder="Enter your username"
                autocomplete="username"
                required
                autofocus
                class="w-full pl-10 pr-4 py-3 rounded-lg border border-amber-400 ring-1 ring-amber-400/40 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 transition"
              >
            </div>
          </div>

          {{-- Password --}}
          <div>
            <label for="password" class="block text-slate-700 text-xs font-semibold tracking-wide uppercase mb-2">Password</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </span>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                autocomplete="current-password"
                required
                class="w-full pl-10 pr-11 py-3 rounded-lg border border-slate-200 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400 transition"
              >
              <button type="button" id="togglePassword" aria-label="Show password" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 transition">
                <svg id="eyeIcon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
              </button>
            </div>
          </div>

          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 text-slate-500">
              <input type="checkbox" name="remember" class="rounded border-slate-300 text-amber-500 focus:ring-amber-400">
              Remember me
            </label>
            <a href="#" class="text-[#0F1B33] font-medium hover:text-amber-500 transition">Forgot password?</a>
          </div>

          <button type="submit" class="w-full bg-[#0F1B33] hover:bg-[#182A4D] text-white font-semibold text-sm py-3.5 rounded-lg transition">
            Sign In to Dashboard
          </button>
        </form>

        <hr class="my-6 border-slate-100">

        <p class="text-center text-slate-400 text-xs">
          For account issues, contact
          <a href="mailto:support@sbma.edu.ph" class="text-amber-500 hover:text-amber-600 font-medium">support@sbma.edu.ph</a>
        </p>
      </div>
    </div>

    {{-- Floating help button --}}
    <button type="button" aria-label="Help" class="fixed bottom-6 right-6 w-11 h-11 rounded-full bg-white shadow-lg flex items-center justify-center text-slate-500 hover:text-[#0F1B33] transition">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
    </button>
  </section>

@endsection

@section('footer')
@endsection

@push('scripts')
<script>
  // ---- Toggle password visibility ----
  const passwordInput = document.getElementById('password');
  const toggleBtn = document.getElementById('togglePassword');
  const eyeIcon = document.getElementById('eyeIcon');

  toggleBtn.addEventListener('click', () => {
    const isHidden = passwordInput.type === 'password';
    passwordInput.type = isHidden ? 'text' : 'password';
    toggleBtn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');

    // Swap to a "slashed eye" icon while the password is visible.
    eyeIcon.innerHTML = isHidden
      ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18M10.584 10.587a2 2 0 002.828 2.83M9.363 5.365A9.466 9.466 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.02 10.02 0 01-2.293 3.95M6.228 6.228A10.014 10.014 0 002.458 12c1.274 4.057 5.064 7 9.542 7a9.47 9.47 0 004.635-1.192"/>'
      : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
  });
</script>
@endpush