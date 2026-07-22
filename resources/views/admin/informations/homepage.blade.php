@extends('layouts.admin')

@section('title', 'Homepage | SBMA Admin')
@section('active_page', 'homepage')
@section('page_title', 'Homepage')

@section('page_actions')
<div class="flex gap-3 mb-6">
  <button type="button" onclick="togglePreview()" class="inline-flex items-center gap-2 bg-[#0F1B33] hover:bg-[#182A4D] text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
    Preview Changes
  </button>
  <button type="submit" form="homepageForm" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
    Save Changes
  </button>
</div>
@endsection

@section('page_content')
<form id="homepageForm" method="POST" action="{{ route('admin.informations.homepage.update') }}" enctype="multipart/form-data" class="space-y-6">
  @csrf
  @method('PUT')

  <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 text-sm text-amber-900">
    <p class="font-semibold mb-1">Backend field map</p>
    <p>Use these inputs as the frontend payload for the homepage editor: <strong>hero[0][title]</strong>, <strong>hero[0][button_label]</strong>, <strong>hero[0][description]</strong>, <strong>hero[0][button_url]</strong>, and <strong>hero[0][image]</strong>.</p>
  </div>

  <div class="bg-white border border-slate-200 rounded-xl p-6">
    <h2 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
      <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M4 8h16M4 8a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2v-8a2 2 0 00-2-2M4 8V6a2 2 0 012-2h6l2 2h6a2 2 0 012 2v2"/></svg>
      Hero Section
    </h2>

    <div class="grid md:grid-cols-2 gap-4 mb-4">
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Hero Title</label>
        <input type="text" name="hero[0][title]" value="Learning Through Real-World Experience"
          class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
      </div>
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Button Label</label>
        <input type="text" name="hero[0][button_label]" value="Our Philosophy"
          class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
      </div>
    </div>

    <div class="mb-4">
      <label class="block text-xs font-medium text-slate-500 mb-1">Description</label>
      <textarea name="hero[0][description]" rows="2"
        class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">Montessori · Faith · Excellence</textarea>
    </div>

    <div class="grid md:grid-cols-2 gap-4">
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Button Destination (URL)</label>
        <input type="url" name="hero[0][button_url]" value="{{ route('dashboard') }}#mission"
          class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
      </div>
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Hero Image</label>
        <div class="flex items-center gap-3">
          <img src="{{ asset('images/hero/hero-1.jpg') }}" alt="Current hero" class="w-16 h-10 object-cover rounded border border-slate-200">
          <input type="file" name="hero[0][image]" accept="image/*"
            class="text-xs text-slate-600 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
        </div>
      </div>
    </div>
  </div>
</form>

@include('partials.admin-preview-modal', ['panelId' => 'previewPanel', 'title' => 'Homepage Preview', 'src' => route('dashboard')])
@endsection