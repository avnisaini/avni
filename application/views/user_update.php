
<?php 
$attributes = array('name' => 'update_form','id'=>'update_form','action'=>"site_url('users/update')");
	echo form_open_multipart('',$attributes );
	echo form_error();
	//echo '<input type="hidden" name="id" value=" echo $user->id;">'; 
	//echo "<pre>";
	//print_r($data);
	//echo "</pre>";
		//echo'<input type="hidden"  id="old"  name="old"  value='.$data['file'].'>';
		echo form_label('First Name :');
		echo form_input(array('id' => 'fname', 'name' => 'first_name' ,'value' =>$data['first_name']))."<br><br>";
		echo form_error('first_name');
		
		echo form_label('Last Name :'); 
		echo form_input(array('id' => 'lname', 'name' => 'last_name','value' => $data['last_name']))."<br><br>";
		echo form_error('last_name');
		
		echo form_label(' Email :');
		echo form_input(array('id' => 'email', 'name' => 'email','value' => $data['email']))."<br><br>";
		echo form_error('email');
		
		echo form_label(' Mobile No. :');
		echo form_input(array('id' => 'mobile', 'name' => 'mobile','value' => $data['address']))."<br><br>"; 
		echo form_error('mobile');

		echo form_label(' Address :');
		echo form_input(array('id' => 'address', 'name' => 'address','value' => $data['mobile']))."<br><br>";
		echo form_error('address');
		
		echo form_label(' Password :');
		echo form_password(array('id' => 'password', 'name' => 'password','value' => $data['password']))."<br><br>";
		echo form_error('password');
		
		echo form_label(' Gender :');
		echo '<input type="radio" name="radio" value="male">Male<input type="radio" name="radio" value="female" >Female<br><br>';
		 echo form_upload(['name'=>'image'])."<br><br>";
		echo form_submit(['id' => 'submit', 'value' => 'Submit', 'name'=>'update']);
		echo anchor('users/profile', 'Profile', ); 
	echo form_close(); ?>
