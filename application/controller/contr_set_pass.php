<?php

$db = new DB3();
if(isset($_GET['iin']))
{
    $iin_ins =  $_GET['iin'];

} 


/* if($_SERVER['HTTP_REFERER'] == 'http://192.168.5.22/registration')
 {
    $iin_ins = $_POST['iin_client'];
    echo $iin_ins;
 } */
 
 if(isset($_POST['iin_client_psw']))
 {
    $iin_client_psw = $_POST['iin_client_psw'];
 }

if(isset($_POST['psw']))
{    
    $array = $db->select("select * from insurance.clients c where IIN = to_char($iin_ins)");  
  
    $list = $db->select("select * from insurance.site_users where iin = $iin_ins");
   
    $password = md5($_POST['psw']);
    $date = date('d.m.Y');
    $time = date('H:i:s');
    if(count($array) > 0)
    {
        if(count($list) <= 0)
        {
            $sql_insert_to_users = "INSERT INTO INSURANCE.SITE_USERS(IIN, PASSWORD, DATE_REG, TIME_REG) VALUES('$iin_ins', '$password', '$date', '$time')";
            $list_insert_to_users = $db->execute($sql_insert_to_users);   
            echo '0';  
        }
       else{
        echo '1';
       }
    }
    else{
        echo '2';
    }    
    exit;
}

?>