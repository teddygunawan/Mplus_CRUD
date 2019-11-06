@extends('layouts.master')

@section('title', "Great Library")

@section('content')
@if ($books->isEmpty())
<div class="row">
    <div class="mx-auto">
        <h3>No book is found. Try adding some <a href="/books/create">Here!</a></h3>
    </div>
</div>
@else
<div class="row mb-5">
    <div class="mx-auto">
        <h3>Today's Top Read</h3>
    </div>
</div>
<div class="row">
    @foreach($books as $book)
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mb-3">
            <img class="book-thumbnail img-fluid"
                src="/images/{{$book->id}}.{{$book->image_format}}" alt="{{$book->title}}" />
        <a href="books/{{$book->id}}" class="stretched-link"></a>
    </div>
    @endforeach
</div>
@endif
</div>
@endsection