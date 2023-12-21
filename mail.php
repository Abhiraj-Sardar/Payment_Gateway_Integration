<?php
//  echo var_dump($_POST);
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    if(isset($_POST["send"]))
    {
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='abhiraj123sardar@gmail.com';
        $mail->Password='qpvvwvkvtjqlinia';
        $mail->SMTPSecure='ssl';
        $mail->Port=465;

        $mail->setFrom('abhiraj123sardar@gmail.com');

        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);

        $mail->Subject="Received Donation";
        if(strlen($cmsg)==0)
        {
            $msg=$_POST["pmsg"];
        }
        else{
            $msg=$_POST["cmsg"];
        }
        $mail->Body="Hey There You Received a Donation of Rs.".$_POST["amount"]." Dated on ".$_POST["dob"]."\n".$msg;

        $mail->send();

        echo
        "
        <script>
            alert('sent Successfully');
            document.location.href='index.html';
        </script>
        ";

    }
?>