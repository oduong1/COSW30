<?php
    // look at chapter 2 for arrays

    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];
    
    $textExplode = explode(' ', $text); // converts string to array
    echo "<p>This is what you entered:</p>";
    foreach($textExplode as $key => $value) {
        echo "<p>$value</p>";
        
    }
    // shuffle($textExplode);
  

    
    // echo 'Text Explode';
    print_r($textExplode);
    
    $shuffledText = asort($textExplode); //return true or false only
    
    foreach($shuffledText as $key => $value){
        echo "<p>$key Value: $value</p>";
        
    }
  
echo "<p>If shuffle succeeded, returns 1: " . $shuffledText ."</p>";
print_r($shuffledText);
    
    
//         // use the implode function, to turn array back into a string
    $textImplode = implode(' ', $shuffledText);
    
//     // or output using a foreach loop
    
echo "<p>this is the put-back string: " . $textImplode ."</p>";
//     $numbers = range(1, 20);
//     shuffle($numbers);
//     foreach ($numbers as $number) {
//     echo "$number ";
// }
//   $text = "Tail boudin andouille kevin, cow jowl ball tip kielbasa. Buffalo flank ground round, shoulder salami swine beef ribs. Strip steak ground round ham porchetta cow capicola bresaola prosciutto ball tip corned beef buffalo pig meatloaf. Strip steak chicken landjaeger, short ribs flank hamburger ham corned beef. Shank venison shoulder kevin cow ham hock andouille t-bone. Chuck ham jowl fatback kevin prosciutto beef ribs ball tip bacon. Cupim hamburger bacon venison tongue.";
    
    for ($i = 0; $i < $numParagraphs; $i++) {
        // output a paragraph
        echo "<p>$textImplode</p>";
        echo '<p>' . $text . '</p>';
    }
    
    
?>