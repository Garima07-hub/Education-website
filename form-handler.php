<?php
$name = $_POST['name']; //yha square btacet mae wo name aaenge jo humne contact page ke 
// form mae input mae de rakhe hai it will store the name 
$visitor_email= $_POST['email'];  // it wills tore the email
$course =$_POST['course'];  // it will store the course
$message =$_POST['Message'];  //it will store the message

$email_from  = '07garimadhingra@gmail.com';

$email_subject ='New Form Submission';

$email_body ="User Name : $name.\n".
              "User Email: $visitor_email.\n".
              "Course : $course.\n".
              "User Message :$message .\n";

// email address where we want to get or receive the enqiry 

$to = '20001015022@jcboseust.ac.in';

$headers = "From:  $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to , $email_subject ,$email_body ,$headers);

header("Location :contact.html");



?>