<header class="site-header">
    <a href="{{ route('home') }}" class="brand">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
        TrialTask
    </a>
    <div class="nav-actions">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-dashboard">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-login">Log in</a>
            @endauth
        @endif
    </div>
</header>
