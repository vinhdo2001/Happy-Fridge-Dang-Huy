<?php include('partials-front/menu.php'); ?>


<section class="food-search text-center">
    <div class="container">
        
        <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
            <input type="search" name="search" placeholder="Search for Food.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>

    </div>
</section>





<section class="food-menu">
        <div class="container">
            <h2 class="text-center">Fridge Items</h2>

        <?php 
            $sql = "SELECT * FROM tbl_food WHERE active='Yes'";

          
            $res=mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            
            if($count>0)
            {
               
                while($row=mysqli_fetch_assoc($res))
                {
                   
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $timestamp= $row['timestamp'];
                    $image_name = $row['image_name'];
                    ?>
                    
                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                
                                if($image_name=="")
                                {
                                   
                                    echo "<div class='error'>Image not Available.</div>";
                                }
                                else
                                {
                                
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                     
                            <p class="food-time"><?php echo $timestamp; ?></p>
                            <?php
                                 if ($title == "Beef")
                                 {
                                      $validity = '2 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?>
                                
                                <?php
                                 if ($title == "Chicken")
                                 {
                                      $validity = '2 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?>

                                <?php
                                 if ($title == "Turkey")
                                 {
                                      $validity = '2 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?>

                                <?php
                                 if ($title == "Pork")
                                 {
                                      $validity = '3 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                 <?php
                                 if ($title == "Veal")
                                 {
                                      $validity = '3 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                 <?php
                                 if ($title == "Egg")
                                 {
                                      $validity = '5 weeks';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 
                                
                                <?php
                                 if ($title == "Salad")
                                 {
                                      $validity = '4 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?>  

                                <?php
                                 if ($title == "Salmon")
                                 {
                                      $validity = '2 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Tuna")
                                 {
                                      $validity = '3 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Apple")
                                 {
                                      $validity = '8 weeks';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Carrot")
                                 {
                                      $validity = '4 weeks';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Avocado")
                                 {
                                      $validity = '7 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Banana")
                                 {
                                      $validity = '5 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Broccoli")
                                 {
                                      $validity = '14 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Milk")
                                 {
                                      $validity = '1 week';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Lemon")
                                 {
                                      $validity = '4 weeks';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Strawberry")
                                 {
                                      $validity = '7 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Zucchini")
                                 {
                                      $validity = '5 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Watermelon")
                                 {
                                      $validity = '10 days';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 

                                <?php
                                 if ($title == "Garlic")
                                 {
                                      $validity = '6 months';
                                      $date = new DateTime ($validity);
                                      $todayDate = new DateTime();
                                      if ($date >= $todayDate) {
                                            echo "Your food is still valid until: <b>" . $date->format('d-M-Y') . "</b>";
                                            echo "<br><br>";
                                            echo "Your food is still valid!</b>";
                                      }else {
                                            echo $date->format('d-M-Y');
                                            echo "Your food has expired";
                                 }}
                                ?> 
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
               
                echo "<div class='error'>Food not found.</div>";
            }
        ?>

        

        

        <div class="clearfix"></div>

        

    </div>

</section>


<?php include('partials-front/footer.php'); ?>