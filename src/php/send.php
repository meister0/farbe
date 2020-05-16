<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Успешно отправлено</title>
</head>
<body>
  <?php
  $pol_time = $_GET['p'];
  $vernii_shifr = md5($pol_time."ivan");
  $pol_shifr = $_POST['zf'];
  $name = $_POST['Name'];
  $phone = $_POST['Tel'];
  $block = $_POST['last_name'];

  $name = htmlspecialchars($name);
  $phone = htmlspecialchars($phone);

  $name = urldecode($name);
  $phone = urldecode($phone);

  $name = trim($name);
  $phone = trim($phone);
  if($vernii_shifr == $pol_shifr && $block == ''){
    if (mail("antiseptic.tmn@gmail.com", "Заявка с сайта", "Имя: ".$name.".\nТелефон: ".$phone ,"From: info@antiseptic-tmn.ru \r\n"))
      {     echo "Сообщение успешно отправлено";
    } else {
      echo "При отправке сообщения возникли ошибки";
    }
  } else {
  echo "Не нужно здесь спамить";
  }
  
  //ini_set('display_errors','On');
  //error_reporting('E_ALL');
?>
</body>
</html>
