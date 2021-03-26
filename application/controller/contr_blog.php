<?php
 $db = new DB();
 $send_notificaton = new Document();
 require_once "methods/recaptchalib.php";
 $alerts = new ALERTS(); 
  //секретный ключ
$secret = "6LfH1tYZAAAAAEsi_96K3WPfyi-m5VE2HRfuj1OG";
//ответ
$response = null;
//проверка секретного ключа
$reCaptcha = new ReCaptcha($secret);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['phone_client'];
    $theme = $_POST['theme'];
    $text_sms = $_POST['text_sms'];
    if (!$_POST["g-recaptcha-response"] ) { 
        echo 1;
        exit;
        } 
 // echo $_POST["g-recaptcha-response"];
    //Валидация $_POST['name'] и $_POST['email']
    if ($_POST["g-recaptcha-response"]) {       
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
    
            $sql_id = "select INSURANCE2.SEQ_BLOG.NEXTVAL from dual";
            $list_seq = $db -> Select($sql_id);
            $seq = $list_seq[0]['NEXTVAL'];            
     
    if ($response != null && $response->success) {  
        $sql ="INSERT INTO INSURANCE2.BLOG (NAME, EMAIL, THEME, MESSAGE, POST_DATE, PHONE) VALUES ('$name', '$email', '$theme', '$text_sms', sysdate, '$tel')";  
        $list = $db->execute($sql);       
        $send_notificaton->sendmail('e.abdrasheva@gak.kz', 'Заявка от страницы блога!', "Заявка принято и зарегистрирована под номером №ОБ$seq. \r\n Имя: $name \r\n Почта: $email \r\n Номер телефона: $tel \r\n Тема сообщения: $theme \r\n Сообщения: $text_sms \r\n");
        $send_notificaton->sendmail('b.abdisamat@gak.kz', 'Заявка от страницы блога!', "Заявка принято и зарегистрирована под номером №ОБ$seq. \r\n Имя: $name \r\n Почта: $email \r\n Номер телефона: $tel \r\n Тема сообщения: $theme \r\n Сообщения: $text_sms \r\n");
        $send_notificaton->sendmail('a.kantarbayeva@gak.kz', 'Заявка от страницы блога!', "Заявка принято и зарегистрирована под номером №ОБ$seq. \r\n Имя: $name \r\n Почта: $email \r\n Номер телефона: $tel \r\n Тема сообщения: $theme \r\n Сообщения: $text_sms \r\n");                
        echo "Ваша заявка принята и зарегистрировано под номером №ОБ$seq";       
    } else {
      //  echo "Вы точно человек?";
    }
exit;
}



  
  
  

 ?>