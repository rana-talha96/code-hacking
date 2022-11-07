@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>User Detail</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Users</li>
                </ol>
            </div>

        </div>
    </section>
    @if (Session::has('deleted_user') or Session::has('update_user') or Session::has('add_new_user'))
        @if(Session::has('deleted_user'))<div class="alert alert-danger"><h6>{{ session('deleted_user') }}</h6></div>@endif
        @if(Session::has('update_user'))<div class="alert alert-info"><h6>{{ session('update_user') }}</h6></div>@endif
        @if(Session::has('add_new_user'))<div class="alert alert-success"><h6>{{ session('add_new_user') }}</h6></div>@endif
    @endif
    <div class="container">
        <div class="row gy-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Active</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($users)
                        @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->is_active == 1 ? 'Yes' : 'No' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td><img height="50" src="{{ $user->photo ? $user->photo->file : 'No Photo' }}" alt=""></td>
                                <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
