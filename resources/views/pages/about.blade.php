@extends('app')
@section('content')
  <div class="title">About</div>


  @if (count($people))
  <h3>People I like </h3>
  <ul>
        @foreach ($people as $person)

            <li>{{$person}}</li>
        @endforeach
  </ul>
  @endif
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   </p>
@stop
