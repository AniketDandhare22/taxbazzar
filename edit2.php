<?php
include "information.php";
$FName = "";
$LName = "";
 $Email = "";
 $Mobile ="";
 $Service = "";
 $Message = "";
 $FileAttach = "";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
  if (!isset($_GET['id'])) {
    header("location: http://localhost:3000/table1.php");
    exit;
  }
  $id = $_GET['id'];
  $sql = "select * from detail where Email='$id'";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }

  $row = mysqli_fetch_assoc($result);

  if (!$row) {
    header("location: http://localhost:3000/table1.php");
    exit;
  }

  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
   $Email = $_POST['Email'];
   $Mobile = $_POST['Mobile'];
   $Service = $_POST['Service'];
   $Message = $_POST['Message'];
   $FileAttach = $_POST['Fill-Attach'];
} else {
  $id = $_POST['Email'];
  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
   $Mobile = $_POST['Mobile'];
   $Service = $_POST['Service'];
   $Message = $_POST['Message'];
   $FileAttach = $_POST['Fill-Attach'];

  $sql = "UPDATE `detail` SET `FName`='$FName',`LName`='$LName', `Mobile`='$Mobile',`Service`='$Service' WHERE Email='$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>alert('Successfully! Record Updated'); </script>";
    header("location: http://localhost:3000/table1.php");
    exit;
  } else {
    echo "<script>alert('Failed to update record. Please try again.'); </script>";
  }
}
?>
