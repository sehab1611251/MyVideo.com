<?php

if(isset($_POST['delete']))
{    
    
   // get id to delete
    $id = $_POST['id'];
    
    include "connection.php";

   
    
    // mysql delete query 
    $query = "DELETE FROM `userinfo` WHERE `id` = $id";
    
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'Data Deleted';
        header("location:admin_userview.php");
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($conn);
}

?>