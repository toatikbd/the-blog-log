@extends('backpanel.layouts.master')
@section('title', 'All Posts')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{ route('post.create') }}" class="btn btn-primary rounded">Create Posts</a>
        <a href="{{ route('post.trash') }}" class="btn btn-danger rounded">Trash Posts</a>
    </div>
    <h2>All Posts</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Post Name</th>
            <th>Post Slug</th>
            <th>Post Action</th>
        </tr>
        @forelse($posts as $key => $post)
        <tr>
            <td>{{ $post->name }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <div class="d-flex">
                    <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-warning btn-sm rounded" data-toggle="tooltip" data-placement="top" title="Edit this post">
                        <i class="material-icons">edit</i>
                        Edit
                    </a>
                </div>
                <form action="{{ route('post.destroy', [$post->id]) }}" method="POST">
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
            <td colspan="4" class="text-center text-danger">No posts Found</td>
        </tr>
        @endforelse
    </table>
@endsection
@push('js')

@endpush
