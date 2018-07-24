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
      <th>Enrollment id</th>
      <th>Student id</th>
      <th>Name</th>
	  <th>Course</th>
	  <th>Phone</th>
	  <th>email id</th>
    </tr>
    <?php
		$sql = "select * from enrollment";
		$result = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
				  <td>".$row['e_id']."</td>
				  <td>".$row['s_id']."</td>
				  <td>".$row['name']."</td>
				  <td>".$row['course']."</td>
				  <td>".$row['phone_no']."</td>
				  <td>".$row['email_id']."</td>
				</tr>";
		}

	?>
  </table>
</div>

</body>
</html> 
