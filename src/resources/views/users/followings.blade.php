@extends('layouts.app')

@section('title', $user->name . 'のフォロー中')

@section('content')
  @include('layouts.nav')
  <div class="container">
	@include('users.user')
	@include('users.components.tabs', ['hasArticles' => false, 'hasLikes' => false])
	@foreach ($followings as $person)
      @include('users.components.person')
	@endforeach
  </div>
@endsection
