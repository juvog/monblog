@extends('base')

@section('content')
    <h2 class="display-3 text-center"> {{ $article->title }}</h2>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="{{ route('articles') }}">
            <i class="fas fa-arrow-left"></i>Retour
        </a>

    </div>
    <h5 class="text-center my-3 pt-3"> {{ $article->subtitle }}</h5>
    <div class="d-flex justify-content-center">
        <span class="badge bg-info">{{ $article->category->label }}</span>
    </div>
    <div class="container">
        <p class="text-center">
            <img src="{{Voyager::image($article->image)}}" class="w-25 my-5"/>
        {{Markdown::parse($article->content)}}
        </p>

    </div>
@endsection
