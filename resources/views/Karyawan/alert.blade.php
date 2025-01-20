<div {{ $attributes->merge(['class' => 'alert alert-' . ($type ?? 'info')]) }} role="alert">
    {{ $slot }}
    {{-- alert.blade.php --}}
<div>
    Komponen berhasil dimuat: {{ now() }}
</div>
</div>