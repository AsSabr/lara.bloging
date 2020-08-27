@extends('layouts.manage.manage')

@section('icon')
    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
@endsection
@section('title', 'Users')
@section('subheading', 'All Users')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="main-card card">
                <div class="card-body">
                <div class="mb-4">
                    <a class="btn btn-sm bg-night-sky text-white b-radius-0" href="{{ route('manage.users.create') }}">Add New User</a>
                </div>
                    <table class="table table-bordered">
                        <thead class="bg-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created | Updated</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td width="200px">{{ $user->created_at->format('d.m.Y') }} | {{ $user->updated_at->format('d.m.Y') }}</td>
                            <td class="text-center" width="190px;">
                                <a href="{{ route('manage.users.show', $user) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('manage.users.edit', $user) }}" class="btn btn-primary btn-sm">{{ __('Edit') }}</a>
                                <a href="{{ route('manage.users.destroy', $user) }}" class="btn btn-danger btn-sm">{{ __('Delete') }}</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <th colspan="5">There are no Users yet</th>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
