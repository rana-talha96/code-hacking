@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Posts Detail</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('posts.create') }}">Add New Posts</a></li>
                </ol>
            </div>

        </div>
    </section>
    @if (Session::has('deleted_post') or Session::has('update_post') or Session::has('add_new_post'))
        @if(Session::has('deleted_post'))<div class="alert alert-danger"><h6>{{ session('deleted_post') }}</h6></div>@endif
        @if(Session::has('update_post'))<div class="alert alert-info"><h6>{{ session('update_post') }}</h6></div>@endif
        @if(Session::has('add_new_post'))<div class="alert alert-success"><h6>{{ session('add_new_post') }}</h6></div>@endif
    @endif
    <div class="container">
        <div class="row gy-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Category</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($posts)
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        <img height="50" src="{{ $post->photo ? $post->photo->file : 'No Photo' }}" alt="">
                                    </a>
                                </td>
                                {{-- <td>{{ $post->photo_id }}</td> --}}
                                <td><a href="{{ route('posts.edit', $post->id) }}">Edit</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

