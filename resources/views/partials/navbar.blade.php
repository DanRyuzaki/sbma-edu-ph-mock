<!-- ============ NAVBAR (anchor links — one long scrolling page) ============ -->
<nav class="bg-[#0F1B33] sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between gap-6">

    <a href="#hero" class="flex items-center gap-3 shrink-0">
      <img src="https://sbma.edu.ph/assets/images/logo-192x192.png" alt="SBMA logo" class="w-9 h-9 rounded-full">
      <span class="leading-tight">
        <span class="block text-white font-sans font-semibold text-sm">St. Bernadette</span>
        <span class="block text-amber-400 font-sans font-semibold text-xs tracking-wide">MONTESSORI ACADEMY</span>
      </span>
    </a>

    <div class="hidden lg:flex items-center gap-6 text-slate-200 text-sm font-medium">
      <a href="#hero" class="font-sans hover:text-amber-400 transition">Home</a>
      <a href="#mission" class="font-sans hover:text-amber-400 transition">About</a>
      <a href="#admission-links" class="font-sans hover:text-amber-400 transition">Admissions</a>
      <a href="#campus-life" class="font-sans hover:text-amber-400 transition">Campus Life</a>
      <a href="#news-events" class="font-sans hover:text-amber-400 transition">News &amp; Events</a>
      <a href="#" class="font-sans hover:text-amber-400 transition" title="Coming soon">Contact</a>
    </div>

    <div class="hidden lg:flex items-center gap-3 shrink-0">
      <a href="https://forms.gle/eRmqmSohHzWHErkt6" target="_blank" class="bg-amber-500 hover:bg-amber-400 text-[#0F1B33] font-semibold text-sm px-4 py-2 rounded-md transition">Apply Now</a>
      <a href="/admin" class="flex items-center gap-1.5 border border-slate-600 hover:border-slate-400 text-slate-200 text-sm px-3 py-2 rounded-md transition">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
        Admin
      </a>
    </div>

    <button id="menuBtn" class="lg:hidden text-slate-200">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <div id="mobileMenu" class="hidden lg:hidden bg-[#0F1B33] border-t border-slate-700 px-6 py-3 space-y-1 text-slate-200 font-medium text-sm">
    <a href="#hero" class="font-sans block py-2">Home</a>
    <a href="#mission" class="font-sans block py-2">About</a>
    <a href="#admission-links" class="font-sans block py-2">Admissions</a>
    <a href="#campus-life" class="font-sans block py-2">Campus Life</a>
    <a href="#news-events" class="block py-2">News &amp; Events</a>
    <a href="#" class="block py-2">Contact</a>
    <a href="https://forms.gle/eRmqmSohHzWHErkt6" target="_blank" class="block py-2 mt-2 bg-amber-500 text-[#0F1B33] font-semibold rounded-md text-center">Apply Now</a>
    <a href="/admin" class="block py-2 border border-slate-600 rounded-md text-center mt-1">Admin</a>
  </div>
</nav>

<script>
  document.getElementById('menuBtn').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
  // Close the mobile menu automatically once a link is tapped, since
  // it's an anchor jump on the same page rather than a new page load.
  document.querySelectorAll('#mobileMenu a').forEach(link => {
    link.addEventListener('click', () => document.getElementById('mobileMenu').classList.add('hidden'));
  });
</script>