<aside class="sticky top-0 h-screen w-60 shrink-0 bg-[#0F1B33] text-slate-300 flex flex-col">
  <div class="flex items-center gap-2.5 px-5 py-5 border-b border-white/10">
    <img src="https://sbma.edu.ph/assets/images/logo-192x192.png" alt="SBMA" class="w-8 h-8 rounded-full bg-white object-contain shrink-0">
    <span class="text-white font-serif font-semibold text-sm">SBMA CMS</span>
  </div>

  <nav class="flex-1 px-3 py-4 space-y-1 text-sm">
    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-md hover:bg-white/5 hover:text-white transition">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
      Dashboard
    </a>

    <details @if(in_array($activePage, ['homepage', 'about', 'admissions', 'contacts'])) open @endif class="group">
      <summary class="list-none cursor-pointer flex items-center justify-between gap-2.5 px-3 py-2 rounded-md @if(in_array($activePage, ['homepage', 'about', 'admissions', 'contacts'])) bg-amber-400/10 text-amber-400 font-medium @else hover:bg-white/5 hover:text-white transition @endif">
        <span class="flex items-center gap-2.5">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Informations
        </span>
        <svg class="w-3.5 h-3.5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
      </summary>
      <div class="ml-9 mt-1 space-y-0.5">
        <a href="{{ route('admin.informations.homepage') }}" class="block px-3 py-1.5 rounded-md @if($activePage === 'homepage') bg-amber-400/10 text-amber-400 font-medium @else hover:bg-white/5 hover:text-white transition @endif">Homepage</a>
        <a href="{{ route('admin.informations.about') }}" class="block px-3 py-1.5 rounded-md @if($activePage === 'about') bg-amber-400/10 text-amber-400 font-medium @else hover:bg-white/5 hover:text-white transition @endif">About</a>
        <a href="{{ route('admin.informations.admissions') }}" class="block px-3 py-1.5 rounded-md @if($activePage === 'admissions') bg-amber-400/10 text-amber-400 font-medium @else hover:bg-white/5 hover:text-white transition @endif">Admissions</a>
        <a href="{{ route('admin.informations.contacts') }}" class="block px-3 py-1.5 rounded-md @if($activePage === 'contacts') bg-amber-400/10 text-amber-400 font-medium @else hover:bg-white/5 hover:text-white transition @endif">Contacts</a>
      </div>
    </details>

    <details class="group">
      <summary class="list-none cursor-pointer flex items-center justify-between gap-2.5 px-3 py-2 rounded-md hover:bg-white/5 hover:text-white transition">
        <span class="flex items-center gap-2.5">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M4 8h16M4 8a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2v-8a2 2 0 00-2-2M4 8V6a2 2 0 012-2h6l2 2h6a2 2 0 012 2v2"/></svg>
          Campus Life
        </span>
        <svg class="w-3.5 h-3.5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
      </summary>
      <div class="ml-9 mt-1 space-y-0.5">
        <a href="{{ route('admin.campuslife.snapshots') }}" class="block px-3 py-1.5 rounded-md hover:bg-white/5 hover:text-white transition">Snapshot albums</a>
        <a href="{{ route('admin.campuslife.facebook-sync') }}" class="block px-3 py-1.5 rounded-md hover:bg-white/5 hover:text-white transition">Facebook sync</a>
        <a href="{{ route('admin.campuslife.ai-suggestions') }}" class="block px-3 py-1.5 rounded-md hover:bg-white/5 hover:text-white transition">AI suggestions</a>
      </div>
    </details>

    <a href="{{ route('admin.announcements') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-md @if($activePage === 'announcements') bg-amber-400/10 text-amber-400 font-medium @else hover:bg-white/5 hover:text-white transition @endif">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
      Announcements
    </a>
    <a href="{{ route('admin.settings') }}" class="flex items-center gap-2.5 px-3 py-2 rounded-md hover:bg-white/5 hover:text-white transition">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      Settings
    </a>
  </nav>

  <div class="px-5 py-4 border-t border-white/10 flex items-center gap-2.5">
    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-xs font-semibold text-white">A</div>
    <div class="text-xs">
      <p class="text-white font-medium">Admin</p>
      <a href="{{ route('logout') }}" class="text-slate-400 hover:text-amber-400 transition">Sign out</a>
    </div>
  </div>
</aside>
