<?php

$conn = mysqli_connect("localhost", "root", "", "loan") or die("Connection error");
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    echo $id;
    $del_query="DELETE FROM `loan_data` WHERE 'ID'='$id'";
    
}
?>