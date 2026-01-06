@extends('users.layouts.main')

@section('content')
    <div class="container">
        <h1 class="section-title">Latest Products</h1>
        <p class="section-subtitle">Explore our exclusive collection.</p>

        <div class="product-grid">
            @forelse($products as $product)
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/400x300?text=No+Image' }}" alt="{{ $product->name }}" class="product-image">
                    </div>
                    <div class="product-content">
                        <div class="product-category">{{ $product->category->name }}</div>
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <div class="product-footer">
                            <div class="product-price">₹{{ number_format($product->price, 2) }}</div>
                            <button class="btn-add-cart" title="Add to Cart">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="no-products">
                    <h3>No products available yet.</h3>
                    <p>Please check back later.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection