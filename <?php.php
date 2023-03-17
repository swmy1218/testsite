<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'SwMy.H1218@gmail.com';
  $subject = 'お問い合わせがありました';
  $body = "お名前: $name\nメールアドレス: $email\nメッセージ:\n$message";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  if (mail($to, $subject, $body, $headers)) {
    echo '送信しました';
  } else {
    echo '送信に失敗しました';
  }
}
?>
