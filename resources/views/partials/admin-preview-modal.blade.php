<div id="{{ $panelId ?? 'previewPanel' }}" style="display:none" class="fixed inset-0 bg-black/50 z-50">
  <div class="flex items-center justify-center h-full p-4">
    <div class="bg-white rounded-xl w-full max-w-5xl max-h-[90vh] overflow-hidden">
      <div class="sticky top-0 bg-white border-b border-slate-200 px-6 py-4 flex items-center justify-between rounded-t-xl">
        <h3 class="font-semibold text-slate-900">{{ $title ?? 'Preview' }}</h3>
        <button onclick="togglePreview()" class="text-slate-400 hover:text-slate-600">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
      <div class="p-2">
        <iframe src="{{ $src ?? route('dashboard') }}" class="w-full h-[78vh] rounded-lg border border-slate-200"></iframe>
      </div>
    </div>
  </div>
</div>

<script>
function togglePreview() {
  const panel = document.getElementById('{{ $panelId ?? 'previewPanel' }}');
  panel.style.display = panel.style.display === 'none' ? 'block' : 'none';
}
</script>
