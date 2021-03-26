<?php 

$db = new DB3();

if(isset($_POST['iin_auth']))
{   
    
   // $iin_auth = 930405450296;
    $iin_auth = 930405450296;
    $password_auth = md5($_POST['password_auth']);    
    $sql_logon = "select * from insurance.site_users where iin = '$iin_auth' ";
    $list_logon= $db->select($sql_logon);
    if(count($list_logon) > 0)
    {
        echo '0';
    }
    else {
        echo '1';
    }
             
     exit;
}



?>