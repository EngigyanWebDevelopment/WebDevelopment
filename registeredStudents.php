<?php include 'connection.php' ?>
<html>
<title>Students Registered on website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Students Registered on website</h2>

  <table class="w3-table-all w3-card-4">
    <tr>
      <th>Student id</th>
      <th>name</th>
      <th>email</th>
	  <th>Password</th>
    </tr>
    <?php
		$sql = "select * from users";
		$result = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
				  <td>".$row['s_id']."</td>
				  <td>".$row['name']."</td>
				  <td>".$row['email']."</td>
				  <td>".$row['password']."</td>
				</tr>";
		}

	?>
  </table>
</div>

</body>
</html> 
