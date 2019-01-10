<?php
//header("Location: index.php");
include "config.php";



$sql = "SELECT id, name, mobile  FROM information";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) 
{
 
    while($row = mysqli_fetch_assoc($result))
     {
        echo "id: " . $row["id"]. " &nbspName: " . $row["name"]. " &nbspmobile:". $row["mobile"]."<br>";

     }
}

if (isset($_POST['submit']))
{
    // echo "$id";
    $name  = $_POST['nm'];
    $mobile = $_POST['mob'];
	mysqli_query($conn,"INSERT INTO information (name, mobile) VALUES ('$name','$mobile')");
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>


<br>
	<div class="container">
		<div class="row" style="width:250px;">
			<form action="database.php" method="post">

				

					<div class="row">
						<div class="col-md-4" style="float: left;">		
							<label>name:</label>
						</div>	
						<div class="col-md-8" style="float:right;">
							<div class="form-group">
								<input type="text" name="nm" class="form-control">
							</div>
						</div><br>


						<div class="row">
							<div class="col-md-4" style="float: left;">		
								<label>mobile:</label>
							</div>	
							<div class="col-md-8" style="float:right;">
								<div class="form-group">
									<input type="text" name="mob" class="form-control">
								</div>
							</div>

							<div class="row " style="width:250px;margin-left:125px;">
								<div class="form-group">
									<input type="submit" name="submit" value="submit" class="form-control">
								</div>
							</div>

						</form>

					</div>

				</div>



</body>
</html>