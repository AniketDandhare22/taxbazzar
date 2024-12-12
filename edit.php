<?php
  include "information.php";
  $FName = "";
  $LName = "";
   $Email = "";
   $Mobile ="";
   $Service = "";
   $Message = "";
   $FileAttach = "";
  
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location: http://localhost:3000/table1.php");
      exit;
    }
    $id= $_GET['id'];
    $sql = "select * from detail where Email='$id'";
    $result = mysqli_query($conn, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$row = mysqli_fetch_assoc($result);


    while(!$row){
     
      header("location: http://localhost:3000/table1.php");
      exit;
    }
  }
   else {
  $id = $_POST['Email'];
  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
   $Mobile = $_POST['Mobile'];
   $Service = $_POST['Service'];
   $Message = $_POST['Message'];
   $FileAttach = $_POST['FileAttach'];

  $sql = "UPDATE `detail` SET `FName`='$FName',`LName`='$LName', `Mobile`='$Mobile',`Service`='$Service' WHERE Email='$id'";
  $result = mysqli_query($conn, $sql);

    
  }
  
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Updates/edit details</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="x-icon" href="/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Update Data (Tax-Bazzar)</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/login.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index2.html">Add New</a>
            </li>
          </ul>
        </div>
      </div>
      
    </nav>
    <img src="/app.gif" class="edit11">
 <div class="col-lg-6 m-auto">
 <form action="/edit2.php
 " method="POST">
 
 <br><br><div class="card">
 <style>
  .edit11{
    z-index: -1;
    position: absolute;
    width: 942px;
    translate: -44px 169px;
  }
  .navbar-dark .navbar-brand:hover {
    color: #008ee0;
    cursor: pointer;
}
.navbar-dark .navbar-nav .nav-link:hover{
    color: #0095e0;
    cursor: pointer;
}
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}
.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}
.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}
      .bg-warning {
    border-radius: 10px;
    background-color: #006aff!important;;
    
    z-index: 0;
    }
    .btn-success {
    padding: 7px;
    width: 387px;
    color: #fff;
    background-color: #1ba86a;
    border-color: #28a745;
}
.btn-danger {
    translate: 408px -64px;
    padding: 7px;
    color: #fff;
    width: 356px;
    background-color: #dc3545;
    border-color: #dc3545;
}
        .card {
          position: relative;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          translate: 391px;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -ms-flex-direction: column;
          flex-direction: column;
          min-width: 0;
          padding: 22px;
          word-wrap: break-word;
          background-color: #fff;
          background-clip: border-box;
          border: 1px solid rgba(0,0,0,.125);
          border-radius: 0.25rem;
}
 </style>
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>
 <label> F-Name: </label>
 <input type="text" name="FName" value="<?php echo $row['FName']; ?>" class="form-control" required> <br>
 
 <label> L-Name: </label>
 <input type="text" name="LName" value="<?php echo $row['LName']; ?>" class="form-control" required> <br>

 <label> Email: </label>
 <input type="text" name="Email" value="<?php echo $row['Email']; ?>" class="form-control" required> <br>

 <label> Phone: </label>
 <input type="number" name="Mobile" value="<?php echo $row['Mobile']; ?>" class="form-control" required> <br>

 
 <label> Service: </label>
 <input type="text" name="Service" value="<?php echo $row['Service']; ?>" class="form-control" required> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-danger" type="submit" name="cancel" href="/table1.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
 