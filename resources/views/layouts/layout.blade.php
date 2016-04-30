<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Haystack</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
    body {
        font-family: 'Lato';
    }

    .fa-btn {
        margin-right: 6px;
    }
    </style>

    <!-- sidebar -->
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                     Ajay Madhukar
                 </a>
             </li>
             <li class="sidebar-subtitle">MyApps</li>
             <li>
                <a href="#">My Leave</a>
            </li>

            <li>
                <a href="#">My Entitlement</a>
            </li>

            <li>
                <a href="#">My Claim</a>
            </li>

            <li>
                <a href="#">My Training</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid" id="content-container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <div class="navbar-header">
                             <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> -->
                            <!--  <a class="navbar-brand" href="#">Project name</a> -->

                            <button class="hamburger" id="menu-toggle">
                                <span class="hamburger-line"></span>
                                <span class="hamburger-line"></span>
                                <span class="hamburger-line"></span>
                            </button> 

                        </div> 
                    </div>
                </nav>

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->


<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>
<script src="{{asset('js/all.js')}}"></script>
</body>
</html>
