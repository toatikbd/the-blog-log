@extends('backpanel.layouts.master')
@section('title', 'All Category')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{ route('category.create') }}" class="btn btn-primary rounded">Create Category</a>
        <a href="{{ route('category.trash') }}" class="btn btn-danger rounded">Trash Category</a>
    </div>
    <h2>All Category</h2>
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
                    <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-warning btn-sm rounded" data-toggle="tooltip" data-placement="top" title="Edit this category">
                        <i class="material-icons">edit</i>
                        Edit
                    </a>
                </div>
                <form action="{{ route('category.destroy', [$category->id]) }}" method="POST">
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
            <td colspan="4" class="text-center text-danger">No categorys Found</td>
        </tr>
        @endforelse
    </table>
@endsection
@push('js')

@endpush
