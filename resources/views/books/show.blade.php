@extends('layouts.master')

@section('title', "Great Library")

@section('content')

<div class="row mb-3">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 mx-auto mb-5 pr-0">
        <div class="card text-white bg-dark mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/images/{{$book->id}}.{{$book->image_format}}" alt="{{$book->title}}"
                        class="book-show img-fluid card-img" alt="{{$book->title}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="/books/{{$book->id}}/edit">
                                    <i class="fa fa-pencil fa-lg text-white" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <h4 class="card-title">{{$book->title}}<br />
                            <small class="text-muted">Written By {{$book->author}}</small>
                        </h4>
                        <p class="book-description">
                            {{$book->type}}, Published in
                            @isset($book->date_published) {{ $book->date_published or 'hah' }} @endisset
                            @empty($book->date_published) - @endisset
                        </p>
                        <hr style="border-color:white" />
                        <p class="book-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        @isset($book->pages)
                            <p class="card-text"><small class="text-muted">{{$book->pages}} Pages Long</small></p>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('js-file')
<script src="{{URL::asset('js/book_create.js')}}"></script>
@endsection