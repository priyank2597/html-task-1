<?php
	include 'config.php';

	// print_r($conn)."<br>";

	$result = mysqli_query($conn , "SELECT * FROM `information`");

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<table>
	<thead>
		<tr>
			<th>
				Sq. No.
			</th>
			<th>
				Name
			</th>
			<th>
				Action
			</th>
		</tr>
	</thead>
	<tbody>
	
		<?php

		$count = 1;
		while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td>
						<?php echo $count; ?>
					</td>
					<td>
						<?php echo $row['name'] ?>
					</td>
					<td>
						<button onclick="statusChange( `<?php echo $row['id']; ?>`)"> Entry </button>
					</td>
				</tr>
			<?php
		}
		?>
	</tbody>
</table>

<script>
	
	function statusChange(id){
		console.log("ID" , id);
		  $.ajax({
            url:"updateStatus.php", //the page containing php script
            type: "post", //request type,
            dataType: 'json',
           data: {id : id}
         }).then(function(result, err){
         	console.log("result" , result);
         	console.log("err", err);
         });





	}
 

</script>