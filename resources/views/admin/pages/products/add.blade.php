@extends('admin.layouts.main')

@section('title', $title)

@section('content')
<main class="main-content">
    <div class="section-header">
        <h1 class="section-title">{{ $title }}</h1>
        <p class="section-subtitle">{{ $description }}</p>
    </div>

    <div class="card">
        <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

            
            <div class="form-row">
                <div class="form-group">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}" placeholder="Product Name" required>
                    @error('name')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug', $product->slug ?? '') }}" placeholder="Slug" required>
                    @error('slug')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $product->price ?? '') }}" placeholder="0.00" required>
                    @error('price')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ old('status', $product->status ?? '') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $product->status ?? '') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Product Image</label>
                    @if(isset($product) && $product->image)
                        <div style="margin-bottom: 10px;">
                            <img src="{{ asset($product->image) }}" alt="Current Image" style="height: 60px; border-radius: 4px;">
                        </div>
                    @endif
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <input type="file" name="image" class="form-control" accept="image/*" {{ isset($product) ? '' : 'required' }} style="flex: 1;">
                    </div>
                    @if(isset($product))
                        <small style="color: var(--text-gray);">Leave blank to keep current image</small>
                    @endif
                    @error('image')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('admin.products.index') }}" class="btn-secondary">Cancel</a>
                <button type="submit" class="btn-primary">{{ isset($product) ? 'Update Product' : 'Create Product' }}</button>
            </div>
        </form>
    </div>
</main>
@endsection

@section('scripts')
@endsection
