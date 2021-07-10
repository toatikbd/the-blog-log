@extends('backpanel.layouts.master')
@section('title', 'All Permission')
@section('content')
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="d-flex justify-content-between">
        <a href="{{ route('permission.create') }}" class="btn btn-primary rounded">Create Permission</a>
    </div>
    <h2>All Permission</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Permission Name</th>
            <th>permission Action</th>
        </tr>
        @forelse($permissions as $key => $permission)
        <tr>
            <td>{{ $permission->name }}</td>
            <td>
                <a href="{{ route('permission.edit', [$permission->id]) }}" class="btn btn-warning btn-sm rounded" data-toggle="tooltip" data-placement="top" title="Edit this permission">
                    <i class="material-icons">edit</i>
                    Edit
                </a>
                <form action="{{ route('permission.destroy', [$permission->id]) }}" method="POST">
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
            <td colspan="4" class="text-center text-danger">No permissions Found</td>
        </tr>
        @endforelse
    </table>
@endsection
@push('js')

@endpush
