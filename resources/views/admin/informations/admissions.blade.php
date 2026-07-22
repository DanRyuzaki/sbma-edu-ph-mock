@extends('layouts.admin')

@section('title', 'Admissions | SBMA Admin')
@section('active_page', 'admissions')
@section('page_title', 'Admissions')

@section('page_actions')
<div class="flex gap-3 mb-6">
  <button type="button" onclick="togglePreview()" class="inline-flex items-center gap-2 bg-[#0F1B33] hover:bg-[#182A4D] text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
    Preview Changes
  </button>
  <button type="submit" form="admissionsForm" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
    Save Changes
  </button>
</div>
@endsection

@section('page_content')
<form id="admissionsForm" method="POST" action="{{ route('admin.informations.admissions.update') }}" class="space-y-6">
  @csrf
  @method('PUT')

  <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 text-sm text-amber-900">
    <p class="font-semibold mb-1">Backend field map</p>
    <p>These inputs map to the admissions page content: <strong>admissions_banner_title</strong>, <strong>admissions_banner_subtitle</strong>, <strong>admissions_cta_text</strong>, <strong>admissions_cta_url</strong>, and the program card fields.</p>
  </div>

  <div class="bg-white border border-slate-200 rounded-xl p-6">
    <h2 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
      <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
      Admissions Banner
    </h2>

    <div class="grid md:grid-cols-2 gap-4">
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Banner Title</label>
        <input type="text" name="admissions_banner_title" value="Admissions" class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
      </div>
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Banner Status</label>
        <input type="text" name="admissions_banner_subtitle" value="ONGOING" class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
      </div>
    </div>

    <div class="mt-4">
      <label class="block text-xs font-medium text-slate-500 mb-1">Banner Quote</label>
      <textarea name="admissions_banner_quote" rows="2" class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">“Where Children's Intellectual Growth Accelerates and Practical Life Flourishes”</textarea>
    </div>
  </div>

  <div class="bg-white border border-slate-200 rounded-xl p-6">
    <h2 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
      <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      Program Highlights
    </h2>

    <div class="grid md:grid-cols-2 gap-4">
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Section Heading</label>
        <input type="text" name="programs_heading" value="Programs for Every Stage of Growth" class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
      </div>
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">CTA Button Text</label>
        <input type="text" name="admissions_cta_text" value="Start the Admission Process" class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
      </div>
    </div>

    <div class="mt-4">
      <label class="block text-xs font-medium text-slate-500 mb-1">Section Description</label>
      <textarea name="programs_description" rows="3" class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">From toddlers taking their first steps in independence to young adolescents stepping into the world — our Montessori continuum meets each child exactly where they are.</textarea>
    </div>

    <div class="mt-4">
      <label class="block text-xs font-medium text-slate-500 mb-1">CTA Link</label>
      <input type="url" name="admissions_cta_url" value="{{ route('dashboard') }}#admission-guidance" class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
    </div>
  </div>
</form>

@include('partials.admin-preview-modal', ['panelId' => 'previewPanel', 'title' => 'Admissions Preview', 'src' => route('dashboard').' #admission-links'])
@endsection
