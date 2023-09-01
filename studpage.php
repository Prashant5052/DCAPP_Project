<?php
include("config.php");
session_start();
$sql="SELECT * FROM adddrives";
$result=mysqli_query($db , $sql);

if(isset($_POST["btnApply"]))
{
  echo $_POST["hdnId"];
}
if(!isset($_SESSION["username"])){
    header("location :myhome.php");
  }
?>



<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        h3 {
            text-align: center;
            color: purple;
        }

        h1 {

            /* text-align: center; */
            color: purple;
        }

        P {
            text-align: center;
            color: #707070;
        }

        table,
        th,
        td {
            border: 1px solid white;
            border-collapse: collapse;
        }

        th,
        td {
            background-color: #96D4D4;
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
                                    <a class="nav-link mx-3  text-black fs-5" href="#"><u> Campus</u></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="logout.php">Logout</a>
                                </li>
                                <li class="nav-item">
                                User : <?php echo $_SESSION["username"]; ?> 
                                </li>
                               
                                
                 
                             </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-3">
                <div style="border:solid 2px white;min-height:200px ">



                </div>

            </div>
            <div class="col-6">
                <div style="border:solid 2px white;min-height:450px ">
                    <form method="post">

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Id</th>
                                    <th scope="col">Job profile</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Stream</th>
                                    <th scope="col">Last date</th>
                                    <th scope="col">Job location</th>
                                    <th scope="col">Action</th>

                                </tr>

                            </thead>


                            <?php  while($row=mysqli_fetch_assoc($result))
      { ?>

<form method="post">
                            <tr>
                              <td>
                              <?php echo $row["id"] ?>
                              <input type="hidden" name="hdnId" value=" <?php echo $row["id"] ?>"/>
                              </td>
                                <td scope="row">
                                    <?php echo $row["company"] ?>
                                </td>

                                <td>
                                    <?php echo $row["jobprofile"] ?>
                                </td>


                                <td>
                                    <?php echo $row["stream"] ?>
                                </td>


                                <td>
                                    <?php echo $row["lastdate"] ?>
                                </td>


                                <td>
                                    <?php echo $row["joblocation"] ?>
                                </td>
                                <td><input type="submit" name="btnApply" value="Apply"></td>
                            </tr>
      </form>
                            <?php } ?>
                        </table>
                    </form>

                </div>

            </div>
            <div class="col-3">
                <div style="border:solid 2px white;min-height:200px ">







                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- <div style="border:solid 2px ;min-height:20px"> -->

                    <h3>Our Recruters</h3>


                    <a href="https://www.wipro.com" target="_main ">
                        <img src="wipro.png" alt="about wipro" height="100" width="100"> About Wipro</a>

                    <a href="https://www.infosys.com" target="_main ">
                        <img src="infosys.png" alt="about infosys" height="100" width="100">About infosys</a>
                    <a href="https://www.tcsnextstep.com" target="_main ">
                        <img src="tcs.png" alt="about tcs" height="100" width="100">About Tcs</a>
                    <a href="https://www.hexaware.com" target="_main ">
                        <img src="hexaware.png" alt="about hexaware" height="100" width="100">About hexaware</a>
                </div>
            </div>
        </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>