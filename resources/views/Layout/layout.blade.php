<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intital-scale=1">
    <link rel="stylesheet" href="css/app.css"> 
    <link rel="stylesheet" href="css/styles.css">
    </head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container-fluid">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand"> <a href="#">Laravel</a> </div>
           </div>
            <div class="collapse navbar-collapse" id="example-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contactUs">Contact Us</a></li>
                </ul>
            </div>
          </div> 
    </nav>
    @yield('content') 
    
    <!-- Js -->
    <script src="js/app.js"></script>
    <script src="js/custom.js"></script>
    
    </body>
</html>