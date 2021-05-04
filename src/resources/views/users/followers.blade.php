@extends('layouts.app')

@section('title', $user->name . 'のフォロワー')

@section('content')
  @include('layouts.nav')
  <div class="container">
    @include('users.user')
    @include('users.components.tabs', ['hasArticles' => false, 'hasLikes' => false])
    @foreach($followers as $person)
      @include('users.components.person')
    @endforeach
  </div>
@endsection
