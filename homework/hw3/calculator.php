<!DOCTYPE html>
	<html>
		<head>
			<meta charset=utf-8">
			<title>Tuition Calculator</title>
			<link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
			<style>
				body {
					background-color: #fff;
				    font-family: 'Gayathri', sans-serif;         
				    color: white;                                                                              
				}
	
				#container {
					width: 900px;
					margin-left: auto;
					margin-right: auto;
					padding-top: 50px;
					padding-bottom: 150px;
					background-color: #FF335B;
				  text-align: center;
				}
				
				img {
					display: block;
					margin-left: auto;
					margin-right: auto;
				}
				
				#calculator {
					width: 500px;
				  padding: 20px;
				  display: block;
					margin: auto;
				}
				
				h4 {
					color: black;
				  
				}
				#submit_button {
				  display: block; 
				  margin: auto;                               
				  border-radius: 4px;
				  background-color: green;
				  color: white;                               
				  font-size: 1em;
				  height: 40px;
				  width: 96px;
				  border: 0px solid;
				  }
				
				.numbers {
					font-weight: bold;	
				}
			</style>
		</head>

		<body> 
		



		<div id="container">
			<img src="image/lbcc.gif">
			<?php # Script 3.10 - calculator.php #5
			
			// Check for form submission:
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Minimal form validation:
				if (isset($_POST['units'], $_POST['residency'], $_POST['csc'], $_POST['parking']) &&
				 is_numeric($_POST['units']) && is_numeric($_POST['residency']) && is_numeric($_POST['csc']) && is_numeric($_POST['parking']) ) {
				 	
	 	
	 	
// This section calculates the cost of tuition.
	
	$residency = $_POST['residency'];
	$units = $_POST['units'];	
	$csc = $_POST['csc'];
	$parking = $_POST['parking'];
	$health = 20;
	$scholarship;
	$balance;
	

	if ($residency == 46) {
		$tuition = $units * 46;
		$fee = $tuition + $csc + $parking + $health;
		}
	else {
		$tuition = $units * 236;
		$fee = $tuition + $csc + $parking + $health;
		}
	
	$scholarship = rand(0, $tuition);
	$balance = $fee - $scholarship;
	 
  // End of calculation
  
  // Display results
  
	echo "<h1>Hello!</h1>";
	echo "<h4>Based on the information provided, \$$balance is the total amount due.</h4>";
	echo "<h4>Here is the summary:</h4>";
	echo '<h4>Tuition Cost: ' . $_POST['units'] . ' unit(s) * $' . $_POST['residency'] . ' = $' . $tuition . '.</h4>';
	echo "<h4>Student Health Fee: $20 </h4>";
	echo '<h4>College Services Card: $' . $_POST['csc'] . '.</h4>';
	echo '<h4>Parking Permit: $' . $_POST['parking'] . '.</h4>';
	echo "<h4>Scholarship granted: \$$scholarship</h4>";
	echo "<h4>Balance Due: \$$balance</h4>";
	
	 } else { // Invalid submitted values.
		echo '<div><h1>Error!</h1></div>
		<p class="text-danger">Please make sure every field is completed.</p>';
	}
} // End of main submission IF.	
?>		
		
		<!-- display form -->
		
			<div id="calculator">

				<form action="calculator.php" method="post">
		
				<h1>Tuition Calculator</h1>
					<h4>welcome :)</h4>
					<h3>Fill out this form to calculate the total cost of tuition</h3>
					
					<p>California Residency Status: 
						<select name="residency">
							<option>Choose a status</option>
							<option value="236">Non-Resident</option>						
							<option value="46">Resident</option>
						</select>
					</p>
					
					<p>Number of Units: 
						<select name="units">
							<option>Choose one</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
						</select>
					</p>
					
					<h4>Mandatory fee:</h4>
						<p>Health Fee of <input type="hidden" name ="healthfee" value="20" />$20</strong> is mandatory for all registered students</p>
					
					<h4>Optional fees:</h4>
					
					<p>College Services Card: 
						<select name="csc">
							<option>Choose an option</option>
							<option value="0">No [$0]</option>
							<option value="20">Yes [$20.00]</option>

						</select>
					</p>
					
					<p>Parking Permit: 
						<select name="parking">
							<option>Choose an option</option>
							<option value="0">No [$0]</option>						
							<option value="30">Yes [$30.00]</option>
						</select>
					</p>
					                 
					<button id="submit_button">Calculate!</button>
			
				</form>
			</div>
		</div>
	</body>
</html>