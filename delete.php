<?php
include "information.php";

if($_SERVER["REQUEST_METHOD"]=='GET') {
    if(!isset($_GET['id'])) {
        header("location: http://localhost:3000/table1.php");
        exit;
    }
    
    $id = $_GET['id'];
    $sql = "select * from detail where Email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if(!$result || $result->num_rows == 0) {
        header("location: http://localhost:3000/table1.php");
        exit;
    }
    
    $row = $result->fetch_assoc();
    
    $FName = $row["FName"];
    $LName = $row["LName"];
    $Email = $row["Email"];
    $Mobile = $row["Mobile"];
    $Service = $row["Service"];
    $Message = $row["Message"];
    $FileAttach = $row["FileAttach"];

    $sql = "DELETE from detail where Email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    
    header("location: http://localhost:3000/table1.php");
    exit;
}
?>
