<!DOCTYPE html>
<?php include 'dbconn.php';
session_start();?>
<html lang="en">

<?php include 'head.inc.php'; ?>

<body>
    
    <?php include 'navbar.php';?>

    <div class="container">
        
        <div class="row">
            
             <div class="col s12">
            <div class = "header_box_below" >
           <div class = "header_box_top">
            <h1 class="page_header">ADMIN</h1>
      </div>
      </div>
      </div>
            <div class="col s1">
			</div>
			<div class="col s10">
                <?php
                $sql = "SELECT * FROM `catalog`";
                $result = mysqli_query($conn, $sql);
					
                echo "<table border='1' class='striped'>
                <tr>
                <th>SKU</th>
                <th>Product</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Cost</th>
				<th>Price</th>
				<th>Weight</th>
				<th>Edit</th>
				<th>Delete</th>
                </tr>";
            
                while($row = mysqli_fetch_assoc($result)) {
                    print "\t<tr>\n";
					print "\t\t<td>".$row['SKU']."</td>\n";
					print "\t\t<td>".$row['Product']."</td>\n";
					print "\t\t<td>".$row['Category']."</td>\n";
					print "\t\t<td>".$row['Stock']."</td>\n";
					print "\t\t<td>".$row['Cost']."</td>\n";
					print "\t\t<td>".$row['Price']."</td>\n";
					print "\t\t<td>".$row['Weight']."</td>\n";
					print "\t\t<td><a href=\"edit.php?SKU=".$row['SKU']."\">Edit</a></td>\n";
					print "\t\t<td><a href=\"delete.php?SKU=".$row['SKU']."\">Delete</a></td>\n";
					print "\t</tr>\n";
                }
				
				echo "</table>";
                
            ?>
            </div>
			<div class="col s1">
			</div>
        </div>
    </div>
  
    <?php include 'footer.php'; ?>
    
    <?php include 'scripts.inc.php'; ?>

</body>

</html>
