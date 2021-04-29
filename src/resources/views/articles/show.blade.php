@extends('layouts.app')

@section('title', '記事詳細')

@section('content')
  @include('layouts.nav')
  <div class="container">
    @include('articles.components.card')
  </div>
@endsection
