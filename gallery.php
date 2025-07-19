<?php
include "header.php";
?>
<!-- about section -->
<style>
  body{
     /* background-image: url('img/kid4.jpg');Replace 'your-background-image.jpg' with the path to your image */
     background-color: pink;
    background-size: cover;
  }
  </style>
 
        
      <h4>Gallery</h4>


                    <div class="row g-2 pt-2">
                        <?php
                            include "admin/db.php";
                            $q = "select * from videos";
                            $res = mysqli_query($conn, $q);
                        while ($row = mysqli_fetch_array($res)) {
                            ?>
                        <div class="col-4">
                            <!--<img class="img-fluid bg-light p-1" src="admin/alt="">-->
                              <video controls width="400" height="200">
                              <source src="admin/<?php echo $row['video']; ?>" type="video/mp4">
                            </video>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
      
  <!-- end about section -->
 
