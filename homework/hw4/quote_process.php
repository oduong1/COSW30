<?php
    // look at chapter 2 for arrays

    $phrase = $_POST['phrase'];

    
    $words_array = explode(' ', $phrase); // converts string to array
    echo '<p>These are the words you enter:</p>';
    
    foreach($words_array as $index => $word){
        echo "<p>$index Value: $word</p>";
     }    
     

     
    $alpha_array = asort($words_array); // sort alphabetically
    echo '<p>Here are your words in alphabetical order:</p>';
    foreach($alpha_array as $key => $value){
        echo "<p>$key Value: $value</p>";
        
    }




    $reverse_alpha = rsort($alpha_phrase);
    echo '<p>Here are your words in reverse alphabetical order:</p>';
    foreach($reverse_alpha as $index => $wored){
        echo "<p>$index Value: $word</p>";
        
    }
    
    ?>
        
  