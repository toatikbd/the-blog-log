@extends('backpanel.layouts.master')
@section('title', 'Create Users')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All Users</a>
    </div>

    <h2>Create an Users</h2>
    @include('backpanel.layouts.errors')
    <form accept="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="enter name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="enter email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="enter password" required>
        </div>
        <div class="form-group">
            <label for="avatar">User Avatar</label>
            <input type="file" name="avatar" id="avatar" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <select id="roles" name="role_id" class="form-control" required>
                @foreach($roles as $key => $role)
                    <option value="{{$role->id}}">{{strtoupper($role->name)}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded">Save User</button>
    </form>

@endsection
@push('js')

@endpush
