@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Category</h2>
            </div>
            {!! Form::model($category, ['method' => 'PATCH', 'url' => Route('categories.update', $category->id)]) !!}
            @csrf

            <div class="form-group">
                {!! Form::label('name', 'Category Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <br>
            <div class="form-group d-flex">
                {!! Form::submit('Update Category', ['class' => 'btn btn-primary me-3']) !!}

                {!! Form::close() !!}

                {!! Form::open(['method' => 'DELETE', 'url' => Route('categories.destroy', $category->id)]) !!}
                @csrf
                {!! Form::submit('Delete Category', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection
