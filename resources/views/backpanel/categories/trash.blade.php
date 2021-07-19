@extends('backpanel.layouts.master')
@section('title', 'All Category')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{ route('category.create') }}" class="btn btn-outline-primary rounded">Create Category</a>
        <a href="{{ route('category.index') }}" class="btn btn-outline-success rounded">All Category</a>
        <a href="{{ route('category.trash') }}" class="btn btn-outline-danger rounded">Trash Category</a>
    </div>
    <h2>All Trash Category</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Category Name</th>
            <th>Category Slug</th>
            <th>category Action</th>
        </tr>
        @forelse($categories as $key => $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>
                <div class="d-flex">
                    <form action="{{ route('category.restore', [$category->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm rounded">
                            <i class="material-icons">restore</i>
                            Restore
                        </button>
                    </form>
                    <form action="{{ route('category.force.delete', [$category->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm rounded">
                            <i class="material-icons">delete</i>
                            Force Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center text-danger">No categorys Found</td>
        </tr>
        @endforelse
    </table>
@endsection
@push('js')

@endpush
