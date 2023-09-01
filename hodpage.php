<?php
include("config.php");
session_start();
$sql="SELECT * FROM addstudent";
$result=mysqli_query($db , $sql);
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
    table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
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
                  <a class="nav-link mx-3 text-BLACK fs-5" href="viewreport.php"><u>Student Report</u></a>
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

      <div class="col-3">
        <div style="border:solid 2px white;min-height:200px ">
         
        

        </div>

      </div>
      <div class="col-6">
        <div style="border:solid 2px black;min-height:350px ">
        <table class="table"> 
          <thead class="thead-dark">
  <tr>
    <th scope="col">name</th>
    <th scope="col">email</th>
    <th scope="col">contact</th>
    <th scope="col">prn</th>
    <th scope="col">stream</th>
  
    
  </tr> 
  
</thead>
      
<?php  while($row=mysqli_fetch_assoc($result))
      { ?>   
  <tr>
      <td scope="row"><?php echo $row["name"] ?></td>

      <td><?php echo $row["email"] ?></td>


      <td><?php echo $row["contact"] ?></td>


      <td><?php echo $row["prn"] ?></td>


      <td><?php echo $row["stream"] ?></td>
    </tr>  
      <?php } ?>
      </table>
        </form>
</div>

      </div>
      <div class="col-4">
        <div style="border:solid 2px white;min-height:200px ">
          






        </div>

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