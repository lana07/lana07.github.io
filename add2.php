<?php
      $name = filter_input(INPUT_POST,'name');
      $email = filter_input(INPUT_POST,'email');
      $message = filter_input(INPUT_POST,'message');
      $errors=array();
      $mysqli = new mysqli("localhost", "lana07", "", "first_database");
      if(empty($name)){
        echo "<a href='email.php'>Back</a>";
        echo "<br>";
        echo "Name is required";
        
      }
      if(empty($email)){
        echo "<a href='email.php'>Back</a>";
        echo "<br>";
        echo "Email is required";
        
      }
      if(empty($message)){
        echo "<a href='email.php'>Back</a>";
        echo "<br>";
        echo "Message is required";
        
      }
      $sql = "INSERT INTO feedback (name, email, message)
      values ('$name','$email','$message')";
      if($mysqli->query($sql)){
        echo "<a href='email.php'>Back</a>";
        echo "<br>";
        echo "Message is sent";
      }
      $mysqli->close();
      
  ?>

