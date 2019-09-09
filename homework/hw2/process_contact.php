<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
	<link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
	<style type="text/css">
	body {
		font-family: 'Gayathri', sans-serif;
		color: #300ACC;
		margin: 10px 25px;
		text-align: left;
	}

	</style>
</head>
<body>
<?php 

// Print the submitted information:
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $amount = $_POST['amount'];
	if ($age == "0-17") {
		echo "<p>Thank you for your interest but you are too young.</p>";
		echo "<p>Come back when you are over 18 years of age.</p>";
	}

   else {	
	echo "<h4>Hello, <strong>{$_POST['name']}</strong></h4>";
	
		if ($amount > 0) {
			echo "<h5>Thank you for your contribution of $ <em>$amount</em>.</h5>";
			echo "<p>We will send you an email confirmation at <em>{$_POST['email']}</em>.</p>\n";
		}	
		else {
			echo "<h5>Thank you for your interest in our campaign.</h5>";
			echo "<p>We will send you a follow-up email at <em>{$_POST['email']}</em>.</p>\n";
		}

   }
?>
</body>
</html>
