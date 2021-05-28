@extends('backpanel.layouts.master')
@section('title', 'All Users')
@section('content')
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="d-flex justify-content-between">
        <a href="{{ route('user.create') }}" class="btn btn-primary rounded">Create User</a>
    </div>
    <h2>All Users</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Role</th>
            <th>User Action</th>
        </tr>
        @forelse($users as $key => $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>Admin</td>
            <td>
                <a href="http://" class="btn btn-warning btn-sm rounded" data-toggle="tooltip" data-placement="top" title="Edit this User">
                    <i class="material-icons">edit</i>
                    Edit
                </a>
                <a href="http://" class="btn btn-danger btn-sm rounded">
                    <i class="material-icons">delete</i>
                    Delete
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center text-danger">No User Found</td>
        </tr>
        @endforelse
    </table>
@endsection
@push('js')
    
@endpush