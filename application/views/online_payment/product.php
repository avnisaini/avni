<?php
	echo anchor('users/index', 'Add User') ;
	 echo "<table border=1><tr><th>ID</th><th>Name</th><th>Image</th><th>Price</th></tr>";
	foreach($data as $row)
	  {
	  echo "<tr>";
		echo "<td>".$row->id."</td>";
		echo "<td>".$row->name."</td>";
		echo "<td>".$row->image."</td>";
		echo "<td>".$row->price."</td>";
?>
		<td><a href="<?php echo site_url('users/delete_row/'.$row->id); ?>">Delete</a> <a href="<?php echo site_url('users/update/'.$row->id); ?>">Edit</a></td>
	</tr>

  <?php } ?>

   </table>