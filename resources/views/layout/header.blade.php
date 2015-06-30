<ul style="list-style-type: none">
    <li style="float: left;padding-left: 5px;"><a href="{{URL::to('/login/register')}}">Register Me</a></li>&nbsp;&nbsp;&nbsp;
   @if(Auth::check())
  
   <li style="float: left;padding-left: 5px;"><a href="{{URL::to('/login/logout')}}">Logout</a></li>
   @else
    <li style="float: left;padding-left: 5px;"><a href="{{URL::to('/login')}}">Login</a></li>
   @endif
</ul>