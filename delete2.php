<?php
 @include 'recipentConfig.php';

 if(isset($_GET['deleteid']))
 {
    $id=$_GET['deleteid'];
    $sql="delete from `recipentform` WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:adminManageRecipent.php');
    }
 }
?>