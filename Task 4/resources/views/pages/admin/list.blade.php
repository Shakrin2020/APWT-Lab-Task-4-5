@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Phone</th>
        </tr>
        @foreach($admin as $admins)
            <tr>
                <td>{{$admins->name}}</td>
                <td>{{$admins->phone}}</td>
            </tr>
        @endforeach
    </table>
@endsection