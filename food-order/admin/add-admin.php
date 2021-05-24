<?php include('partials/menu.php'); ?>
 <!-- Main section start  -->
 
 <div class="main-content">
       <div class="wrapper">
           <h1>Add Admin</h1>
        <br><br>

        <?php if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            
            ?>

        <form action="" method="POST">
        <table class="tbl-30">
            <tr>
                <td>Full Name: </td>
                <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
            </tr>

            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" placeholder="Enter Your Username"></td>
            </tr>
            
            <tr>
                <td>Password: </td>
                <td><input type="text" name="password" placeholder="Enter Your Password"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="submit" placeholder="Add Admin" class="btn-secondary"></td>
            </tr>

         </table>
         </form>

<?php include('partials/footer.php'); ?> 

<?php 
    //Process the value from Form and save it to Database


    //Check whether the submit button is click or not
    if(isset($_POST['submit']))
    {
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
    
        // Insert to mysqp Database
        $sql="INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
        ";

        // Execute Query and Save to Database
    }
    // Execute Query and Saving Data into Database
    $res= mysqli_query ($conn ,$sql) or die(mysqli_error());

    // Check the data inserted or not and display message 
    if($res==TRUE)
    {
        // echo "Data insert";
        $_SESSION['add']="Admin Added Successfully";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else {
        $_SESSION['add']="Failed to add Admin";
        header('location:'.SITEURL.'admin/add-admin.php');
    }


?>

