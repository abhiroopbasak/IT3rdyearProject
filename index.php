<?php
         /* Defining a PHP Function */
         function writeMessage() {
            echo "You are really a nice person, Have a nice time!";
            $username=username;
            $password=password;
            $yourl="http://52.66.204.194:8000/$password/$username"
            $html = file_get_html($yourl);     
         }    
         echo $html -> plaintext;
         /* Calling a PHP Function */
         writeMessage();
      ?>