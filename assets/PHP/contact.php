<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Send email
  $to = "3boffice2022@gmail.com";
  $subject = "رسالة من موقع الويب";
  $headers = "From: $email";

  mail($to, $subject, $message, $headers);

  // Display confirmation message
  echo '<div class="sent-message">تم الارسال</div>';
}
?>