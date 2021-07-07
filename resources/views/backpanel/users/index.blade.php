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
            <th>User Thum</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Role</th>
            <th>User Action</th>
        </tr>
        @forelse($users as $key => $user)
        <tr>
            <td>
                <img src="{{ $user->avatar }}" alt="{{ $user->name }}" width="75" height="auto">
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
             <td>{{ strtoupper($user->roles[0]->name) }}</td>
            <td>
                <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-warning btn-sm rounded" data-toggle="tooltip" data-placement="top" title="Edit this User">
                    <i class="material-icons">edit</i>
                    Edit
                </a>
                <form action="{{ route('user.destroy', [$user->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm rounded">
                        <i class="material-icons">delete</i>
                        Delete
                    </button>
                </form>
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
