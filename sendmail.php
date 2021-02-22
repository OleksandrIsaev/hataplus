<?php
echo("Hello");
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$adminLetter = "
    <h1 style='color: red'>New Order</h1>
    <p>Name: <strong>". $name ."</strong></p>
    <p>E-mail: <strong>". $email ."</strong></p>
    <p>Message: ". $message ."</p>
";
$clientLetter = "<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head><meta charset='UTF-8'><meta name='viewport' content='width=device-width,initial-scale=1'><title>Document</title></head><body style='margin:0'><style></style><table cellpadding='0' cellspacing='0' class='table' style='background-color:#fff;margin:0 auto;max-height:400px;width:600px'><tbody><tr><td colspan='2'><table style='width:100%'><tbody><tr class=''><td style='padding-left:30px' class='phone'><a class='toptop' href='#'><img class='sloy1' src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/logo.png' alt='Хештег'></a></td><td style='padding-right:30px;text-align:right' colspan='2'><p style='display:inline-block;margin:0' class='table2'><a href='+38 (097) 164-72-56' style='color:#2d3235;display:table;font-family:Arial;font-size:16px;font-weight:700;letter-spacing:0;line-height:30px;text-decoration:none'>+38 (097) 164-72-56</a> <a href='+38 (063) 216-41-04' style='color:#2d3235;display:table;font-family:Arial;font-size:16px;font-weight:700;letter-spacing:0;line-height:30px;text-decoration:none'>+38 (063) 216-41-04</a></p></td></tr></tbody></table></td></tr><tr class='hello'><td class='fonyk' style='background-image:url(https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/style.jpg);margin-top:20px;text-align:center;vertical-align:top'><img src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/polosa.png' alt='Полоса' style='vertical-align:top'><h1 style='color:#393d98;font-family:Arial;font-size:30px;font-weight:700;letter-spacing:1px;padding-top:10px;text-align:center'>Привіт, Міша!</h1><i style='color:#748098;font-family:Arial;font-size:18px;font-style:normal;height:40px;margin:0 auto;text-align:center;width:400px'>Отримали заявку на курс 'SMM (МАРКЕТИНГ В<br>СОЦМЕРЕЖАХ)', дякуємо за Ваш вибір!</i><h2 style='color:#393d98;font-family:Arial;font-size:24px;font-weight:700;letter-spacing:1px;text-align:center'>Відомості по Реєстрації</h2><p style='font-size:18px;padding-left:30px;text-align:left;width:570px' class='name'><b style='color:#3c465c;font-family:Arial;font-weight:18px'>Ваше ім’я:</b> <a style='color:#748098;font-family:Arial'>Міша</a><br><b style='color:#3c465c;font-family:Arial;font-weight:18px'>Номер телефону:</b> <a style='color:#748098;font-family:Arial'>+38(098)500-21-39</a><br><b style='color:#3c465c;font-family:Arial;font-weight:18px'>Email:</b> <a style='color:#748098;font-family:Arial'>Bedzinskiy.misha00@gmail.com</a><br><b style='color:#3c465c;font-family:Arial;font-weight:18px'>Напрямок навчання:</b> <a style='color:#748098;font-family:Arial'>SMM (МАРКЕТИНГ В СОЦМЕРЕЖАХ)</a><br><i style='color:#748098;font-family:Arial;font-size:15px;font-style:italic;height:40px;margin:0 auto;text-align:center;width:400px'>У разі помилки при реєстрації прохання перереєструватися.</i></p></td></tr><tr><td class='ditail' style='background-image:url(https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/sloy2.png);background-repeat:no-repeat;margin-bottom:1px;margin-left:20px;margin-right:1px;margin-top:1px;width:600px'><h3 style='color:#f6fafb;font-family:Arial;font-size:24px;font-weight:700;letter-spacing:1px;margin:20px;text-align:left'>Деталі навчання вам повідомлять<br>по телефону.</h3></td></tr><tr class='academy' style='text-align:center'><td><h4 style='color:#393d98;font-family:Arial;font-size:25px;font-weight:700;letter-spacing:1px;margin-top:45px'>Незабаром у нашій Академії</h4></td></tr><tr><td class='seoper'><table class='webdiz' style='background-color:#eaeaea;border-radius:5px;height:60px;margin-bottom:21px;margin-left:30px;width:540px'><tbody><tr><td><b style='display:inline-block;margin-left:12px;margin-top:2px;width:40px'><img src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/bloknot.png' alt='Блокнот'></b></td><td><i style='color:#3c465c;display:inline-block;font-family:Arial;font-size:20px;font-style:normal;font-weight:700;letter-spacing:1px'>WEB-ДИЗАЙН</i></td><td><a href='#' style='color:#366cd4;display:inline-block;float:right;font-family:Arial;font-size:18px;letter-spacing:1px;margin-right:20px;text-decoration:none'>Детальніше</a></td></tr></tbody></table><table class='webdiz1' style='background-color:#eaeaea;border-radius:5px;height:60px;margin-bottom:21px;margin-left:30px;width:540px'><tbody><tr><td><b style='display:inline-block;margin-left:12px;margin-top:2px;width:50px'><img src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/lupa.png' alt='Лупа'></b></td><td><i style='color:#3c465c;font-family:Arial;font-size:20px;font-style:normal;font-weight:700;letter-spacing:1px'>SEO-ПРОСУВАННЯ</i></td><td><a href='#' style='color:#366cd4;display:inline-block;float:right;font-family:Arial;font-size:18px;letter-spacing:1px;margin-right:20px;text-decoration:none'>Детальніше</a></td></tr></tbody></table><table class='webdiz2' style='background-color:#eaeaea;border-radius:5px;height:62px;margin-left:30px;width:540px'><tbody><tr><td><b style='display:inline-block;margin-left:12px;margin-top:2px;width:50px'><img src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/telefon.png' alt='Телефон'></b></td><td><i style='color:#3c465c;font-family:Arial;font-size:20px;font-style:normal;font-weight:700;letter-spacing:1px;text-align:center'>SMM (МАРКЕТИНГ<br>В СОЦМЕРЕЖАХ)</i></td><td><a href='#' style='color:#366cd4;display:inline-block;float:right;font-family:Arial;font-size:18px;letter-spacing:1px;margin-right:20px;text-decoration:none'>Детальніше</a></td></tr></tbody></table></td></tr><tr><td class='social' style='margin-top:28px;text-align:right'><p style='color:#3c465c;font-family:Arial;font-size:12px;margin-right:30px;margin-top:20px;text-align:right'>Ми у Соціальних Мережах</p><p style='color:#3c465c;font-family:Arial;font-size:12px;margin-right:30px;margin-top:20px;text-align:right'><a href='https://www.facebook.com/hashtag.it.academy'><img src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/face.png' alt='Полоса'></a><a style='margin-left:10px' href='https://www.instagram.com/hashtag.khm/?hl=uk'><img src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/inst.png' alt='Полоса'></a></p></td></tr><tr><td class='finish'><a href='#'><img src='https://raw.githubusercontent.com/OleksandrIsaev/heshteg/master/img/sloy4.png' alt='Кінець'></a></td></tr></tbody></table></body></html>";
// mail("hardlife777sms@gmail.com", "Order", $adminLetter, "Content-type: text/html; charset=utf-8");
// mail($email, "Your Order", $clientLetter, "Content-type: text/html; charset=utf-8");
require_once('../SMTP.php');
require_once('../PHPMailer.php');
require_once('../Exception.php');
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;
$mail=new PHPMailer(true);
try {
  $mail->SMTPDebug=2;
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->SMTPAuth=true;
  $mail->Username='hardlife777sms@gmail.com'; //login
  $mail->Password='0932992877Sms'; //password
  $mail->SMTPSecure='ssl';
  $mail->Port=465;
  $mail->setFrom('sender@whatever.com', 'Hashtag sender');
  $mail->addAddress('hardlife777sms@gmail.com'); //recipient
  $mail->isHTML(true);
  $mail->Subject='Subject'; //subject
  $mail->Body=$clientLetter; //message
  $mail->send();
  echo 'Message has been sent';
} 
catch(Exception $e) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: '.$mail->ErrorInfo;
}
?>