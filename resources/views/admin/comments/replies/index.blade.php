@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Comments Replis</h2>
                <ol>
                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    <li><a href="{{ route('comments.index') }}">Comments</a></li>
                </ol>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row gy-4">
            <h1>Comment Replies Box</h1>
        </div>
    </div>
@endsection

