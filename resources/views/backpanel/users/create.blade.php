@extends('backpanel.layouts.master')
@section('title', 'Create Users')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All Users</a>
    </div>
    <h2>Create an Users</h2>
    
@endsection
@push('js')
    
@endpush