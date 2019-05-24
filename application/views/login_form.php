<?php
if (isset($error)){
		echo "Invalid Account<br><br>";
	}

	echo form_open('users/user_login');
	
		echo form_label(' Email :');
		echo form_input(['id' => 'email', 'name' => 'email'])."<br><br>";
		echo form_error('email');
		echo form_label(' Password :');
		echo form_password(['id' => 'password', 'name' => 'password'])."<br><br>";
		echo form_error('password');
		
		echo form_submit(['id' => 'login', 'value' => 'Login']);
		echo anchor('users/index', 'Register', ) ;
	echo form_close();
?>