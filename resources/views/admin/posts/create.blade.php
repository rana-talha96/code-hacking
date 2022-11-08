@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Add New User</h2>
                <ol>
                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    <li>Add Post</li>
                </ol>
            </div>
            {!! Form::open(['url' => Route('posts.store'), 'files' => true]) !!}
            @csrf
            <h1>Create Post</h1>

            <div class="form-group">
                {!! Form::label('title', 'Post Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Post Content:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Select Photo:') !!}
                {!! Form::file('photo_id', ['class' => 'form-control']) !!}
            </div>

            <br>
            {!! Form::submit('Add Post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}


            @include('includes.errors')
        </div>
    </section>
@endsection
