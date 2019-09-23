<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Favorite Quote</title>
            <style>
            #center {
                font-family: fantasy;
                display: block;
                width: 70%;
                margin: auto;
            }
            h2, p {
                color: coral; 
                font-size: 1.1 em;
            }
    </style>
        
    </head>
    <body>
        <container id="center">
<?php
    // look at chapter 2 for arrays
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phrase = $_POST['phrase'];

    $words_array = explode(' ', $phrase); // converts string to array
 
    $word_count = count($words_array);

    echo "<p>These are the $word_count words you entered:</p>";
      echo "<ul>";
    foreach($words_array as $key => $value){
        echo"<li>$value</li>";
     }    
        echo "</ul>";

    asort($words_array); // sort alphabetically
    
    echo '<p>Here are your words in alphabetical order:</p>';
    echo "<ul>";
    foreach($words_array as $key => $value){
        echo "<li>$value</li>";
    }
        echo "</ul>";
        
        
    rsort($words_array);
    echo '<p>Here are your words in reverse alphabetical order:</p>';
     echo "<ul>";
    foreach($words_array as $key => $value){
        echo "<li>$value</li>";
    }
       echo "</ul>";
     
    array_push($words_array, "Life", "is", "beautiful!");

    $word_count = count($words_array);
        echo "<p>I added a few words. Here are the $word_count words:</p>";
     echo "<ul>";
    foreach($words_array as $key => $value){
        echo "<li>$value</li>";
    }
       echo "</ul>";
       
    // for ($i = 0; $i <3; $i++) {
    //   array_shift($words_array[$i]);  
    // }
    array_shift($words_array); 
    array_shift($words_array); 
    array_shift($words_array); 
    
    $word_count = count($words_array);
        echo "<p>First three words on the previous list are removed. </br>Here are the $word_count words:</p>";
     echo "<ul>";
    foreach($words_array as $key => $value){
        echo "<li>$value</li>";
    }
       echo "</ul>";
}
else {
    	echo '<div><h1>Error!</h1></div>
		<p class="text-danger">Please make sure every field is completed.</p>';
	}
	
    ?>


    <h2>Your Favorite Quote</h2>
        <form action="quote_process.php" method="POST">
        
            <p>Please enter a phrase of 5 or more words - no punctuations:<p>
            <p>
                <input type="text" name="phrase" size="50" maxlength="150" required>
                <input type="submit" name="submit" value="Submit">
            </p>
 
        </form

    </container>
 </body>
</html>
