@extends('admin.layouts.main')

@section('title', $title)

@section('content')
<main class="main-content">
    <div class="section-header">
        <h1 class="section-title">{{ $title }}</h1>
        <p class="section-subtitle">{{ $description }}</p>
    </div>

    <div class="card">
        <form action="{{ $url }}" method="POST">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif
            
            <div class="form-group">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $category->name ?? '') }}" placeholder="Category Name" required>
                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $category->slug ?? '') }}" placeholder="Slug" required>
                @error('slug')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

               <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ old('status', $category->status ?? '') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $category->status ?? '') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <div class="form-actions">
                    <a href="{{ route('admin.category.index') }}" class="btn-secondary">Cancel</a>
                    <button type="submit" class="btn-primary">{{ isset($category) ? 'Update Category' : 'Create Category' }}</button>
                </div>
        </form>
    </div>
</main>
@endsection


@section('scripts')
@endsection
