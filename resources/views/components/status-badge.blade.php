@props(['status'])

@php
    $map = [
        'to_do'       => ['bg' => '#EEF0F7', 'fg' => '#5B6083', 'label' => 'To Do'],
        'in_progress' => ['bg' => 'var(--accent-soft)', 'fg' => '#92600B', 'label' => 'In Progress'],
        'done'        => ['bg' => '#E3F3EA', 'fg' => '#1F6E44', 'label' => 'Done'],
    ];
    $item = $map[$status] ?? ['bg' => '#EEF0F7', 'fg' => 'var(--ink-soft)', 'label' => ucfirst($status)];
@endphp

<span class="badge-status" style="--status-bg: {{ $item['bg'] }}; --status-fg: {{ $item['fg'] }};">
    {{ $item['label'] }}
</span>