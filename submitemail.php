 <?php
 $error="";
 $myemail="pabitrakhadka424@gmail.com";

 if(empty($_POST['name']) ||
 empty($_POST['email']) ||
 empty($_POST['message'])
 )
 {
    $error .="\n Error: All field are Required!!";
 }
 $name=$_POST['name'];
 $emailaddress=$_POST['email'];
 $message=$_POST['message'];
 
 if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
    if(empty(($error)))
    {
        $to=$myemail;
        $emailsub="contact form submission: $name";
        $emailbody="You have received a new Message.:"."here are the details:\n Name: $name\n".
        "Email : $emailaddress\n Message:\n $message";
        $headers="from :$myemail \n";
        $headers.="Reply to: $emailaddress";
        mail($to,$emailsub,$emailbody,$headers);
        //redirect to the 'thank you' page
        header('location: contact-form-thank-you.html');
    }

 ?>