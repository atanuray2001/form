<?php

       $name =  $_POST['name'];
       $email = $_POST['email'];
       $number = $_POST['contact'];
       $week = $_POST['week'];

        $formcontent = " From: $name \n Email: $email \n Number: $number \n Week: $week";
       $tomail = "arenanewalipore@gmail.com";
       $subject = "Registation for Course Enquary";
       $mailheader = "from: $email \r\n";

       mail($tomail, $subject, $formcontent) or die("error !");
       echo "thank you!";

?>