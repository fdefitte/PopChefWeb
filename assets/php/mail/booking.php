<?php

// Check for empty fields

if(empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   //empty($_POST['message'])      ||
   empty($_POST['reservDate']) ||
   empty($_POST['numGuests']) ||
   empty($_POST['altDate']) ||
   empty($_POST['bookingTime']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
      echo "No arguments Provided!";
      return false;
   }
   
   $name = $_POST['name'];
   $email_address = $_POST['email'];
   $phone = $_POST['phone'];
   $reservDate = $_POST['reservDate'];
   $numGuests = $_POST['numGuests'];
   $altDate = $_POST['altDate'];
   $bookingTime = $_POST['bookingTime'];
   //$message          = $_POST['message'];

   // Create the email and send the message

   $to               = 'josh@jcthemes.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
   $email_subject    = "Website Booking: $name";
   $email_body       = "You have received a new message from your website booking form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nReservation Date: $reservDate\n\nAlternative Date: $altDate\n\nNumber of Guests: $numGuests\n\nBooking Time: $bookingTime\n\n";
   $headers          = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
   $headers          .= "Reply-To: $email_address";

   mail($to,$email_subject,$email_body,$headers);

   return true;         
?>