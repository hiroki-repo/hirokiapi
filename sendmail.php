<?php
  if(isset($_GET['body'])) {
      $message = $_GET['body'];
  }
  if(isset($_GET['to'])) {
      $toaddr = $_GET['to'];
  }
  if(isset($_GET['subject'])) {
      $subject = $_GET['subject'];
  }
// 本文
//$message = "Line 1\r\nLine 2\r\nLine 3";

// 1 行が 70 文字を超える場合のため、wordwrap() を用いる
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: robomitter@HirokiAPI.jp' . "\r\n" .
    'Reply-To: robomitter@HirokiAPI.jp' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// 送信する
if (mail($_POST["to"], $_POST["subject"], $_POST["body"], $headers)) {
echo "<script>window.close();</script>";
} else {
echo "<script>window.close();</script>";
}

?>