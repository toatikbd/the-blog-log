@extends('backpanel.layouts.master')
@section('title', 'Assign Permission')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('role.index') }}" class="btn btn-primary rounded">Assign Permission</a>
    </div>
    @include('backpanel.layouts.success')
    <h2 class="text-center">Assign Permission:: {{ $role->name }}</h2>
    @include('backpanel.layouts.errors')
    <div class="col-md-6 offset-3">
        <form action="{{ route('role.store.permission', [$role->id]) }}" method="post">
            @csrf
            @forelse($permissions as $permission)
                <div class="form-group">
                    <table class="table">
                        <tr>
                            <td>
                                <label for="permission">{{ $permission->name }}</label>
                            </td>
                            <td class="text-right">
                                <input
                                    type="checkbox"
                                    name="permission[]"
                                    value="{{ $permission->id }}"
                                    id="permission"
                                    @if($role->hasPermissionTo($permission->id)) checked @endif
                                >
                            </td>
                        </tr>
                    </table>
                </div>
            @empty
                <p>No Permission Added Yet</p>
            @endforelse
            <button type="submit" class="btn btn-primary btn-block">Save Permission</button>
        </form>
    </div>
@endsection
@push('js')

@endpush
