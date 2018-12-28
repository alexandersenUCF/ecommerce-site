<!DOCTYPE html>
<?php include 'dbconn.php'; 
session_start();?>
<html lang="en">

<?php include 'head.inc.php'; ?>

<body>

    <?php include 'navbar.php';?>

    <div class="container">
       

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12">
            <div class = "header_box_below" >
           <div class = "header_box_top">
            <h1 class="page_header">CATALOG</h1>
      </div>
      </div>
      </div>
                <?php
                    $rowcount = 0;
                    $sql = "SELECT * FROM `catalog`";
		            $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    while($row = $result->fetch_assoc()) {
                        
                        if ($rowcount == 0) {
                            echo '<div class="row"><div class="col s12 m4 content_header">';
                            include 'catalogitem.php';
                            echo '</div>';
                            $rowcount++;
                            }                        
                        else if ($rowcount < 3) {
                            echo '<div class="col s12 m4 content_header">';
                            include 'catalogitem.php';
                            echo '</div>';
                            $rowcount++;
                        }
                        else {
                            echo '</div>';
                            $rowcount = 0;
                        }
                    }
                ?>
            </div>
        
    </div>

   <? include 'footer.php' ?>

    <?php include 'scripts.inc.php'; ?>

</body>

</html>
