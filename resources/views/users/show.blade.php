@extends('pages.master')

@section('title')
  {{$user->firstname}} {{$user->lastname}}
@stop

@section('header')
  {{$user->firstname}} {{$user->lastname}}
@stop

@section('data')
  <div>
    {{--print_r($user->getAttributes())--}}
    {{--print_r($user->toArray())--}}

    <table name="usertable">
      @foreach($user->toArray() as $key=>$value)
        <tr>
          <td>
            {{$key}}
          </td>
          <td>
            {{$value}}
          </td>
        </tr>
      @endforeach
    </table>
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
