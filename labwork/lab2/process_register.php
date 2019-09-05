<?php
   // Capture the data from our form
   $email = ""; //set to empty first, the sticky form, so we can reuse value later
   $password = $_POST['password'];
   $conf_password = $_POST['conf_password'];

    // Create variable to match email and password against the database


    if ( $conf_password == $password) {
        //successful
        echo '<h1>You are registered!</h1>';


    }
    else {
        //display error message
        echo '<h3>Your passwords do not match. </h3>';
        echo '<a href="register.html">Try again</a>';
    }
    
    // Output a little message
        echo '<p>Look out for important announcements in your inbox, today!</p>';   
    
?>