@extends('layouts.manage.manage')

@section('icon')
    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
@endsection
@section('title', 'Users')
@section('subheading', 'Add New User')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="main-card card">
                <div class="card-body">
                    <form action="{{ route('manage.users.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="position-relative form-group">
                                    <label for="name" class="label">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="email" class="label">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="password" class="label">Password</label>
                                    <div>
                                        <input type="text" class="form-control" name="password" id="password"
                                               placeholder="Manually give a password to this user"
                                        v-if="!autopass">
                                        <b-checkbox name="auto_generate" class="mt-4" size="is-small" type="is-success" v-model="autopass">Auto Generate Password</b-checkbox>
                                    </div>
                                </div>
                                <button class="btn bg-night-sky text-white b-radius-0">Create New User</button>
                                <a href="{{ route('manage.users.index') }}" class="btn btn-danger b-radius-0">Cancel</a>
                            </div>
                            <div class="col-6">
                                <div class="position-relative form-group">
                                    <label for="roles" class="label">Roles</label>
                                    <input type="hidden" name="roles" id="roles" :value="rolesSelected">
                                    @foreach($roles as $role)
                                        <div>
                                            <b-checkbox type="is-success" v-model="rolesSelected" :native-value="{{ $role->id }}">
                                                {{ $role->display_name }}
                                            </b-checkbox>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var app = new Vue({
            el: '#app',
            data: {
                autopass: true,
                rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
            }
        })
    </script>
@endsection
