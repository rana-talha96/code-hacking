@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Register New User</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Register</li>
                </ol>
            </div>
            {!! Form::open(['url' => Route('users.store'), 'files'=>true ]) !!}
            @csrf
            <h1>Create Post</h1>

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active',array(1 => 'Active', 0 =>'Not Active'), 0, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Select Photo:') !!}
                {!! Form::file('photo_id', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('confirm_password', 'Confirm Password:') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>


            {{-- <input class="form-control" type="text" name="title" placeholder="Enter Title"><br>
        <input class="form-control" type="text" name="content" placeholder="Enter Content"><br> --}}
            <br>
            {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}


            @include('includes.errors')




        </div>
    </section>
@endsection
