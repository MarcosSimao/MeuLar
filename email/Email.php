<?php
require_once 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
class Email{
    private $mail;
  public function __construct() {
   $this->mail = new PHPMailer();
    $this->mail->isSMTP();
     $this->mail->isHTML(true);
   $this->mail->isHTML($isHtml=true);
   $this->mail->Host = 'smtp.gmail.com'; 
   $this->mail->Port = 587;
$this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$this->mail->SMTPAuth = true;
$this->mail->Username = 'meularpet@gmail.com';
$this->mail->Password = 'meularpet123';
$this->mail->setFrom('meularpet@gmail.com', 'Meu Lar Pet');
  }
public function enviar($email,$senha,$link):bool{
  $this->mail->Subject = 'Titulo - Recuperar Senha';
$this->mail->Body = self::corpo($email,$senha,$link);
$this->mail->AltBody = 'This is a plain-text message body';
$this->mail->addAddress($email, 'usuario');
if (!$this->mail->send()) {
   return false;
} else {
    return true;
    
}  
}
 private function corpo($email,$senha,$link):string{
  $body = "<h1>meu lar pet</h1>";
  $body .= "<h3>recuperar senha</h3>";
  $body .= "<p>ola somos do meu lar pet  e seu email de acesso e :</p><br/>";
  $body .= "<strong>".$email."</strong>";
  $body .= "<p>e sua senha temporaria :</p>";
  $body .= "<strong>".$senha."</strong>";
  $body .= "<p>clique no link para acessar a pagina de mudanca</p>";
  $body.="<a href=".$link."><button>aqui</button></a>";
  return $body;
  
 }
}




