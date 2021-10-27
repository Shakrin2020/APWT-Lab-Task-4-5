@extends('layouts.app')
@section('content')
@if(Session::get('user'))
    <h2>Welcome {{Session::get('user')}} ! 
     This is you Home Page</h2>
@endif 

    <image src  = "{{ asset('images/home.jpg')}}" width = "1300px"  height = "500px">

    <h5> Want to log-out? <h5>  <a  class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@endsection