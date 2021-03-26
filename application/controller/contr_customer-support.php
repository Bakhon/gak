<?php

$db = new DB();


     session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];

$list_ask = $db->select("select * from insurance2.site_ask where category = 1 order by id DESC ");
$list_ask2 = $db->select("select * from insurance2.site_ask where category = 2 order by id DESC ");

$list_clients_supports = $db->select("select * from insurance2.CORPSITE_CLIENTS_SUPPORT where id != 1 order by id");
$list_clients_supports1 = $db->select("select * from insurance2.CORPSITE_CLIENTS_SUPPORT where id = 1 order by id ");


$sql_case = "select * from insurance2.CORPSITE_INSURANCE_CASE order by id ASC";
$list_case = $db->select($sql_case);

$list_service_q = $db->select("select * from insurance2.CORPSITE_SERVICE_Q order by id ASC");

$list_faq = $db->select("select * from INSURANCE2.DIC_FAQ_PRODUCTS");

$list_usefull_links = $db->select("select * from insurance2.CORPSITE_USEFUL_LINKS order by id");

   $sql_sopr = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 8 order by id ASC";
 $list_sopr = $db->select($sql_sopr);

$document = new Document();  

      $sqlJOB_SERVICE_NUM = 'select SERVICE_MARK_NUM from insurance2.CORPSITE_SERVICE_NUM where id = 1';
      $listJOB_SERVICE_NUM = $db -> Select($sqlJOB_SERVICE_NUM);
      $sequance = $listJOB_SERVICE_NUM[0]['SERVICE_MARK_NUM']; 
      
      
