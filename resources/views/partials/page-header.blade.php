<div class="flex flex-wrap items-end justify-between gap-4">
    <div>
        @if(isset($eyebrow))
            <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">{{ $eyebrow }}</p>
        @endif
        <h1 class="mt-{{ isset($eyebrow) ? '2' : '0' }} text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">{{ $heading }}</h1>
        @if(isset($description))
            <p class="mt-2 text-slate-600">{{ $description }}</p>
        @endif
    </div>
    @if(isset($action))
        {!! $action !!}
    @endif
</div>
