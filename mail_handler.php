<?php
	if(isset($_POST['submit'])){
		$name=$_POST['full-name'];
		$address=$_POST['your-address'];
		$number=$_POST['phone'];
		$state=$_POST['your-state'];
		$localG=$_POST['your-LG'];
		$landM=$_POST['landmark'];
		$quantity=$_POST['your-quantity'];
		$mail=$_POST['Email'];

		$to='olaitanfalolu02@yahoo.com'; // Receiver Email ID, Replace with your email ID
		$subject='ORDER';
		$message="Name :".$name."\n"."Phone :".$number."\n"."Email :".$mail."\n". "Address :".$address."\n". "State :".$state. "\n". "Local Gov :".$localG."\n". "landmark :".$landM."\n". "Ordered for  :"."\n\n".$quantity;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>