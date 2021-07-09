@extends('backpanel.layouts.master')
@section('title', 'Edit an Roles')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('role.index') }}" class="btn btn-primary rounded">All Roles</a>
    </div>
    <h2>Edit an Roles:: {{ $role->name }}</h2>
    @include('backpanel.layouts.errors')
    <form action="{{ route('role.update', [$role->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ $role->name }}" 
                class="form-control" 
                placeholder="enter name"
            >
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded">Update Role</button>
    </form>

@endsection
@push('js')

@endpush
