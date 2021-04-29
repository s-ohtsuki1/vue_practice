@extends('layouts/app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
    @include('layouts/nav')
    @foreach ($articles as $article)
    @include('articles.components.card')
    @endforeach
  </div>
@endsection
