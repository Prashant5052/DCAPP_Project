<!--phplogincode-->
<?php
include("config.php");
session_start();

if(isset($_POST["btnLogin"])) 
{
$email=$_POST["txtemail"];
$prn=$_POST["txtpassword"];
$sql = "SELECT * FROM addstudent WHERE email = '".$email."' and prn = '".$prn."'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
    //   echo"2";
      if($count>0)
      {
        // echo"3";
       $_SESSION['username'] = $email;
        header("location:studpage.php");
      }
      else
      {
        // echo"4";
        $error = "Your Login Name or Password is invalid";
      }
      
    // If result matched $myusername and $mypassword, table row must be 1 row
}
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

            /* text-align: center; */
            color: purple;
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
                <div style="border:solid 2px white;min-height:20px ">

                    <nav class="navbar navbar-expand-lg navbar-light bg-RED">
                        <a class="navbar-brand" href="#">DCA placement Portal</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link mx-3" href="myhome.php">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3 text-black fs-5 " href="studlogin.php"> <u>Student
                                            Login</u></a>
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

            <div class="col-4">
                <!-- <div style="border:solid 2px black;min-height:200px ">

                    
                </div> -->

            </div>
            <div class="col-4">
                <div style="border:solid 2px WHITE;min-height:450px ">
                    <h1>Student Login</h1>
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"name="txtemail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"name="txtpassword">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <button type="submit"  class="btn btn-outline-primary" name="btnLogin"> Submit</button>

                    </form>


                </div>

            </div>
            <div class="col-4">
                <!-- <div style="border:solid 2px black;min-height:200px ">

                    
                </div> -->

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- <div style="border:solid 2px ;min-height:20px"> -->
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