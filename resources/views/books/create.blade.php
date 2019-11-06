@extends('layouts.master')

@section('title', "Great Library")

@section('content')
<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mx-auto mb-5">
    <div class="card form-style">
        <div class="card-header text-center form-style">
            <h3>New Book</h3>
        </div>
        <div class="card-body">
            <form id="create-book">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                    <small class="form-text text-muted">Title to display for the book</small>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                    <small class="form-text text-muted">For multiple author, separate by comma</small>
                </div>
                <div class="form-group">
                    <label for="pages">Number of Pages</label>
                    <input type="number" class="form-control" id="pages" name="pages">
                </div>
                <div class="form-group">
                    <label for="date_published">Date Published</label>
                    <input type="date" class="form-control" id="date" name="date_published">
                </div>
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="bookType1" name="type" value="Novel"
                                required checked>
                            <label class="custom-control-label" for="bookType1">Novel</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="bookType2" name="type"
                                value="Documentation">
                            <label class="custom-control-label" for="bookType2">Documentation</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="bookType3" name="type"
                                value="Education">
                            <label class="custom-control-label" for="bookType3">Educational</label>
                        </div>
                    </div>
                </div>
                <div class="row hide-element" id="preview-section">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <img id="uploaded-image" src="#" alt="Uploaded Image" class="img-thumbnail" />
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="book-cover" name="book_cover" required>
                                <label class="custom-file-label form-control" for="book-cover">Book Cover</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 hide-element" id="error-section">
                    <div class="col-12">
                        <div class="alert alert-danger text-danger">
                            <ul id="errors">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="success-modal" data-backdrop="static"
    style="background-color:black;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title text-success">Book Sucessfully Added!</h5>
            </div>
            <div class="modal-footer justify-content-center">
                <button id="add-more-book" type="button" class="btn btn-primary">Add More Book</button>
                <button id="view-book" type="button" class="btn btn-secondary">
                    View Added Book
                </button>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js-file')
<script src="{{URL::asset('js/book_create.js')}}"></script>
@endsection