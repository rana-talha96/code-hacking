@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit User</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Edit User againt ID = {{ $user->id }}</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <img src="{{ $user->photo ? $user->photo->file : 'https://media.istockphoto.com/id/535851101/photo/male-silhouette-portrait-icon-with-question-mark-sign.jpg?s=1024x1024&w=is&k=20&c=-7OFe34s_c0xnyjUwg-fuX_HPsGO-kCCv2Idt16RCJA='}}" alt="" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    {!! Form::model($user, ['method'=> 'PATCH', 'url' => Route('users.update', $user->id), 'files' => true]) !!}
                    @csrf

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
                        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('photo_id', 'Select Photo:') !!}
                        {!! Form::file('photo_id', ['class' => 'form-control']) !!}
                    </div>

                    {{-- <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('confirm_password', 'Confirm Password:') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div> --}}
                    <br>
                    {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}


                    @include('includes.errors')
                </div>
            </div>



        </div>
    </section>
@endsection
