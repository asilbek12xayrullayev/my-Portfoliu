<?php
// Telegram ma'lumotlari
$botToken = "7725983750:AAFaw8brEN2qb6SBdKnhiHv6rORoiJX015Y"; // Bot token
$chat_id = "5270251186";     // Chat ID

// Formadan kelgan ma'lumotlar
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Xabar matni
$text = "New Contact Form Submission:\nName: $name\nEmail: $email\nMessage: $message";

// Telegram API orqali yuborish
$url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chat_id&text=" . urlencode($text);
file_get_contents($url);

// Optional: thank you page
header("Location: thankyou.html");
?>
