<?php
include("config.php");
session_start();
if(isset($_POST["btnSubmit"]))
{
  $company=$_POST["txtcompany"];
  $jobprofle=$_POST["txtjob"];
  $stream=$_POST["ddlstream"];
  $lastdate=$_POST["txtdate"];
  $joblocation=$_POST["ddllocation"];
  
  $sql="INSERT INTO adddrives (company, jobprofile, stream, lastdate, joblocation) VALUES ('".$company."','".$jobprofle."' , '".$stream."', '".$lastdate."','".$joblocation."')";
  $result=mysqli_query($db,$sql);
  
    echo'<script>alert("Data is Added")</script>';
 
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link mx-3" href="myhome.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-3 " href="addstudent.php">Add Student</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-3 text-BLACK fs-5" href="adddrives.php"><u>Add Drives</u></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-3" href="createreport.php">Create Report</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-3" href="logout.php">Logout</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link  mx-3 text-white fs-5" href="tpologin.php">TPO login</a>
                </li> -->

              </ul>

            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-4">
        <div style="border:solid 2px white;min-height:450px ">
          

        </div>

      </div>
      <div class="col-4">
        <div style="border:solid 2px white;min-height:450px ">
        <h3><u>Add Drives</u></h3>
          <form method="post">
            <div class="mb-3">
              <label for="exampleInputname1" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="exampleInputName" name="txtcompany">

            </div>
            <div class="mb-3">
              <label for="exampleInputjob" class="form-label">Job Profile</label>
              <input type="text" class="form-control" id="exampleInputjob" name="txtjob">
            </div>
            <div class="mb-3">
              <label for="exampleInputcompany" class="form-label">stream</label>
              <select name="ddlstream" id="" class="form-select">
                <option value="BCS">BCS</option>
                <option value="BCA">BCA</option>
                <option value="IT">IT</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputlastdate" class="form-label">last Date</label>
              <input type="lastdate" class="form-control" id="exampleInputlastdate" placeholder="DD/MM/YYYY" name="txtdate">
            </div>
            <div class="mb-3">
              <label for="exampleInputcompany" class="form-label">Job Location</label>
              <select name="ddllocation" id="" class="form-select">
                <option value="Pune">Pune</option>
                <option value="Banglore">Banglore</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
              </select>
            </div>
           
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <button type="submit"  class="btn btn-outline-primary" name="btnSubmit"> Submit</button>
          </form>

          <div class="col-4">
        <div style="border:solid 2px white;min-height:450px ">

          

        </div>

        





       
          
            
          
      </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>

</body>

</html>