<?php include('partials/menu.php'); ?>

<!-- Main section start  -->
   <div class="main-content">
       <div class="wrapper">
           <h1>Manage Category</h1>
            <br><br>
            <a href="<?php echo SITEURL ?>admin/add-category.php" class="btn-primary"> Add Category</a>
            <br><br>
            <?php if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
                if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }
            ?>

           <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Featured</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Actions</th>
                </tr>    

                <?php 
                $sql= "SELECT * FROM tbl_category ";
                $res= mysqli_query($conn,$sql);
                $count = mysqli_num_rows($res);
                $sn = 1;
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name= $row['image_name'];
                        $featured =$row['featured'];
                        $active=$row['active'];

                        ?>
                <tr>
                    <td><?php echo $sn++;?></td>
                    <td><?php echo $title;?></td>
                    <td>
                    
                
                    <?php 
                        if($image_name!="")
                        {
                            ?>
                            <img src="<?Php echo SITEURL; ?>images/category/<?php echo $image_name;?>" width="150x">
                            <?php
                        }
                        else {
                            echo "Image not add";
                        }
                    
                    ?>  
                    </td>
                    <td><?php echo $featured;?></td>
                    <td><?php echo $active;?></td>
                    <td class="tbl-full3">
                    <a href="<?php echo SITEURL;?>admin/update-category.php?id=<?php echo $id;?>" class="btn-secondary">Update Category</a>
                    <a href="<?php echo SITEURL;?>admin/delete-category.php?id=<?php echo $id;?>&image_name=<?php echo $image_name; ?>" class="btn-secondarydanger">Delete Category</a> 
                    </td>
                </tr>


                        <?php
                    }

                }
                else {
                    ?>
                
                    <tr>
                    <td colspan="6">No Category Added  </td>
                    </tr>
                    <?php 
                }



        
                ?>
           </table>
           <table class="tbl-full2">
               
    
           </table>
           
       </div>
    </div>
<!-- Main section end -->


<?php include('partials/footer.php'); ?>   