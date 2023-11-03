
<?php

$name = $_POST['userName'];
$versiya = $_POST['userName1'];
$osnisp = $_POST['userName2'];
$priych = $_POST['userName3'];
$janr = $_POST['userName5'];
$fio = $_POST['userName6'];
$prod = $_POST['userName7'];
$kontakt = $_POST['userName8'];
$token = "6868567195:AAF1zd0Ta35VY0_1oWHETQQb9HL3TMJP_cs";
$chat_id = "-1002038908582";
$arr = array(
  'Название релиза:' => $name,
  'Версия/Подзаголовок:' => $versiya,
  'Основной исполнитель:' => $osnisp,
  'При участии:' => $priych,
  'Жанр:' => $janr,
  'Полное ФИО одного из артистов:' => $fio,
  'prod.by и т.д.(Если не нужно указывать, то оставьте поле пустым):' => $prod,
  'Контакт для связи (вк/тг):' => $kontakt
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
