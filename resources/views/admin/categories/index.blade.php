@extends('layouts.main')

@section('content')
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Add New Category</h2>
                    </div>
                    {!! Form::open(['url' => Route('categories.store')]) !!}
                    @csrf

                    <div class="form-group">
                        {!! Form::label('name', 'Category Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <br>
                    {!! Form::submit('Add Category', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
                <div class="col-sm-6">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>All Categories</h2>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created at</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if ($categories)
                                @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $category->id }}</td>
                                        <td><a href="{{ route('categories.edit', $category->id) }}">{{ $category->name }}</a></td>
                                        <td>{{ $category->created_at->format('d-M-Y') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
