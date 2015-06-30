<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('bootstrap/js/jquery-1.3.2.min.js') }}
        
        <title>Authentication App With Laravel 5.1</title>
        <style>
            body {
                padding-top: 40px;
            }

            .form-signup, .form-signin {
                width: 400px;
                margin: 0 auto;
            }
        </style>

    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">  
                        <li>{{ HTML::link('login/register', 'Register') }}</li>   
                        <li>{{ HTML::link('users/login', 'Login') }}</li>   
                    </ul>  
                </div>
            </div>
        </div>
        <div class="container">
            @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
            @endif
            
            
            {{ $content }}
            
             
            
        </div>

    </body>
</html>