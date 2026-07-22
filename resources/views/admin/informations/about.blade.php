@extends('layouts.admin')

@section('title', 'About | SBMA Admin')
@section('active_page', 'about')
@section('page_title', 'About')

@section('page_actions')
<div class="flex gap-3 mb-6">
  <button type="button" onclick="togglePreview()" class="inline-flex items-center gap-2 bg-[#0F1B33] hover:bg-[#182A4D] text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
    Preview Changes
  </button>
  <button type="submit" form="aboutForm" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2.5 rounded-md transition">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
    Save Changes
  </button>
</div>
@endsection

@section('page_content')
<form id="aboutForm" method="POST" action="{{ route('admin.informations.about.update') }}" enctype="multipart/form-data" class="space-y-6">
  @csrf
  @method('PUT')

  <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 text-sm text-amber-900">
    <p class="font-semibold mb-1">Backend field map</p>
    <p>These values are the intended content keys for the About page: <strong>mission</strong>, <strong>vision</strong>, <strong>story_heading</strong>, <strong>story_text</strong>, and the image inputs for the story/founder photos.</p>
  </div>

  <div class="bg-white border border-slate-200 rounded-xl p-6">
    <h2 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
      <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
      Mission & Vision
    </h2>

    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Mission Statement</label>
        <textarea name="mission" rows="4"
          class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">The St. Bernadette Montessori Academy pledges to commit itself in bringing about changes in the learner's discipline, capabilities and skills under the aegis of Service, Benevolence, Mastery and Accuracy.</textarea>
      </div>
      <div>
        <label class="block text-xs font-medium text-slate-500 mb-1">Vision Statement</label>
        <textarea name="vision" rows="4"
          class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">The St. Bernadette Montessori Academy envisions to cater and enhance opportunities for intellectual and moral growth and development with an end in view of developing basic knowledge, attitudes, and values.</textarea>
      </div>
    </div>
  </div>

  <div class="bg-white border border-slate-200 rounded-xl p-6">
    <h2 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
      <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      Our Story
    </h2>

    <div class="mb-4">
      <label class="block text-xs font-medium text-slate-500 mb-1">Heading</label>
      <input type="text" name="story_heading" value="Established in 2011, Rooted in Excellence"
        class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
    </div>

    <div class="mb-4">
      <label class="block text-xs font-medium text-slate-500 mb-1">Story Paragraphs</label>
      <textarea name="story_text" rows="8"
        class="w-full px-3 py-2 border border-slate-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">The St. Bernadette Montessori Academy (SBMA) was established in 2011, founded by Dr. Edisteo B. Bernardez, an educator for over 50 years. SBMA is located at Isabel Avenue, Kapitan Pepe, Cabanatuan City in the province of Nueva Ecija.

In February 2011, SBMA's first building was built accommodating only thirty-four pupils from nursery to Grade 1 with only three classrooms facilitated by three teachers. Years gone by, the school has emerged and is continuously improving as an outstanding educational institution for and of the community.

In academic year 2018, SBMA had seven hundred fifty students, fifty-one teachers, twenty-nine classrooms, and three laboratory rooms. The school offers services to students of Preschool to Junior High School levels, implementing the K to 12 Curriculum of the Department of Education.</textarea>
    </div>

    <div class="grid md:grid-cols-2 gap-4">
      <div class="border border-slate-100 rounded-lg p-3">
        <p class="text-xs font-medium text-slate-500 mb-2">Story Photo</p>
        <img src="{{ asset('images/hero/reward2022.jpg') }}" alt="Story photo" class="w-full h-24 object-cover rounded mb-2">
        <input type="file" name="story_image" accept="image/*"
          class="text-xs text-slate-600 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 w-full">
      </div>
      <div class="border border-slate-100 rounded-lg p-3">
        <p class="text-xs font-medium text-slate-500 mb-2">Founder Photo</p>
        <img src="{{ asset('images/hero/founder.jpg') }}" alt="Founder" class="w-full h-24 object-cover rounded mb-2">
        <input type="file" name="founder_image" accept="image/*"
          class="text-xs text-slate-600 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 w-full">
      </div>
    </div>
  </div>
</form>

@include('partials.admin-preview-modal', ['panelId' => 'previewPanel', 'title' => 'About Page Preview', 'src' => route('dashboard').' #mission'])
@endsection