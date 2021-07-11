@extends('backpanel.layouts.master')
@section('title', 'All Roles')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{ route('role.create') }}" class="btn btn-primary rounded">Create Roles</a>
    </div>
    <h2>All Roles</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Role Name</th>
            <th>Role Action</th>
        </tr>
        @forelse($roles as $key => $role)
        <tr>
            <td>{{ $role->name }}</td>
            <td>
                <div class="d-flex">
                    <a href="{{ route('role.assign.permission', [$role->id]) }}" class="btn btn-success btn-sm rounded" data-toggle="tooltip" data-placement="top" title="Assign Permission">
                        <i class="material-icons">connect_without_contact</i>
                        Assign Permission
                    </a>
                    <a href="{{ route('role.edit', [$role->id]) }}" class="btn btn-warning btn-sm rounded" data-toggle="tooltip" data-placement="top" title="Edit this role">
                        <i class="material-icons">edit</i>
                        Edit
                    </a>
                </div>
                <form action="{{ route('role.destroy', [$role->id]) }}" method="POST">
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
            <td colspan="4" class="text-center text-danger">No Roles Found</td>
        </tr>
        @endforelse
    </table>
@endsection
@push('js')

@endpush
