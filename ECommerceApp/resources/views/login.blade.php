<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="/css/welcome.css" rel="stylesheet">
        <link href="/css/login.css" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Shop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <i class="bi bi-cart-check-fill"></i><span>0</span>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <i class="bi bi-person-fill person-icon"></i>  
                             <div class="dropdown-content">
                                 <a href="/login">Login </a>
                                 <a href="#">Register</a>
                             </div>
                         </div>
                    </li>
                </ul>
              </div>
            </div>
          </nav>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class='form'>
                        <form action="/login-pass" method="POST">
                            @csrf
                            @method("GET")
                        <h2>Login</h2>
                        <br><br>
                        <input type="text" name="userName" placeholder='User Name'  />
                        @php
                        echo("<br>");
                            if(session("userName")=="null"){
                                echo("<p style='color:red'>User name is incorrect</p>");
                                session()->forget('userName');
                            }
                        @endphp
                        <br/><br/>
                        <input type="email" name="email" placeholder='Email' />
                        <br><br>
                        <input type="password" name="password" placeholder='Password' />
                        @php
                        echo("<br>");
                            if(session("password")=="null"){
                                echo("<p style='color:red'>Password is incorrect</p>");
                                session()->forget('password');
                            }
                        @endphp
                        <br><br>
                        @php
                            if(session("auth")=="null"){
                                echo("<p style='color:red'>Email does not exist</p>");
                                session()->forget('auth');
                            }
                            if(session("empty")=="null"){
                                echo("<p style='color:red'>Fields are Empty</p>");
                                session()->forget('empty');
                            }
                        @endphp
                        <br/>
                        <button class="btn-login">Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
