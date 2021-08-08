@extends('backpanel.layouts.master')
@section('title', 'All Post')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{ route('post.create') }}" class="btn btn-outline-primary rounded">Create Post</a>
        <a href="{{ route('post.index') }}" class="btn btn-outline-success rounded">All Post</a>
        <a href="{{ route('post.trash') }}" class="btn btn-outline-danger rounded">Trash Post</a>
    </div>
    <h2>All Trash Post</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Post Name</th>
            <th>Post Slug</th>
            <th>post Action</th>
        </tr>
        @forelse($posts as $key => $post)
        <tr>
            <td>{{ $post->name }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <div class="d-flex">
                    <form action="{{ route('post.restore', [$post->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm rounded">
                            <i class="material-icons">restore</i>
                            Restore
                        </button>
                    </form>
                    <form action="{{ route('post.force.delete', [$post->id]) }}" method="POST">
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
            <td colspan="4" class="text-center text-danger">No posts Found</td>
        </tr>
        @endforelse
    </table>
@endsection
@push('js')

@endpush