if(isset($_POST['end_opros']))
{    
     $dan = $_POST;
     $data = date('d.m.Y');
     $time = date('H:i:s');
     
      $sqlJOB_SERVICE_NUM = 'select SERVICE_MARK_NUM from insurance2.CORPSITE_SERVICE_NUM where id = 1';
      $listJOB_SERVICE_NUM = $db -> Select($sqlJOB_SERVICE_NUM);
 //     $sequance = $listJOB_SERVICE_NUM[0]['SERVICE_MARK_NUM'];  
      $sequance = $_SERVER['REMOTE_ADDR'];
                                               
          unset($dan['endtest']);
          foreach($dan as $k=>$v){
            $sql_opros = "INSERT INTO insurance2.CORPSITE_SERVICE_CLIENTS(ID_QUESTION, ID_ANSWER, DATA, TIME, IP_USER) values ('$k', '$v', '$data', '$time', '$sequance')";            
            $list_opros = $db->execute($sql_opros);
            }
                                                
      $sql_send_mail = "select q.id, q.QUESTION_RU, res.data, res.time, ans.answer, res.IP_USER 
      from insurance2.CORPSITE_SERVICE_CLIENTS res, insurance2.CORPSITE_SERVICE_Q q, insurance2.CORPSITE_SERVICE_ANS ans 
      where RES.ID_QUESTION = q.id and q.id = ANS.ID_QUESTION and RES.ID_ANSWER = ANS.ID and RES.IP_USER = '$sequance'";
      $list_send_mail = $db->select($sql_send_mail);
      $receip_mail_not = 'a.bekmukhambetova@gak.kz';
                  
             
        $question1 = $list_send_mail[0]['QUESTION_RU'];
        $ans1 = $list_send_mail[0]['ANSWER'];  
        $question2 = $list_send_mail[1]['QUESTION_RU'];
        $ans2 = $list_send_mail[1]['ANSWER'];
        $question3 = $list_send_mail[2]['QUESTION_RU'];
        $ans3 = $list_send_mail[2]['ANSWER'];
        $question4 = $list_send_mail[3]['QUESTION_RU'];
        $ans4 = $list_send_mail[3]['ANSWER'];
        $question5 = $list_send_mail[4]['QUESTION_RU'];
        $ans5 = $list_send_mail[4]['ANSWER'];
        $question6 = $list_send_mail[5]['QUESTION_RU'];
        $ans6 = $list_send_mail[5]['ANSWER'];
        $question7 = $list_send_mail[6]['QUESTION_RU'];
        $ans7 = $list_send_mail[6]['ANSWER'];
        $question8 = $list_send_mail[7]['QUESTION_RU'];
        $ans8 = $list_send_mail[7]['ANSWER']; 
        $ip_user = $list_send_mail[0]['IP_USER'];               
        $document->sendmail($receip_mail_not, 'Уведомление от сайта: оценка качество обслуживания', "
        Вопрос: $question1 - Ответ: $ans1 \r\n
        Вопрос: $question2 - Ответ: $ans2 \r\n
        Вопрос: $question3 - Ответ: $ans3 \r\n
        Вопрос: $question4 - Ответ: $ans4 \r\n
        Вопрос: $question5 - Ответ: $ans5 \r\n
        Вопрос: $question6 - Ответ: $ans6 \r\n
        Вопрос: $question7 - Ответ: $ans7 \r\n
        Вопрос: $question8 - Ответ: $ans8 \r\n
        IP пользователя: $ip_user
        "); 
                        
            $sql_update_last_JB_num = "update insurance2.CORPSITE_SERVICE_NUM set SERVICE_MARK_NUM =  SERVICE_MARK_NUM+1 where ID = 1";
            $list_update_last_JB_num = $db -> Execute($sql_update_last_JB_num);
                                        
            header("location: customer-support");     
}

if(isset($_POST['age']))
{
    
    $dan = $_POST;
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $service = $_POST['service'];
    $service_type = $_POST['service_type']; //array
    $insurance_company = $_POST['insurance_company']; // array
    $recomendation = $_POST['recomendation'];
    $uluch = $_POST['uluch']; //array
    $text_otkaza = $_POST['text_otkaza'];
    $alternativa = $_POST['alternativa'];
    $time = date('H:i:s');
    $date = date('d.m.Y');
    
    foreach($service_type as $k=>$v)
    {
        foreach($insurance_company as $n=>$m) {
            foreach($uluch as $y=>$z ){
                 $sql = "INSERT INTO insurance2.CORPSITE_OPROS_RES(SEX, AGE, SERVICE_TYPE, INSURANCE_COMPANY, RECOMENDATION, IMPROVMENTS, TEXT_OTKAZA, ALTERNATIV_INS_COMPANY, TIME_POST, DATE_POST) values ('$sex', '$age', '$v', '$m', '$recomendation', '$z', '$text_otkaza', '$alternativa', '$time','$date')";                
                 $list_opros = $db->execute($sql); 
            }
        }
        
              
       
        
    }
    
 

    
}



if(isset($_FILES['file_client']))
{

  
   $uploaddir = 'upload/'; // Relative path under webroot
        
        $uploadfile = $uploaddir . basename($_FILES['file_client']['name']);
      
        if (move_uploaded_file($_FILES['file_client']['tmp_name'], $uploadfile)) {
                
            } else {
           echo "File uploading failed.\n";
           } 
 
  $fio = $_POST['name'];
  $city = $_POST['city'];
  $phone = $_POST['tel'];
  $email = $_POST['email'];
  $type = $_POST['type'];
  $is_client = $_POST['is_client'];
  $text_jaloby = $_POST['text_jaloby'];
  $date = date('d.m.Y');
  $time = date('H:i:s');

  $sql = "INSERT INTO insurance2.CORPSITE_COMPLAINT(FIO, CITY, PHONE, TYPE_APPEAL, IS_CLIENT, TEXT_FROM, FILE_FROM, EMAIL, POST_DATA, POST_TIME) 
  values ('$fio', '$city', '$phone', '$type', '$is_client', '$text_jaloby', '$uploadfile', '$email', '$date', '$time')
  ";

  $list_sql = $db->execute($sql);  
}



    if(isset($_GET['file_id']))
{
    
    $file_id = $_GET['file_id'];
    $list_file_id = $db->select("select * from insurance2.CORPSITE_FILES where id = $file_id");
    $file = $list_file_id[0]["ROOT_$lang"];
    $file_name = $list_file_id[0]['NAME'];
    $file2 = mb_convert_encoding($file, 'windows-1251', 'utf-8');
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');        
    header('Content-Disposition: attachment; filename="'.basename($file2).'"');     
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file2));
    readfile($file2);
    exit;
    
}

?>