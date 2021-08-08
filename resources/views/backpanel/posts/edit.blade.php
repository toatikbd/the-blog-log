@extends('backpanel.layouts.master')
@section('title', 'Edit an Posts')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('post.index') }}" class="btn btn-primary rounded">All Posts</a>
    </div>
    <h2>Edit an Posts:: {{ $post->name }}</h2>
    @include('backpanel.layouts.errors')
    <form action="{{ route('post.update', [$post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ $post->name }}"
                class="form-control"
                placeholder="enter name"
            >
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded">Update post</button>
    </form>

@endsection
@push('js')

@endpush
