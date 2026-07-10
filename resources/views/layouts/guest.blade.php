<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Task Management System') }} - @yield('title', 'Login')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="auth-body">
    <div class="auth-shell">
        <div class="auth-brand">
            <span class="auth-brand-mark">TMS</span>
            <h1 class="auth-brand-title">Task Management<br>System</h1>
            <p class="auth-brand-copy">
                Satu tempat untuk mencatat, memprioritaskan, dan menyelesaikan pekerjaan harianmu.
            </p>
            <div class="auth-brand-dots"></div>
        </div>

        <div class="auth-panel">
            <div class="auth-panel-inner">
                <h4 class="auth-panel-title">@yield('title', 'Masuk')</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>