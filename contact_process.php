<?php
         $to = "ajaylondhe67@gmail.com";
         $subject = "This is subject";
         $name = $_REQUEST['name'];
         $phone = $_REQUEST['phone'];
    	 $subject = $_REQUEST['subject'];
    	 $messagess = $_REQUEST['message'];
         $email = $_REQUEST['email'];

         $message = "<b>You have a message from Shri Krishna Jewellers.</b><br>";
         $message .= "<b>Name:</b> {$name}<br>";
         $message .= "<b>Email:</b> {$email}<br>";
         $message .= "<b>Phone:</b> {$phone}<br>";
         $message .= "<b>Subject:</b> {$subject}<br>";
         $message .= "<b>Message:</b> {$messagess}<br>";
         
         $header = "From:enquiry.from.website.000@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         header("Refresh:1");
        //  if( $retval == true ) {
        //     echo "Message sent successfully...";
        //  }else {
        //     echo "Message could not be sent...";
        //  }
      ?>