@extends('layout.default')
@section('content')
<div class="container-fluid">
    {!! Form::open(array('url' => 'login/loginuser', 'class' => 'login-form')) !!}
    <!--	<form class="login-form" action="admin/login/loginuser" method="post">-->
    <h3 class="form-title">Administrator Login</h3>
    <span>
        @if(Session::has('login_message'))
        <div class="alert alert-danger">{{ Session::get('login_message') }}</div>

        @endif 
    </span>
    <span>
        @if(Session::has('create_message'))
        <div class="alert alert-success">{{ Session::get('create_message') }}</div>

        @endif 
    </span>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Email Address</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>

            <input class="form-control placeholder-no-fix" type="text" value="" autocomplete="off" placeholder="Email address" name="email"/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            
            <input class="form-control placeholder-no-fix" type="password" value="" autocomplete="off" placeholder="Password" name="password"/>
            <!--JohnDoe-->
        </div>
    </div>
    <div class="form-actions">
       
        <button type="submit" class="btn green-haze pull-right">
            Login <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>		
    	
</form>
</div>
@stop