@extends('backpanel.layouts.master')
@section('title', 'Create Roles')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('role.index') }}" class="btn btn-primary rounded">All Roles</a>
    </div>

    <h2>Create an Roles</h2>
    @include('backpanel.layouts.errors')
    <form action="{{route('role.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter Role Name"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Save Role</button>
    </form>
@endsection
@push('js')

@endpush
