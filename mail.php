<?php

  $name = $_REQUEST['txtname'] ;  
    $email = $_REQUEST['txtemail'] ;  

  

mail("ktp1101@yahoo.com, patrick@liveads88.com", "MyDees Subscriber", 
"PERSONAL DETAILS:\n

Name: $name
Email: $email

"
,"FROM: $email");
  header( "Location: thankyou.html" );
?>
