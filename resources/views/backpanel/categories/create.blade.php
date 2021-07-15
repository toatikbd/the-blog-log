@extends('backpanel.layouts.master')
@section('title', 'Create Categories')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('category.index') }}" class="btn btn-primary rounded">All Categories</a>
    </div>

    <h2>Create an Categories</h2>
    @include('backpanel.layouts.errors')
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter category Name"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Save category</button>
    </form>
@endsection
@push('js')

@endpush
