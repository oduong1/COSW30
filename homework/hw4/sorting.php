<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sorting Arrays</title>
</head>
<body>
<table border="5" cellspacing="5" cellpadding="5" align="center">
<thead>
	<tr>
		<th><h2>City</h2></th>
		<th><h2>Population</h2></th>
	</tr>
</thead>
<tbody>
<?php # Script 2.8 - sorting.php
// Create the array:
        $population = [
            'New York, New York' => '8,622,698',
            'Los Angeles, California' =>'3,999,759',
            'Chicago, Illinois' => '2,716,450',
            'Houston, Texas' => '2,312,717',
            'Phoenix, Arizona' => '1,626,078',
            'Philadelphia, Pennsylvania' => '1,580,863',
            'San Antonio, Texas' => '1,511,946',
            'San Diego, California' => '950,715',
            'Jacksonville, Florida' => '892,062',
            'San Francisco' => '884,363',
            'Columbus' => '879,170',
            'Fort Worth' => '874,168'
        ];
$movies = [
	'Casablanca' => 10,
	'To Kill a Mockingbird' => 10,
	'The English Patient' => 2,
	'Stranger Than Fiction' => 9,
	'Story of the Weeping Camel' => 5,
	'Donnie Darko' => 7
];
// Display the movies in their original order:
// foreach ($population[1]) {
// 	$pop = number_format();
// }

echo '<tr><td colspan="2"><strong>In their original order:</strong></td></tr>';
foreach ($population as $city => $pop) {
	echo "<tr><td>$city</td>
	<td>$pop</td></tr>\n";
}
// Display the movies sorted by title:
ksort($population);
echo '<tr><td colspan="2"><strong>Sorted by city:</strong></td></tr>';
foreach ($population as $city => $pop) {
	echo "<tr><td>$city</td>
	<td>$pop</td></tr>\n";
}

?>
</tbody>
</table>
</body>
</html>