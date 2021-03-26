<?php
$db = new DB3();
require_once "methods/smsc_api_solvingit.php";

if (isset($_POST['sendsms'])) {    
    $t = trim($_POST['phone']);   
    $number = trim(substr($t, 8, 13));
    
    $sql = "select * from insurance.clients where phone like '%$number%'";
   
    $list = $db->select($sql);
    
    $r = send_sms($_POST['phone'], "Ваш код подтверждения: ".ok_code($_POST['phone']));

    if ($r[1] > 0)
        echo "Код подтверждения отправлен на номер ".$_POST['phone'];
}

if (isset($_POST["ok"])) {
    $oc = ok_code($_POST["phone"]);

    if ($oc == $_POST["code"])
        echo "Номер активирован";
    else
        echo "Неверный код подтверждения";
}

function ok_code($s) {
    return hexdec(substr(md5($s."<секретная строка>"), 7, 5));
}
?>