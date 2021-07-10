@extends('backpanel.layouts.master')
@section('title', 'Create permission')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('permission.index') }}" class="btn btn-primary rounded">All permission</a>
    </div>

    <h2>Create an permission</h2>
    @include('backpanel.layouts.errors')
    <form action="{{route('permission.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter permission Name"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Save permission</button>
    </form>
@endsection
@push('js')

@endpush
