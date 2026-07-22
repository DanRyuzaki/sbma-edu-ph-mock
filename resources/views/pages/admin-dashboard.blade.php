@extends('layouts.admin')

@section('title', 'Dashboard | SBMA Admin')
@section('active_page', 'dashboard')
@section('page_title', 'Overview')

@section('page_actions')
<div class="flex flex-wrap gap-3 mb-6">
  <a href="{{ route('admin.announcements') }}" class="inline-flex items-center gap-2 bg-[#0F1B33] hover:bg-[#182A4D] text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
    New announcement
  </a>
  <a href="#" class="inline-flex items-center gap-2 bg-white border border-slate-200 hover:border-amber-300 text-slate-700 text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
    New album
  </a>
  <a href="#" class="inline-flex items-center gap-2 bg-white border border-slate-200 hover:border-amber-300 text-slate-700 text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
    Review FB queue
  </a>
</div>
@endsection

@section('page_content')
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
  <div class="bg-white border border-slate-100 rounded-xl p-5">
    <p class="text-slate-500 text-xs font-medium mb-1">Announcements</p>
    <p class="text-2xl font-bold text-slate-900">8 <span class="text-sm font-normal text-slate-400">published</span></p>
    <p class="text-xs text-amber-600 mt-1">3 drafts pending</p>
  </div>
  <div class="bg-white border border-slate-100 rounded-xl p-5">
    <p class="text-slate-500 text-xs font-medium mb-1">Snapshot albums</p>
    <p class="text-2xl font-bold text-slate-900">12 <span class="text-sm font-normal text-slate-400">published</span></p>
    <p class="text-xs text-slate-400 mt-1">1 draft</p>
  </div>
  <div class="bg-white border border-slate-100 rounded-xl p-5">
    <p class="text-slate-500 text-xs font-medium mb-1">FB review queue</p>
    <p class="text-2xl font-bold text-slate-900">5 <span class="text-sm font-normal text-slate-400">pending</span></p>
    <p class="text-xs text-slate-400 mt-1">synced 2h ago</p>
  </div>
  <div class="bg-white border border-slate-100 rounded-xl p-5">
    <p class="text-slate-500 text-xs font-medium mb-1">Enrollment</p>
    <p class="text-xl font-bold text-emerald-600">Open</p>
    <p class="text-xs text-slate-400 mt-1">S.Y. 2026-2027</p>
  </div>
</div>

<div class="grid lg:grid-cols-[1.2fr_1fr] gap-4">
  <div class="bg-white border border-slate-100 rounded-xl p-5">
    <p class="text-sm font-semibold text-slate-900 mb-4">Recent activity</p>
    <div class="space-y-3.5 text-sm">
      <div class="flex gap-2.5">
        <svg class="w-4 h-4 text-emerald-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <div>
          <span class="text-slate-900">Admin published</span>
          <span class="text-slate-600">Parents' Orientation Schedule</span>
          <p class="text-xs text-slate-400">2 hours ago</p>
        </div>
      </div>
      <div class="flex gap-2.5">
        <svg class="w-4 h-4 text-slate-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M4 8h16M4 8a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2v-8a2 2 0 00-2-2M4 8V6a2 2 0 012-2h6l2 2h6a2 2 0 012 2v2"/></svg>
        <div>
          <span class="text-slate-900">Admin uploaded</span>
          <span class="text-slate-600">Sports Fest 2026 album</span>
          <p class="text-xs text-slate-400">Yesterday</p>
        </div>
      </div>
      <div class="flex gap-2.5">
        <svg class="w-4 h-4 text-slate-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
        <div>
          <span class="text-slate-900">Admin updated</span>
          <span class="text-slate-600">Admission requirements</span>
          <p class="text-xs text-slate-400">2 days ago</p>
        </div>
      </div>
    </div>
  </div>

  <div class="space-y-4">
    <div class="bg-white border border-slate-100 rounded-xl p-5">
      <p class="text-sm font-semibold text-slate-900 mb-3">Expiring soon</p>
      <div class="flex justify-between text-sm">
        <span class="text-slate-600">Enrollment reminder</span>
        <span class="text-amber-600 font-medium">in 3 days</span>
      </div>
    </div>
    <div class="bg-white border border-slate-100 rounded-xl p-5">
      <p class="text-sm font-semibold text-slate-900 mb-3">Facebook sync</p>
      <div class="flex justify-between text-sm mb-2">
        <span class="text-slate-600">Last sync</span>
        <span class="text-slate-900">2 hours ago</span>
      </div>
      <div class="flex justify-between text-sm">
        <span class="text-slate-600">Failed attempts</span>
        <span class="text-emerald-600 font-medium">0</span>
      </div>
    </div>
  </div>
</div>
@endsection