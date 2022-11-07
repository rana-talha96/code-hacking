@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit User</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Edit User againt ID = {{ $post->id }}</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <img src="{{ $post->photo ? $post->photo->file : 'https://media.istockphoto.com/id/535851101/photo/male-silhouette-portrait-icon-with-question-mark-sign.jpg?s=1024x1024&w=is&k=20&c=-7OFe34s_c0xnyjUwg-fuX_HPsGO-kCCv2Idt16RCJA=' }}"
                        alt="" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <br>
                    {!! Form::model($post, ['method' => 'PATCH', 'url' => Route('posts.update', $post->id), 'files' => true]) !!}
                    @csrf

                    <div class="form-group">
                        {!! Form::label('title', 'Post Title:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('body', 'Post Content:') !!}
                        {!! Form::text('body', null, ['class' => 'form-control']) !!}
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
                    <div class="form-group d-flex">
                        {!! Form::submit('Update Post', ['class' => 'btn btn-primary me-3']) !!}

                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE', 'url' => Route('posts.destroy', $post->id)]) !!}
                        {!! Form::submit('Delete Post', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>

                    @include('includes.errors')
                </div>
            </div>



        </div>
    </section>
@endsection
