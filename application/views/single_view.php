<?php
echo "<table border=1><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Mobile Number</th><th>Gender</th></tr>";
foreach($data as $row)
  {
  echo "<tr>";
	echo "<td>".$row['id']."</td>";
  echo "<td>".$row['first_name']."</td>";
  echo "<td>".$row['last_name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['address']."</td>";
   echo "<td>".$row['mobile']."</td>";
	 echo "<td>".$row['radio']."</td>";
?>
	</tr>
 
 <?php } ?>

   </table>