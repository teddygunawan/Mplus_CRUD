@extends('layouts.master')

@section('title', "Great Library")

@section('content')
<div class="row mb-3">
    @if ($books->isEmpty())
    <div class="mx-auto">
        <h3>No book is found. Try adding some <a href="/books/create">Here!</a></h3>
    </div>
    @else
    @foreach($books as $book)
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb-3">
        <div class="card">
            <img class="card-img-top img-thumbnail book-thumbnail"
                src="/images/{{$book->id}}.{{$book->image_format}}" alt="{{$book->title}}"
                alt="">
        </div>
        <a href="books/{{$book->id}}" class="stretched-link"></a>
    </div>
    @endforeach
    @endif
</div>
@endsection
