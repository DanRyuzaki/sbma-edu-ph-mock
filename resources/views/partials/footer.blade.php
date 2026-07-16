{{-- ============ FOOTER (shared across every page) — also serves as "Contact" ============ --}}
<footer id="contact" class="bg-[#0F1B33] text-slate-300 pt-16">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-4 gap-10 pb-12">

    {{-- Column 1: Logo + address --}}
    <div>
      <img src="https://sbma.edu.ph/assets/images/logo-192x192.png" alt="SBMA logo" class="w-10 h-10 rounded-full mb-4">
      <p class="text-white font-serif font-bold text-lg leading-snug mb-3">St. Bernadette Montessori Academy</p>
      <p class="text-slate-400 text-sm leading-relaxed">
        Isabel Avenue, Kapitan Pepe,<br>Cabanatuan City, Nueva Ecija
      </p>
    </div>

    {{-- Column 2: Quick Links --}}
    <div>
      <p class="text-amber-400 text-xs font-semibold tracking-widest uppercase mb-4">Quick Links</p>
      <ul class="space-y-2.5 text-sm">
        <li><a href="#" class="hover:text-amber-400 transition">Our History</a></li>
        <li><a href="#mission" class="hover:text-amber-400 transition">Mission &amp; Vision</a></li>
        <li><a href="#admission-links" class="hover:text-amber-400 transition">Admission</a></li>
        <li><a href="#campus-life" class="hover:text-amber-400 transition">Campus Life</a></li>
      </ul>
    </div>

    {{-- Column 3: Contact --}}
    <div>
      <p class="text-amber-400 text-xs font-semibold tracking-widest uppercase mb-4">Contact</p>
      <ul class="space-y-2.5 text-sm">
        <li><a href="tel:+0444634436" class="hover:text-amber-400 transition">(044) 463-4436</a></li>
        <li><a href="mailto:sbmacabanatuan@gmail.com" class="hover:text-amber-400 transition break-all">sbmacabanatuan@gmail.com</a></li>
        <li><a href="http://fb.com/1sbma" target="_blank" class="hover:text-amber-400 transition">facebook.com/1sbma</a></li>
      </ul>
    </div>

    {{-- Column 4: Map --}}
    <div>
      <div class="relative rounded-xl overflow-hidden border border-white/10">
        <span class="absolute top-2 left-2 z-10 bg-white text-slate-700 text-xs font-medium px-2.5 py-1 rounded-md shadow flex items-center gap-1">
          Maps
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
          </svg>
        </span>
        <iframe
          src="https://maps.google.com/maps?q=Isabel+Avenue+Kapitan+Pepe+Cabanatuan+City+Nueva+Ecija&output=embed"
          class="w-full h-40"
          style="border:0;"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="SBMA campus location map">
        </iframe>
      </div>
    </div>

  </div>

  {{-- Bottom bar --}}
  <div class="border-t border-white/10">
    <div class="max-w-6xl mx-auto px-6 py-5 text-center text-xs text-slate-400">
      &copy; {{ date('Y') }} St. Bernadette Montessori Academy &middot; ICT Department
    </div>
  </div>
</footer>