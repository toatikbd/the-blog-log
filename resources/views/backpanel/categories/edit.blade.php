@extends('backpanel.layouts.master')
@section('title', 'Edit an Categories')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('category.index') }}" class="btn btn-primary rounded">All Categories</a>
    </div>
    <h2>Edit an Categories:: {{ $category->name }}</h2>
    @include('backpanel.layouts.errors')
    <form action="{{ route('category.update', [$category->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ $category->name }}" 
                class="form-control" 
                placeholder="enter name"
            >
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded">Update category</button>
    </form>

@endsection
@push('js')

@endpush
