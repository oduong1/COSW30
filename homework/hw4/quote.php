<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Favorite Quote</title>
            <style>
            #center {
            color: coral;
            font-family: fantasy;
            display: block;
            width: 70%;
            margin: auto;
        }
    </style>
        
    </head>
    <body>
        
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
    echo "<p>First three words are removed. Here are the $word_count words:</p>";
    echo "<ul>";
    foreach($words_array as $key => $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
else {
    
}
?>
    
        
    <div id="center">
    <h2>Your Favorite Quote</h2>
        <form action="quote.php" method="POST">

    <h4>Please enter a phrase of 5 or more words:</h4>
    <p>
        <input type="text" name="phrase" size="50" maxlength="150">
        <input type="submit" name="submit" value="Submit">
    </p>
 
        </form>
        </div>
    </body>
</html>