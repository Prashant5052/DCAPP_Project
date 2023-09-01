
<?php 

include("config.php");
session_start();
if(isset($_POST["btnSubmit"]))
{
  $name=$_POST["txtname"];
  $email=$_POST["txtemail"];
  $contact=$_POST["txtcontact"];
  $prn=$_POST["txtprn"];
  $dob=$_POST["txtdob"];
  $city=$_POST["txtcity"];
  $gender=$_POST["ddlgender"];
  $stream=$_POST["ddlstream"];
  
  $sql="INSERT INTO addstudent (name, email, contact, prn, dob, city, gender, stream) VALUES ('".$name."','".$email."' ,$contact, $prn, '".$dob."', '".$city."','".$gender."', '".$stream."')";
  $result=mysqli_query($db,$sql);

  echo'<script>alert("Student is Added")</script>';

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
                  <a class="nav-link mx-3 text-black fs-5" href="addstudent.php"><u> Add Student</u></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-3" href="adddrives.php">Add Drives</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-3" href="createreport.php">Create Report</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-3" href="logout.php">Logout</a>
                </li>
               

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
        <h3><u>Add Student</u></h3>
          <form method="post">
            <div class="mb-3">
              <label for="exampleInputname1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputName" name="txtname">

            </div>
            <div class="mb-3">
              <label for="exampleInputemail" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputemail" name="txtemail" >
            </div>
            <div class="mb-3">
              <label for="exampleInputcontact" class="form-label">Contact</label>
              <input type="text" class="form-control" id="exampleInputcontact" name="txtcontact">
            </div>
            <div class="mb-3">
              <label for="exampleInputprn" class="form-label">PRN</label>
              <input type="text" class="form-control" id="exampleInputprn"name="txtprn">
            </div>
            <div class="mb-3">
              <label for="exampleInputdateofbirth" class="form-label">Date Of Birth</label>
              <input type="dateofbirth" class="form-control" id="exampleInputdateofbirth" placeholder="DD/MM/YYYY"name="txtdob">
            </div>
            <div class="mb-3">
              <label for="exampleInputcity" class="form-label">City</label>
              <input type="text" class="form-control" id="exampleInputcity"name="txtcity">
            </div>
            <div class="mb-3">
              <label for="exampleInputcompany" class="form-label">Gender</label>
              <select name="ddlgender" id="" class="form-select">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>

              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputcompany" class="form-label">stream</label>
              <select name="ddlstream" id="" class="form-select">
                <option value="BCS">BCS</option>
                <option value="BCS">BCA</option>
                <option value="BCS">IT</option>
              </select>
            </div>


            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit"  class="btn btn-outline-primary" name="btnSubmit"> Submit</button>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
          </form>

        





       
          
            
          
      </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>

</body>

</html>