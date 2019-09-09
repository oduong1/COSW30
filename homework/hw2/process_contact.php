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
	}

	</style>
</head>
<body>
<?php 
// Print the submitted information:
   $age = $_POST['age'];
	if ($age == "0-17") {
		echo "<p>Thank you for your interest but you are too young.</p>";
		echo "<p>Come back when you are over 18 years of age.</p>";
	}
   else {
	echo "<h4>Thank you, <strong>{$_POST['name']}</strong>, for your interest in our campaign</h4>
	<pre>{$_POST['comments']}</pre>
	<p>We will send you an email at <em>{$_POST['email']}</em>.</p>\n";
   }
?>
</body>
</html>
