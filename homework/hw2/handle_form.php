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
if ( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['age'])) {
	echo "<h4>Thank you, <strong>{$_POST['name']}</strong>, for your interest in our campaign</h4>
	<pre>{$_POST['comments']}</pre>
	<p>We will reply to you at <em>{$_POST['email']}</em>.</p>\n";
} else { // Missing form value.
	echo '<p>Please go back and fill out the form again.</p>';
}
?>
</body>
</html>
