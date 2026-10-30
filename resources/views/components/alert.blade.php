@php
    $alertStyles = [
        'success' => 'border-emerald-200 bg-emerald-50 text-emerald-700',
        'error' => 'border-red-200 bg-red-50 text-red-700',
        'info' => 'border-blue-200 bg-blue-50 text-blue-700',
    ];
@endphp
<div class="rounded-xl border px-4 py-3 text-sm {{ $alertStyles[$type ?? 'info'] ?? $alertStyles['info'] }}" role="alert">
    {{ $slot }}
</div>
