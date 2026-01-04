@extends('admin.layouts.main')
@section('title', 'Dashboard')

@section('content')
<main class="main-content">
        <div class="section-header fade-in-up" style="animation-delay: 0.1s;">
            <h1 class="section-title">Dashboard</h1>
            <p class="section-subtitle">Welcome back, {{ Auth::user()->name }}! Here's what's happening today.</p>
        </div>

        <div class="stats-grid">
            <div class="card fade-in-up" style="animation-delay: 0.3s;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="font-size: 0.875rem; color: var(--text-gray); font-weight: 500;">Total Categories</div>
                    <div style="padding: 8px; background-color: #dcfce7; color: #10b981; border-radius: 8px;">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                    </div>
                </div>
                <div style="font-size: 2rem; font-weight: 700; color: var(--text-dark);">{{ $totalCategories }}</div>
            </div>

            <div class="card fade-in-up" style="animation-delay: 0.4s;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="font-size: 0.875rem; color: var(--text-gray); font-weight: 500;">Total Products</div>
                    <div style="padding: 8px; background-color: #fef3c7; color: #f59e0b; border-radius: 8px;">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                </div>
                <div style="font-size: 2rem; font-weight: 700; color: var(--text-dark);">{{ $totalProducts }}</div>
            </div>
        </div>
    </main>
    @endsection