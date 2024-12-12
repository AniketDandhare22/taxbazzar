<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="x-icon" href="/logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Database table</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">Tax-Bazzar (Admin Page)</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://aniketdandhareportfolio.000webhostapp.com/index.php">About Developer</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="/index2.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php
    include "information.php";
    echo "<div style='text-align:center;'>Successfully submitted</div>";
?>
<img src="/Data extraction-amico.png" class="vector">
<img src="/logo.png" alt="" style="
vertical-align: middle;
scale: 0.4;
position: absolute;
translate: 65px -37px;">
<p class="headinga">Welcome to TaxBazzar Admin Page!</p>
<style>
    .navbar-dark .navbar-brand:hover{
       color: dodgerblue;
    }
    .vector {
    z-index: -1;
    position: absolute;
    width: 380px;
    translate: 8px 163px;
    }
    .my-4 {
    margin-top: 1.5rem!important;
    margin-bottom: 1.5rem!important;
    translate: 250px;
}

.headinga{
    text-align: center; 
    margin-top: 0;
    margin-bottom: 1rem;
    font-weight: bolder;
    font-size: 30px;
    color: #3362cc;
    }

    .headinga:hover{
      color:#2c87b3;
    }
</style>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>F-NAME</th>
        <th>L-NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>Service-Selected</th>
        <th>Message</th>
        <th>File-Attach</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "information.php"; 
        $sql = "select * from detail";
        $result = $conn->query($sql);
        $total =  mysqli_num_rows($result);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <td>$row[FName]</td>
        <td>$row[LName]</td>
        <td>$row[Email]</td>
        <td>$row[Mobile]</td>
        <td>$row[Service]</td>
        <th>$row[Message]</th>
        <th>$row[FileAttach]</th>
        <td>
                  <a class='btn btn-success' href='edit.php?id=$row[Email]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[Email]'>Delete</a>
                </td>
      </tr>
      ";
        }
        echo "total number of people registered = $total ";
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>