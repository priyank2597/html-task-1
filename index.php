<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
</head>
<body>
<?php
include "config.php";

$sql = "SELECT * FROM information";
$result = mysqli_query($conn, $sql);

?>
<div class="container">
<div class="row">
	<table class="table">
		<thead>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Entry/Exit</td>
				
			</tr>
		</thead>
		<tbody>
			
   <?php
    while($row = mysqli_fetch_assoc($result))
     {

       ?>

       	<tr>
       		<td>
       			<?php echo $row['id']; ?>
       		</td>
       		<td>
       			<?php echo $row['name']; ?>
       		</td>
       		<td>
       			<input type="submit" name="time" value="Entry" onclick="<?php mysqli_query($conn,"INSERT INTO timing (entry_time,exit_time) VALUES ('$entry_time','$exit_time')");?>">
       		</td>
       	</tr>
       		
       <?php

     }


?>
		</tbody>
	</table>
</div>
</div>

<?php
?>

</body>
</html>

