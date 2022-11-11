@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Photo Detail</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('photos.create') }}">Upload Photos</a></li>
                </ol>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row gy-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Belongs To</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($photos)
                        @foreach ($photos as $photo)
                            <tr>
                                <td scope="row">{{ $photo->id }}</td>
                                <td>
                                    {{-- <a href="{{ route('posts.show', $photo->id) }}"> --}}
                                        <img height="50" src="{{ $photo->file ? $photo->file : 'No Photo' }}" alt="">
                                    {{-- </a> --}}
                                </td>
                                @if ($photo->user)
                                    <td>User:- {{ $photo->user->name }}</td>
                                @elseif ($photo->post)
                                    <td>Post ID:- {{ $photo->post->id }}</td>
                                @else
                                    <td>No User or Post ID</td>
                                @endif
                                <td>{{ $photo->created_at->format('d-m-Y') }}</td>
                                <td>{{ $photo->updated_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

