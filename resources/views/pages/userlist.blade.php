<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//dd($data);

?>
@extends('layout.default')
@section('content')

<div class="portlet box red">
    <span>
                    @if(Session::has('delete_message'))
                    <div class="alert alert-success">{{ Session::get('delete_message') }}</div>
                    @endif 
                </span>
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>User list
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
            <a href="#portlet-config" data-toggle="modal" class="config">
            </a>
            <a href="javascript:;" class="reload">
            </a>
            <a href="javascript:;" class="remove">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                           Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key =>$user)
                    <tr>
                        <td>
                            {!! $key !!} 
                        </td>
                        <td>
                           {!!  $user->firstname !!}
                        </td>
                        <td>
                           {!!  $user->lastname !!}
                        </td>
                        <td>
                           {!!  $user->email!!}
                        </td>
                        <td>
                           <span class="label  label-success">Update </span></a>&nbsp;
                            <a href="{{URL::to('/login/delete/'.$user->id)}}" style="color: white;"> <span class="label label-danger"> Delete </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

