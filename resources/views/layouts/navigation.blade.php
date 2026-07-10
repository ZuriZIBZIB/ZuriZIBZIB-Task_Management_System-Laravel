<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <span class="eyebrow" style="color: rgba(255,255,255,.6);">TMS</span>
            <span class="d-block" style="font-size:1.05rem;">Task Management</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                       href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tasks.*') ? 'active' : '' }}"
                       href="{{ route('tasks.index') }}">Task</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item me-lg-3">
                    <span class="nav-link" style="font-family: var(--font-mono); font-size:.85rem; color: rgba(255,255,255,.65);">
                        {{ Auth::user()->name }}
                    </span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>