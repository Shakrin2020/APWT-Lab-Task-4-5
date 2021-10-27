
@if(Session::get('user'))
        
        <h1>   Welcome {{Session::get('user')}} !</h1>
    

        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif