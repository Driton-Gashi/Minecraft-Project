<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './db_conn.php';


if (isset($_SESSION['username'])) {
    $name = $_GET['name'];
    $userEmail = $_GET['email'];
    $userMessage = $_GET['message'];

    // kodi qe ruan mesazhin ne database
    $sql = "INSERT INTO `messages`(`message`, `author`, `authorEmail`) VALUES (:userMessage,:userName,:userEmail)";
    $query = $pdo->prepare($sql);
    $query->bindParam(':userMessage', $userMessage);
    $query->bindParam(':userName', $name);
    $query->bindParam(':userEmail', $userEmail);
    $query->execute();

    // Kodi qe dergon emailin 
    require './PHPMailer.php';
    require './SMTP.php';
    require './Exception.php';


    $mail = new PHPMailer();
    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";

    $mail->SMTPSecure = "tls";

    $mail->Port = "587";

    $mail->Username = "forTestingPurposes2003@gmail.com";
    $mail->Password = "ksmkwdckvfpctcjh";

    $mail->Subject = "Message from you website";

    $mail->setFrom("forTestingPurposes2003@gmail.com");
    $mail->isHTML(true);
    $mail->Body = "
    <html>
        <head></head>
        <body>
            <table>
                <tr>
                    <th>Emri:</th>
                    <th>$name</th>

                </tr>
                <tr>
                    <th>Email:</th>
                    <th>$userEmail</th>
                </tr>
                <tr>
                    <th>Message:</th>
                    <th>$userMessage</th>
                </tr>
                <tr>
                </tr>
            </table>
        </body>
    </html>
    
    ";

    $mail->addAddress("Dritongashi1995@gmail.com");

    if ($mail->send()) {
        $_SESSION['EmailMessage'] = "Message was sent successfuly";
        $_SESSION['color'] = 'green';
    } else {
        $_SESSION['EmailMessage'] = "Message failed to be sent";
        $_SESSION['color'] = 'red';
    }
    $mail->smtpClose();

    header("Location: ../pages/Home.php");
} else {
    header("Location: ../index.php");
}
