<?php 
session_start();

?>

<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        h5 {
            text-align: right;
            color: #6666FF;
        }
        h1 {

            text-align: center;
            color: darkorange;
        }
        
        h2{

            text-align: center;
            color: black;
            }

        P {
            text-align: center;
            color: #707070;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div style="border:solid 2px white;min-height:20px">
                    <img src="clg.jpg" alt="" height="150" width="100%">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div style="border:solid 2px white;min-height:20px">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">DCA placement Portal</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link mx-3 font-green fs-5" href="myhome.php"><u> Home</u> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="studlogin.php">Student Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="hodlogin.php">HOD Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="plogin.php">Principle login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="tpologin.php">TPO login</a>
                                </li>
                               
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div style="border:solid 2px white;min-height:450px ">
                <marquee behavior="60%" direction="left" height="80px" scrollamount="25" > <h1><b>Welcome to DCA Placement Portal</b> </h1></marquee>
                    
                    <header>
                        <div class="header-content">
                            <div class="header-content-inner">
                                
                                <hr>
                               <h2> <b>We are here to Build your Skills and Career with our Driven Passion and Reality.</b></h2><br>
                               <h2><img src="campus1.jpg " alt="" width="75%"></h2>
                                <!-- <P> <a href="../Drives/index.php" class="btn btn-primary btn-xl page-scroll">Current
                                        Drives</a></P> -->
                            </div>
                        </div>
                    </header>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div style="border:solid 2px white;min-height:20px">
                    <h5>Contact:vishnu@gmail.com </h5>
                </div>
            </div>
        </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>