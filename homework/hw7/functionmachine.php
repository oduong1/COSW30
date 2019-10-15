<!DOCTYPE html
<head>
<meta charset=utf-8">
<title>Split the Bill></title>
<link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="styleshet">
<link rel="stylesheet" href="styles.css">
</head>

<body>
<div>

<h1>Let's Split That Bill</h1>
<img src="split.jpg">
<form action="functionmachine.php" method="post">
<?php
$checkAmt = 0;
$tipRate;
$numberInParty = 1;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
$checkAmt = $_POST['checkAmt'];
$tipRate = $_POST['tipRate'];
$numberInParty = $_POST['numberInParty'];

if((empty($checkAmt)) && (is_numeric($checkAmt) == false) && ($checkAmt <= 0)) {
$error_checkAmt = "Reenter the amount on your bill";
}
elseif(empty($tipRate)){
$error_tipRate = "Choose one choice from the list";
}
elseif((empty($numberInParty)) && (is_numeric($numberInParty) == false) && ($numberInParty <= 0)) {
$error_members = "Reenter the number in your party (1 or more);
}
else {
}
}

function tipCalculation($checkAmt, $tipRate)
{
$tip = round($checkAmt * $tipRate, 2);
return $tip;
}

function totalAmt($checkAmt, $tip)
{
$totalCharge = $checkAmt + $tip;
return $totalCharge;
}

function sharePerPerson($totalCharge, $numberInParty)
{
return $share = round($totalCharge / $numberInParty, 2);
}
?>

<label for="checkAmt">Enter the amount on your bill</label>
<input type="text" id="checkAmt" name="checkAmt" value ="0">
<?php
if(isset($error_checkAmt)) {
echo "<p>$error_checkAmt</p>";
}
else {
echo "<p>You entered $". $checkAmt ."</p>";
}
?>

<select name="tipRate" id="tipRate">
<option value="">How was the service?</option>
<option value=".20">Excellent - 20% tip</option>
<option value=".15">Can\'t complain - 15% tip</option>
<option value=".10">I\'m a little short - 10% tip</option>
<option value="0">Worst Service Ever!!! - $0 tip</option>
</select>

<?php
if(isset($error_tipRate)) {
echo "<p>$error_tipRate</p>";
}
else
{
switch ($tipRate) {
case .20:
tipCalculation($checkAmt, $tipRate);
echo "<p>The service was excellent - $" .$tip . " is 20% tip.</p>";
break;
case .15:
tipCalculation($checkAmt, $tipRate);
echo "<p>Looks like you\'re happy with the service - $" .$tip . " is 15% tip.</p>";
break;
case .10:
tipCalculation($checkAmt, $tipRate);
echo "<p>We can\'t be generous all the time - $" .$tip . " is 10% tip.</p>";
break;
case 0:
tipCalculation($checkAmt, $tipRate);
echo "<p>Too bad that you received lousy service. No tip this time.</p>";
break;
}
totalAmount($checkAmt, $tip);
?>

<label for="numberInParty>Enter the number in your party?</label>
<input type="text" id="numberInParty" name="numberInParty" placeholder="Natural number greater than 0" value ="1">

<?php
if(isset($error_members)) {
echo "<p>$error_members</p>";
}
else {
echo "<p>You entered $". $numberInParty ." people."</p>";
}
?>

<input type="submit" id="submit_button" name="split_it" value="Split It!">

<?php
sharePerPerson($totalCharge, $numberInParty);
echo "<p>Total charge for this meal is: " .$checkAmt . " + " . $tip . " = " .$totalCharge</p>";
echo "<p>Each person in your party of " . $numberInParty . " owes $" .$share </p>";
?>
</form>
</div>
</body>
