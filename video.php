<?php
                            include "db.php";
                            $id=$_REQUEST['id'];
                            $q = "select * from videos where id=$id";
                            $res = mysqli_query($conn, $q);
                      $row = mysqli_fetch_array($res)
                            ?>

<!DOCTYPE html>
<html>
<head>
    <title>Video Popup</title>
    <style>
        /* Styles for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Styles for the video container within the modal */
        .modal-content {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
        }

        /* Styles for the close button */
        .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- The modal -->
    <div id="videoModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Close button -->
            <span class="close" id="closeVideo">&times;</span>
            
            <!-- Video embed code -->
            <iframe width="560" height="315" src="admin/<?php echo $row['video']; ?>" type="video/mp4" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    

    <script>
        // Get references to the modal and close button
        var modal = document.getElementById('videoModal');
        var closeBtn = document.getElementById('closeVideo');

        // Show the modal when the page loads
        window.onload = function() {
            modal.style.display = 'block';
        }

        // When the user clicks the close button or anywhere outside the modal, close it
        closeBtn.onclick = function() {
            modal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
        
    </script>
</body>
</html>
                       <!-- <div>
                            
                              <video controls width="400" height="200">
                              <source src="admin/<?php echo $row['video']; ?>" type="video/mp4">
                            </video>-->
                  /