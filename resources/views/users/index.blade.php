@extends('pages.master')

@section('title')
  Users
@stop

@section('data')
  <div>
      @foreach($users as $user)

      <h2><a href="/users/{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</a></h2>

    @endforeach

  </div>

  <div class="links">
    <a href="mailto:admin@admin.com?subject=topic, help">Email</a>
    <a href="https://twitter.com/RightToApply">Twitter</a>
    <a href="https://www.facebook.com/swiperighttoapply">Facebook</a>
    <a href="https://developer.apple.com/app-store/">iOS app</a>
  </div>
@stop

@section('footer')
<hr />
Thank you for looking at this Laravel tutorial.
@stop
