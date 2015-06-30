<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@extends('layout.default')
@section('content')

{!! Form::open(array('url'=>'login/create', 'class'=>'form-signup')) !!}
    <h2 class="form-signup-heading">Please Register</h2>
 
    <span>
        @if(Session::has('login_message'))
        <div class="alert alert-danger">{{ Session::get('login_message') }}</div>

        @endif 
    </span>
    
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Firstname:</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" value="" autocomplete="off" placeholder="First Name" name="firstname"/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Last Name:</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" value="" autocomplete="off" placeholder="Last Name" name="lastname"/>
        </div>
    </div>
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
          
        </div>
    </div>
    <div class="form-actions">
       
        <button type="submit" class="btn green-haze pull-right">
           Sign Up   <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>
    
{!! Form::close() !!}

@stop
