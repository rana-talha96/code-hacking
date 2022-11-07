@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Post Detail</h2>
                <ol>
                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    <li>Show Post againt ID = {{ $post->id }}</li>
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
                    <div class="row">
                        <div class="col-sm-3">
                            <h5>Title</h5>
                        </div>
                        <div class="col-sm-9">
                            {{ $post->title }}
                        </div>
                        <div class="col-sm-3">
                            <h5>Content</h5>
                        </div>
                        <div class="col-sm-9">
                            {{ $post->body }}
                        </div>
                        <div class="col-sm-3">
                            <h5>Post Category</h5>
                        </div>
                        <div class="col-sm-9">
                            {{ $post->category->name }}
                        </div>
                        <div class="col-sm-3">
                            <h5>Post Added by</h5>
                        </div>
                        <div class="col-sm-9">
                            {{ $post->user->name }}
                        </div>
                        <div class="col-sm-3">
                            <h5>Post Created at</h5>
                        </div>
                        <div class="col-sm-9">
                            {{ $post->created_at->format('d-M-Y') }}
                        </div>
                        <div class="col-sm-3">
                            <h5>Action</h5>
                        </div>
                        <div class="col-sm-9">
                            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
@endsection
