@props(['priority'])

@php
    $map = [
        'high'   => ['color' => 'var(--danger)', 'label' => 'High'],
        'medium' => ['color' => 'var(--accent)', 'label' => 'Medium'],
        'low'    => ['color' => '#9B9FBE', 'label' => 'Low'],
    ];
    $item = $map[$priority] ?? ['color' => 'var(--ink-soft)', 'label' => ucfirst($priority)];
@endphp

<span class="badge-dot" style="--dot-color: {{ $item['color'] }}">
    <span class="dot"></span>{{ $item['label'] }}
</span>