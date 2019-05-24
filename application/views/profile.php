<?php if( $this->session->userdata('email')){ ?>
	<h4>Welcome :  <?php echo $this->session->userdata('email'); }?></h4>
		<br>
		<a href="<?php echo site_url('users/user_login'); ?>">Logout</a> <br><br>
<?php
	echo anchor('users/index', 'Add User') ;
	 echo "<table border=1><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Mobile Number</th><th>Gender</th><th>Action</th></tr>";
	foreach($data as $row)
	  {
	  echo "<tr>";
		echo "<td>".$row->id."</td>";
		echo "<td>".$row->first_name."</td>";
		echo "<td>".$row->last_name."</td>";
		echo "<td>".$row->email."</td>";
		echo "<td>".$row->address."</td>";
		echo "<td>".$row->mobile."</td>";
		echo "<td>".$row->radio."</td>";
?>
		<td><a href="<?php echo site_url('users/delete_row/'.$row->id); ?>">Delete</a> <a href="<?php echo site_url('users/update/'.$row->id); ?>">Edit</a></td>
	</tr>

  <?php } ?>

   </table>