<?php
include("config.php");
?>
<!---
<!doctype html>
<html>
  <head>
    <title>Upload and Store video to MySQL Database with PHP</title>
  </head>
  <body>
    <div>
 
     <?php/*
     $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       $name = $row['name'];
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='320px' ></video>     
          <br>
          <span>".$name."</span>
       </div>";
     }
     
     */?>
 <!--
    </div>

  </body>
</html>------------>

<?php
$query1 = mysqli_query($conn, "select * from videos where id='1' and status=1");
while ($qry1 = mysqli_fetch_assoc($query1)) {
    $vid = $qry1["video"];
}
?>

<video width="100%" controls>
    <source src="<?php echo $vid ?>;" type="video/mp4">
</video>
<br>
<button onclick="slowPlaySpeed()" type="button"><img src="../user/img/download.jpg" title="Slow Play" height="30px"></button>
<button style="margin-left:45px" onclick="nrmlPlaySpeed()" type="button"> play normal</button>
<button style="margin-left:45px" onclick="fastPlaySpeed()" type="button"><img src="../user/img/arrowRight.gif" title="Fast Play" height="30px"></button>

<script>
    var vid = document.getElementById("myVideo");

    function slowPlaySpeed() {
        vid.playbackRate = 0.3;
    }
    function nrmlPlaySpeed() {
        vid.playbackRate = 1.0;
    }
    function fastPlaySpeed() {
        vid.playbackRate = 5.0;
    }
</script>
