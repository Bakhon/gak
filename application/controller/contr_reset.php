<?php

$db = new DB3();
  require_once "methods/smsc_api_solvingit.php";
if(isset($_POST['reset_iin'])){
    $reset_iin = $_POST['reset_iin'];
        $sql = "
    select * from insurance.SITE_USERS where iin = $reset_iin
    ";
    $list = $db->select($sql);
    if(count($list) > 0){
        echo '1';
    }else {echo '0';}
    exit;
}

if(isset($_POST['phone_reset'])){

    $iin_reset = $_POST['iin_reset'];
    $phone_reset = $_POST['phone_reset'];
    session_start();
    $_SESSION['IIN_RESET'] = $iin_reset;
          $z = trim($_POST['phone_reset']);
        $str = str_replace("(", "", $z);
        $str2 = str_replace(")", "", $str);
        $str3 = str_replace("-", "", $str2); 
        //echo $str3;
        $returnValue = substr($str3, 1, 14);
        $returnValue2 = trim($returnValue);
        $str3=preg_replace('/\s+/', '', $returnValue2);
        $ch = curl_init();      
        $url = "http://192.168.5.202/test.php?iin=$iin_reset&phone=$str3";
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "n.omirbekov:Nurlan1988");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        
        $output = curl_exec($ch);

           $y = strlen($output);
      if($y == 10){
        $r = send_sms($_POST['phone_reset'], "Vash kod podtverzhdeniya: ".ok_code($_POST['phone_reset']));
        echo '1';
      }else{
        echo '0';
      }
    exit;              
}

 if (isset($_POST['ok'])) {
    $oc = ok_code($_POST['phone_res']);
    $code = $_POST['ok'];

   $code = (int)$code;
   
    if ($oc == $code)
       { echo '1';}
    else {
        echo '0';
        }
        exit;
}
    
    
    function ok_code($s) {
    return hexdec(substr(md5($s."<секретная строка>"), 7, 5));
}


if(isset($_POST['res_iin_set'])){
    
    $res_iin_set = $_POST['res_iin_set'];
    $res_pass_set = $_POST['res_pass_set'];
    $pass = md5($res_pass_set);
    $sql = "UPDATE INSURANCE.SITE_USERS SET PASSWORD = '$pass' where IIN = '$res_iin_set'";
    
    $list = $db->execute($sql);
    unset($_SESSION[IIN_RESET]);
    unset($_SESSION);
}

?>