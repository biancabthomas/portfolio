<?php 
if(isset($_POST['submit'])){
    $to = "bb_thomas@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    if(isset($_POST['title']) && !empty($_POST['title'])) {
        die();
    }
    echo "Your message has been sent. Thank you ";
    }
?>

if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    if(isset($_POST['title']) && !empty($_POST['title'])) {
        die();
    }
    echo 'Your message has been sent';
}