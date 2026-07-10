@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="eyebrow mb-1">Overview</div>
    <h3 class="fw-bold mb-1">Dashboard</h3>
    <p class="text-muted mb-4">Selamat datang kembali, {{ Auth::user()->name }}.</p>

    <div class="row g-3 mb-4">
        <div class="col-md-3 col-6">
            <div class="stat-card" style="--stat-color: var(--brand)">
                <div class="stat-label">Total Task</div>
                <div class="stat-value">{{ $totalTasks }}</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="stat-card" style="--stat-color: #9B9FBE">
                <div class="stat-label">To Do</div>
                <div class="stat-value">{{ $todoCount }}</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="stat-card" style="--stat-color: var(--accent)">
                <div class="stat-label">In Progress</div>
                <div class="stat-value">{{ $inProgressCount }}</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="stat-card" style="--stat-color: var(--success)">
                <div class="stat-label">Done</div>
                <div class="stat-value">{{ $doneCount }}</div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0 pt-4 pb-0">
            <div class="eyebrow">Perhatian</div>
            <h6 class="fw-bold mb-0">Task Mendekati Deadline (7 hari ke depan)</h6>
        </div>
        <div class="card-body pt-3">
            @if ($upcomingTasks->isEmpty())
                <p class="text-muted mb-0">Tidak ada task yang mendekati deadline. Aman!</p>
            @else
                <div class="table-responsive">
                    <table class="table table-modern align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Prioritas</th>
                                <th>Status</th>
                                <th>Deadline</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($upcomingTasks as $task)
                                <tr>
                                    <td>
                                        <a href="{{ route('tasks.show', $task) }}" class="text-decoration-none fw-semibold" style="color: var(--ink);">
                                            {{ $task->title }}
                                        </a>
                                    </td>
                                    <td><x-priority-badge :priority="$task->priority" /></td>
                                    <td><x-status-badge :status="$task->status" /></td>
                                    <td style="font-family: var(--font-mono); font-size:.85rem;">
                                        {{ $task->deadline->format('d M Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection