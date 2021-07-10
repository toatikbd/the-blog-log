@extends('backpanel.layouts.master')
@section('title', 'Edit an permission')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('permission.index') }}" class="btn btn-primary rounded">All permission</a>
    </div>
    <h2>Edit an permission:: {{ $permission->name }}</h2>
    @include('backpanel.layouts.errors')
    <form action="{{ route('permission.update', [$permission->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ $permission->name }}" 
                class="form-control" 
                placeholder="enter name"
            >
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded">Update permission</button>
    </form>

@endsection
@push('js')

@endpush
