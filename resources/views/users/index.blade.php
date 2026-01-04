<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrialTask - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --text-dark: #0f172a;
            --text-gray: #64748b;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            padding: 0;
            color: var(--text-dark);
        }

        /* Header */
        .site-header {
            background-color: var(--bg-white);
            border-bottom: 1px solid #e2e8f0;
            padding: 0 32px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .btn-login {
            background-color: var(--primary);
            color: white;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .btn-login:hover {
            background-color: #4338ca;
        }
        
        .btn-dashboard {
            background-color: var(--bg-white);
            color: var(--text-dark);
            border: 1px solid #e2e8f0;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-dashboard:hover {
             background-color: var(--bg-light);
        }

        /* Hero / Product Grid */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 24px;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }
        
        .section-subtitle {
            color: var(--text-gray);
            margin-bottom: 40px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 32px;
        }

        .product-card {
            background: var(--bg-white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background-color: #e2e8f0;
        }

        .product-content {
            padding: 20px;
        }

        .product-category {
            font-size: 0.75rem;
            text-transform: uppercase;
            color: var(--primary);
            font-weight: 600;
            letter-spacing: 0.05em;
            margin-bottom: 8px;
        }

        .product-title {
            font-size: 1.125rem;
            font-weight: 600;
            margin: 0 0 8px 0;
            line-height: 1.4;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
        }
        
        .no-products {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px;
            color: var(--text-gray);
            background: var(--bg-white);
            border-radius: 16px;
        }
    </style>
</head>
<body>

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

    <div class="container">
        <h1 class="section-title">Latest Products</h1>
        <p class="section-subtitle">Explore our exclusive collection.</p>

        <div class="product-grid">
            @forelse($products as $product)
                <div class="product-card">
                    <img src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/400x300?text=No+Image' }}" alt="{{ $product->name }}" class="product-image">
                    <div class="product-content">
                        <div class="product-category">{{ $product->category->name }}</div>
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <div class="product-price">₹{{ number_format($product->price, 2) }}</div>
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

</body>
</html>
