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
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter post Name"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Save post</button>
    </form>
@endsection
@push('js')

@endpush
