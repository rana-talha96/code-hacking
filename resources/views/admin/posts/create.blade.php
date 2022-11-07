@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>User Detail</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Add Posts</li>
                </ol>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row gy-4">
            <h1>Add New Post</h1>
        </div>
    </div>
@endsection
