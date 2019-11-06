@extends('layouts.master')

@section('title', "Great Library")

@section('content')
<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mx-auto mb-5">
    <div class="card form-style">
        <div class="card-header text-center form-style">
            <h3>Edit Book - {{$book->title}}</h3>
        </div>
        <div class="card-body">
            <form id="edit-book" action="/books/{{$book->id}}" method="POST" enctype='multipart/form-data'>
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}" required>
                    <small class="form-text text-muted">Title to display for the book</small>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{$book->author}}"
                        required>
                    <small class="form-text text-muted">For multiple author, separate by comma</small>
                </div>
                <div class="form-group">
                    <label for="pages">Number of Pages</label>
                    <input type="number" class="form-control" id="pages" name="pages" value="{{$book->pages}}">
                </div>
                <div class="form-group">
                    <label for="date_published">Date Published</label>
                    <input type="date" class="form-control" id="date" name="date_published"  value="{{$book->date_published}}">
                </div>
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="bookType1" name="type" value="Novel"
                                required {{ $book->type == 'Novel' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="bookType1">Novel</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="bookType2" name="type"
                                value="Documentation" {{ $book->type == 'Documentation' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="bookType2">Documentation</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="bookType3" name="type"
                                value="Education" {{ $book->type == 'Education' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="bookType3">Educational</label>
                        </div>
                    </div>
                </div>
                <div class="row" id="preview-section">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <img id="uploaded-image" src="/images/{{$book->id}}.{{$book->image_format}}"
                            alt="{{$book->title}}" alt="Uploaded Image" class="img-thumbnail" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="book-cover" name="book_cover">
                                <label class="custom-file-label form-control" for="book-cover">Book Cover</label>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger mt-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row mt-5">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Submit Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('js-file')
<script src="{{URL::asset('js/book_update.js')}}"></script>
@endsection