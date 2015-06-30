<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!doctype html>
<html>
    <head>
        <!-- my head section goes here -->
        <!-- my css and js goes here -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
        <style>
            .login-form{ width: 50%; margin: 0px auto;}
            .form-signup{ width: 50%; margin: 0px auto;}
        </style>
    </head>
    <header>
        <ul style="list-style-type: none">
            <li style="float: left;padding-left: 5px;"><a href="{{URL::to('/login/editprofile/'.Auth::user()->id)}}">Edit Profile</a></li>&nbsp;&nbsp;&nbsp;
            @if(Auth::check())

            <li style="float: left;padding-left: 5px;"><a href="{{URL::to('/login/logout')}}">Logout</a></li>
            @else
            <li style="float: left;padding-left: 5px;"><a href="{{URL::to('/login')}}">Login</a></li>
            @endif
        </ul>
    </header>
    <body>
        <div class="container">
            <div class="row">
                <span>
                    @if(Session::has('create_message'))
                    <div class="alert alert-success">{{ Session::get('create_message') }}</div>

                    @endif 
                </span>
                <div class="col-md-6">
                    <div class="panel panel-cascade" draggable="true"> 
                        <div class="panel-heading bg-purple">
                            <h3 class="panel-title  text-white">
                                <span class="pull-right">
                                    <a href="#" class="panel-minimize"><i class="fa fa-chevron-up text-white">Welcome :  {!! Auth::user()->firstname!!}</i></a>
                                </span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p>This is your dashboard</p>
                        </div>
                    </div> <!-- / purple Panel -->

                </div>
            </div>

            <footer> @include('layout.footer') </footer>
        </div>
    </body>
</html>


