@extends('layouts.app')

@section('content')
  @include('layouts.nav')
  <div class="container">
    @include('users.user')
    @include('users.components.tabs', ['hasArticles' => false, 'hasLikes' => true])

		@foreach ($articles as $article)
			@include('articles.components.card')
		@endforeach
  </div>
@endsection
