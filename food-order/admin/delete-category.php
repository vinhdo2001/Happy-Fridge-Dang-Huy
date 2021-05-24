<?php
    include('../config/constants.php');
        $id = $_GET['id'];
        $sql ="DELETE FROM tbl_category WHERE id=$id";
        $res= mysqli_query($conn,$sql);

        if($res==TRUE)
        {
            $_SESSION['delete']="Category Deleted Successfully";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
        else {
            $_SESSION['delete']="Failed to delete Category";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
?>