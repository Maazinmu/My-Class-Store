<?php 
    // $to = "maazin1606@gmail.com";
    // $from = "pinimaazin@gmail.com";
    // $message = "Hi Maazin\n How are you doing today?\n Congratulations!";
    // $headers = "From: $from\n";
    // mail ($to, 'Testing', $message, $headers);



    
    // // The message
    // $message = "congrats";
    
    // // In case any of our lines are larger than 70 characters, we should use wordwrap()
    // $message = wordwrap($message, 70, "\r\n");
    
    // // Send
    // mail('maazin1606@gmail.com', 'My Subject', $message);
    
    

$to = 'pinimaazin@gmail.com';
$from = 'maazin1606@gmail.com';
$subject = 'testing php';
$message = 'you made it bro congrats';
$headers = 'From: maazin1606@gmail.com' . "\r\n" .
    'Reply-To:  pinimaazin@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?>

