 <?php
   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $msg = $_POST['msg'];
    
    $to ="mudmancrafts@gmail.com";
    $from =$email;
    $html="<!DOCTYPE html>
                <html>
                 <head>
                <style>
                table, th, td
                {
                    border:2px solid #000;
                    padding:5px;
                    
                }
                </style>
                        <meta charset='utf-8'>
                        <title></title>
                    </head>
                    <body>
                        <table style='border-collapse: collapse; width:70%'>
                             <th style='text-align:center; ' colspan='2'>Customer Enquiry Details</th>
                             <tr><th>Name:</th><td>$name</td></tr>
                             <tr><th>Email:</th><td>$email</td></tr>
                             <tr><th>Phone:</th><td>$phone</td></tr>
                             <tr><th>Address:</th><td>$address</td></tr>
                             <tr><th>Message:</th><td>$msg</td></tr>
                        </table>
                    </body>
                </html>
    ";
    $subject = "Mudmanfoods-Customer Enquiry Details";
    $message = $html;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: ".$email;

    //  mail($to,$subject,$message,$headers);


     if( mail($to,$subject,$message,$headers)){
        
            echo '<script> alert("Submit Successfully")</script>';
     }
     else{
         echo '<script> alert("Something went wrong") </script>'; 
     }
   }
   ?>
    
