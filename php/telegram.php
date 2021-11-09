<?php
/* https://api.telegram.org/bot1436962622:AAFu6HbkhTWLDsh8PoB8e_weUht72Vyrkgo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$textadress = $_POST['user_adress'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$text = $_POST['user_massege'];


$token = "1436962622:AAFu6HbkhTWLDsh8PoB8e_weUht72Vyrkgo";
$chat_id = "-294628320";
$arr = array(
  'Имя пользователя: ' => $name,
  'Адрес фирмы: ' => $textadress,
  'Email' => $email,
  'Телефон: ' => $phone,
  'Сообщение' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thankYou.html');
} else {
  echo "Error";
}
?>