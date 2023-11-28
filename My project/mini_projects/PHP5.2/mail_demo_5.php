<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    //echo $name." ".$email." ".$subject." " .$message;

    require_once '../PHP5.2/PHPMailerAutoload.php';
    // require 'file:///D:/xamp/xammp/htdocs/sangeetha/PHP5.2/PHPMailerAutoload.php';

    $mail->SMTPDebug = 4;
    $mail = new PHPMailer(true);
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'msangeethaece2001@gmail.com';                    
    $mail->Password   = 'amtistwixbzywcce';                               
    $mail->SMTPSecure = 'ssl';           
    $mail->Port       = 465;      

    $mail->setFrom('msangeethaece2001@gmail.com');
    $mail->addAddress($email);     
    
    $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail-> submit();
    echo '<script>alert("Successfully!")</script>';

    if(!$mail->submit()) 
    {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
       exit;
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mail_Creation</title>
</head>
<body>
    <form method="post" action="#">
    <h1 align="center">Mail</h1>
    <table align="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Subject  </td>
            <td><textarea rows="3" name="subject" cols="21"></textarea></td>
        </tr>
        <tr>
            <td>Message  </td>
            <td><textarea  name= "message" rows="10" cols="21" placeholder="#Type......"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>