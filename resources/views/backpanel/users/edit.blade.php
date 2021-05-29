@extends('backpanel.layouts.master')
@section('title', 'Edit an Users')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All Users</a>
    </div>
    <h2>Edit an Users:: {{ $user->name }}</h2>
    <form accept="{{ route('user.update', [$user->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control" placeholder="enter name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="enter email">
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded">Update User</button>
    </form>
    
@endsection
@push('js')
    
@endpush