@extends('backpanel.layouts.master')
@section('title', 'Create Users')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All Users</a>
    </div>
    <h2>Create an Users</h2>
    <form accept="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="enter name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="enter password">
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded">Save User</button>
    </form>
    
@endsection
@push('js')
    
@endpush