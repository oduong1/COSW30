<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Population</title>
    <link rel="stylesheet" href="normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
  </head>
  <body >
    <container id="center_a"><h1>Major U.S. Cities</h1></container>

      <table>

    <?php

        $population = [
            "New York, New York" => "8,622,698",
            "Los Angeles, California" => "3,999,759",
            "Chicago, Illinois" => "2,716,450",
            "Houston, Texas" => "2,312,717",
            "Phoenix, Arizona" => "1,626,078",
            "Philadelphia, Pennsylvania" => "1,580,863",
            "San Antonio, Texas" => "1,511,946",
            "San Diego, California" => "950,715",
            "Jacksonville, Florida" => "892,062",
            "San Francisco" => "884,363",
            "Columbus" => "879,170",
            "Fort Worth" => "874,168"
        ];

//display original list
echo'        <th colspan="2">Population High to Low</th>';
echo '<tr><td>City</td><td>Population *</td></tr>';
          
        foreach ($population as $city => $pop) {
            echo " 
                <tr>
                  <td>$city</td>
                  <td>$pop</td>   
                </tr>\n";
            }
        
//display list by city  
ksort($population);

echo'        <th colspan="2">Alphabetical Order by City</th>';
echo '<tr><td>City</td><td>Population *</td></tr>';

        foreach ($population as $city => $pop) {
            echo " 
                <tr>
                  <td>$city</td>
                  <td>$pop</td>   
                </tr>\n";
            }
?>
        </tbody>
                <tfoot>
          <tr>
            <td colspan="3">* Data updated July 1, 2017.</td>
          </tr>  
        </tfoot>
      </table>
    
  </body>
</html>
