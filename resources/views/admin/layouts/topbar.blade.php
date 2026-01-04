<header class="top-header">
        <div style="display: flex; align-items: center;">
            <button class="menu-toggle" onclick="toggleSidebar()">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
            <div class="brand-logo">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-indigo-600"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                <span>TrialTask</span>
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 24px;">
             
             <!-- Profile Dropdown -->
             <div class="profile-wrapper">
                <button class="profile-btn" onclick="toggleProfileDropdown()">
                    <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center; font-weight: 600; box-shadow: 0 2px 4px rgba(99, 102, 241, 0.3);">
                        {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                    </div>
                </button>

                <div id="profileDropdown" class="dropdown-menu">
                    <div class="dropdown-user-info">
                        <div class="dropdown-name">{{ Auth::user()->name }}</div>
                        <div class="dropdown-email">{{ Auth::user()->email }}</div>
                    </div>

                    <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" class="dropdown-link">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            Logout
                        </button>
                    </form>
                </div>
             </div>
        </div>
    </header>