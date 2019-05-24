
	<?php if( $this->session->userdata('email')){ ?>
	Welcome <?php echo $this->session->userdata('email'); }?>
		<br>
		<a href="<?php echo site_url('users/logout'); ?>">Logout</a>