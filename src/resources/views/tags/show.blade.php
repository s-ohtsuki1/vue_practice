@extends('layouts.app')

@section('content')
  @include('layouts.nav')
  <div class="card mt-3">
    <div class="card-body">
      <h2 class="h4 card-title m-0">{{ $tag->hashtag }}</h2>
      <div class="card-text text-right">
        {{ $tag->articles->count() }}
      </div>
    </div>
		@foreach ($tag->articles as $article)
			@include('articles.components.card')
		@endforeach
  </div>
@endsection
