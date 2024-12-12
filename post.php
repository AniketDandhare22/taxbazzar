

<?php
include "information.php";
       $FName = $_POST['FName'];
       $LName = $_POST['LName'];
        $Email = $_POST['Email'];
        $Mobile = $_POST['Mobile'];
        $Service = $_POST['Service'];
        $Message = $_POST['Message'];
        $FileAttach = $_POST['FileAttach'];
        $sql = "INSERT INTO `detail` (`FName`,`LName`, `Email`, `Mobile`,`Service`, `Message`,`FileAttach`) VALUES ('$FName','$LName', '$Email', '$Mobile', '$Service', '$Message','$FileAttach')";

            $query = mysqli_query($conn,$sql);

            if ($query) {
                echo "<script>alert('Successfully! Thank YOU for showing trust on us!');</script>";
                echo "<script>window.location.href = 'http://localhost:3000/index2.php';</script>";
            } else {
                echo "<script>alert('Unsuccessfully to Add Data. Please try again.');</script>";
                echo "<script>window.history.back();</script>";
            }
            
           
?>
