<?php
if(isset($_POST['submit'])){
    $to = "aserkaraditi@gmail.com"; // Your email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "New Form Submission";

    $body = "Name: $name\nEmail: $email\n\n$message";

    if(mail($to, $subject, $body)){
        echo "Message sent successfully.";
    } else{
        echo "Message could not be sent.";
    }
}
?>
