@extends('admin.layouts.main')

@section('title', 'Products')

@section('content')
<main class="main-content">
    <div class="section-header">
        <div class="flex-between">
            <div>
                <h1 class="section-title">Products</h1>
                <p class="section-subtitle">Manage your products.</p>
            </div>
            <a href="{{ route('admin.products.create') }}" class="btn-primary">
                Add New Product
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th class="col-id">ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td>#{{ $product->id }}</td>
                        <td>
                            <div class="product-name">{{ $product->name }}</div>
                            <small class="product-slug">{{ $product->slug }}</small>
                        </td>
                        <td>
                            <span class="category-badge">
                                {{ $product->category->name }}
                            </span>
                        </td>
                        <td class="product-price">
                            ₹{{ number_format($product->price, 2) }}
                        </td>
                        <td>
                            <span class="status-badge {{ $product->status ? 'status-active' : 'status-inactive' }}">
                                {{ $product->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="text-muted-sm">
                            {{ $product->created_at->format('M d, Y') }}
                        </td>
                        <td class="actions-cell">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn-icon" title="Edit">
                                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');" class="form-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon btn-icon-delete" title="Delete">
                                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6"></path></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="empty-state">
                            No products found. Start by adding one.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
