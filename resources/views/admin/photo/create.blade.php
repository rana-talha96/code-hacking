@extends('layouts.main')

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">

@endsection

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Upload Photos</h2>
                <ol>
                    <li><a href="{{ route('photos.index') }}">Photos</a></li>
                </ol>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row gy-4">
            
            {!! Form::open(['method'=>'POST', 'url' => Route('photos.store'),'class'=>'dropzone', 'files' => true]) !!}
            @csrf
            

            {!! Form::close() !!}


        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
@endsection