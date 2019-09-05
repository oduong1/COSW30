<?php
   // Capture the data from our form
   $email = $_POST['email'];
   $password = $_POST['password'];

    // Create variable to match email and password against the database
    $correct_email = 'test@test.com';
    $correct_password = 'supersecure123';
    
    // Check if the data is good (isn't empty, matches our credentials)
    // if ($email == $correct_email) {
    //     //successful - check for password
    //     if ($password == $correct_password) {
    //         // successful - output success message
    //     }
    //     else {
    //         //output error message for password
            
    //     }
    // }
    // else {
    //     //fail - output an error message
 
    // }
    
    if ($email == $correct_email && $password == $correct_password) {
        //successful
        echo '<h1>you logged in successfully!</h1>';
        echo "<p>Email address: $email</p>";
        echo "<p>Password: $passwod</p>";
    }
    else {
        //display error message
        echo '<h1>Sorry... try again</h1>';
        echo '<a href="login.html">Go back</a>';
    }
    # == 
    
    // Output a little message
    
?>