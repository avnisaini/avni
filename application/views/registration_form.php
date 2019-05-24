
<?php 

$attributes = array('name' => 'myform','id'=>'myform');
	echo form_open('',$attributes);
	if (isset($message)){
		echo "Data Inserted Successfully<br><br>";
	}
	
		echo form_error();
		echo form_label('First Name :');
		echo form_input(['id' => 'fname', 'name' => 'first_name'])."<br><br>";
		echo form_error('first_name');
		
		echo form_label('Last Name :'); 
		echo form_input(['id' => 'lname', 'name' => 'last_name'])."<br><br>";
		echo form_error('last_name');
		
		echo form_label(' Email :');
		echo form_input(['id' => 'email', 'name' => 'email'])."<br><br>";
		echo form_error('email');
		
		echo form_label(' Mobile No. :');
		echo form_input(['id' => 'mobile', 'name' => 'mobile'])."<br><br>"; 
		echo form_error('mobile');

		echo form_label(' Address :');
		echo form_input(['id' => 'address', 'name' => 'address'])."<br><br>";
		echo form_error('address');
		
		echo form_label(' Password :');
		echo form_password(['id' => 'password', 'name' => 'password'])."<br><br>";
		echo form_error('password');
		
		echo form_label(' Confirm Password :');
		echo form_password(['id' => 'cpassword', 'name' => 'cpassword'])."<br><br>";
		echo form_error('cpassword');
				
		//echo form_label(' Course :');
		//$option=array('Choose Course','MCA','MCOM','MBBS');
		//echo form_dropdown('course',$option)."<br><br>";
		
		//echo form_label(' Subject :');
		//$sub=array('PHP','JAVA','ACCOUNT','fhkkj','fjhjk');
		//echo form_multiselect('subject',$sub)."<br><br>";
		echo form_label(' Gender :');
		echo '<input type="radio" name="radio" value="male">Male<input type="radio" name="radio" value="female" >Female<br><br>';
		
		echo form_submit(['id' => 'submit', 'value' => 'Submit']);
		 echo anchor('users/user_login', 'Login', ) ;
	

	echo form_close(); ?>
