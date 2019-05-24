<?php 
		
		$attributes = array('name' => 'product','id'=>'product','action'=>"");
		echo form_open_multipart('',$attributes );
		echo '<img src="http://localhost/CodeIgniter-3.1.10/upload/download.jpg" /><br/><br>';
		foreach($data as $row)
	{
		
		echo $row->name ;
		//echo "<td>".$row->."</td>";
		echo $row->price ;
		//echo "<button type='button' >Price:$300</button><br><br>";
		
		echo form_submit(['id' => 'submit', 'value' => 'Buy Now']);
?>
	<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
	<script>paypal.Buttons().render('body');</script>
  <?php } ?>
