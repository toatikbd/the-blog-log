@extends('backpanel.layouts.master')
@section('title', 'Create Posts')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('post.index') }}" class="btn btn-primary rounded">All Posts</a>
    </div>

    <h2>Create an Posts</h2>
    @include('backpanel.layouts.errors')
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input
                id="title"
                type="text"
                class="form-control"
                name="title"
                placeholder="Enter post title"
            >
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea name="content" id="content" class="form-control" cols="20" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="0">Select Category</option>
                @forelse($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <option value="0">Category not Found</option>
                @endforelse
            </select>
        </div>
        <button
            class="btn btn-primary rounded"
            type="submit">Save post
        </button>
        <button
            class="btn btn-success rounded"
            type="submit">Publish Post
        </button>
    </form>
@endsection
@push('js')

@endpush
