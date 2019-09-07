
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>{{ config('app.name', 'Lilly') }}</title>

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->  
<!-- js -->

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!-- js -->
                               
</head>
<body>

<div class="banner">
    <div class="header">    
            <div class="logo">
               <h1><a href="{{ url('/') }}"><i><img src="images/cell.png" alt=" " /></i>Lilly</a></h1>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="images/menu.png" alt=" " /></span>
                <ul class="nav1"> 
                    @if (Route::has('login')) 
                        @auth   
                            <a href="{{ url('/home') }}">Home</a>
                        @else                              
                            <li><a href="#" data-toggle="modal" data-target="#myModal4">Login</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal5">Register</a></li>                    
                        @endauth
                    @endif 
                </ul>                        
                <!-- script-for-menu -->
                 <script>
                   $( "span.menu" ).click(function() {
                     $( "ul.nav1" ).slideToggle( 300, function() {
                     // Animation complete.
                      });
                     });
                </script>
                <!-- /script-for-menu -->
            </div>               
            
            <div class="clearfix"> </div>
    </div>
    <div class="container">
        <div class="banner-info">
            <h3></h3>
        </div>
        <div class="buttons">            
            
        </div>
    </div>
</div>


<div class="content-bottom-two">
        <div class="col-md-6 content-left text-center">
            <img src="{{ asset('images/bbb5.png') }}" alt="" />
        </div>
        <div class="col-md-6 content-right text-center">
            <img src="images/bbb3.png" alt="" />
        </div>
        <div class="clearfix"></div>
        <div class="btm-pos">
            <h3>Lilly</h3>
            <p> Nam libero tempore, cum soluta 
            nobis est eligendi optio cumque 
            nihil impedit quo minus id quod 
            maxime placeat facere possimus, 
            omnis voluptas assumenda est. </p>
        </div>
</div>


<div class="footer">
    <div class="container">
        <h2><a href="index.html">Lilly</a></h2>
        <p>© 2019 Lilly. All Rights Reserved | Design by <a href="" target="_blank">Lilly</a></p>
        <ul>
            <li><a class="face1" href="#"></a></li>
            <li><a class="face2"href="#"></a></li>
            <li><a class="face3" href="#"></a></li>
            <li><a class="face4" href="#"></a></li>
        </ul>
    </div>
</div>



          

                     <!-- login -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                <div class="login">                                   
                                    <div class="login-right">
                                         <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                            <h3>Login with your account </h3>
                                            <input type="text" name="email" value="Enter your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your  Email';}" required=""> 
                                            <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">   
                                            <h4><a href="#">Forgot password ?</a></h4>
                                            <div class="single-bottom">
                                                <input type="checkbox" name="remember" id="brand" value="">
                                                <label for="brand"><span></span>Remember Me</label>
                                            </div>
                                            <input type="submit" value="Login" >
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>                                
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //login -->
            <!-- signup -->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-right">
                                         <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <h3>Create your account </h3>
                                            <input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                            
                                            <input type="text" name="email" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">  

                                            <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required=""> 

                                            <input type="text" name="password_confirmation" value="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required=""> 
                                            
                                            <input type="submit" value="CREATE ACCOUNT" >
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>                                
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //signup -->
<!-- for bootstrap working -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
</body>
</html>




     