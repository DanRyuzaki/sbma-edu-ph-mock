@extends('layouts.admin')

@section('title', 'Announcements | SBMA Admin')
@section('active_page', 'announcements')
@section('page_title', 'Announcements')

@section('page_actions')
<div class="flex flex-wrap gap-3 mb-6">
  <a href="#" class="inline-flex items-center gap-2 bg-[#0F1B33] hover:bg-[#182A4D] text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
    New announcement
  </a>
</div>
@endsection

@section('page_content')
@php
  $announcements = [
    [
      'title' => "Parents' Orientation Schedule",
      'status' => 'Published',
      'schoolYear' => 'S.Y. 2026-2027',
      'summary' => "Please check the schedule above for your child's assigned orientation date and time.",
      'date' => 'July 22, 2026',
    ],
    [
      'title' => 'Scholarship Application Reminder',
      'status' => 'Draft',
      'schoolYear' => 'S.Y. 2026-2027',
      'summary' => 'This draft is ready for review and publishing once the final details are approved.',
      'date' => 'Pending review',
    ],
  ];
@endphp

<div class="grid gap-4">
  <div class="bg-white border border-slate-100 rounded-xl p-5">
    <div class="flex items-center justify-between gap-3 mb-4">
      <div>
        <p class="text-sm font-semibold text-slate-900">Announcement list</p>
        <p class="text-sm text-slate-600">Keep parent-facing updates and office notices organized in one place.</p>
      </div>
      <span class="inline-flex items-center rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">{{ count($announcements) }} items</span>
    </div>

    <div class="space-y-3">
      @foreach ($announcements as $announcement)
        <div class="border border-slate-200 rounded-lg p-4">
          <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
            <h3 class="font-semibold text-slate-900">{{ $announcement['title'] }}</h3>
            <span class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold {{ $announcement['status'] === 'Published' ? 'bg-emerald-100 text-emerald-700' : 'bg-slate-100 text-slate-600' }}">
              {{ $announcement['status'] }}
            </span>
          </div>
          <div class="flex flex-wrap gap-4 text-xs text-slate-500 mb-2">
            <span>{{ $announcement['schoolYear'] }}</span>
            <span>{{ $announcement['date'] }}</span>
          </div>
          <p class="text-sm text-slate-600">{{ $announcement['summary'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
