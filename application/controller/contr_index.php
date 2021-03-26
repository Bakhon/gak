<?php 



$db = new DB();



 /*   $sql_slider = "select * from INSURANCE2.CORPSITE_MAIN_SLIDER order by id DESC";
    $list_slider = $db -> Select($sql_slider); */
    
    $sql_slider = "select s.id, s.slide_head_ru, S.SLIDE_TEXT_RU, S.BTN_URL_RU, S.BTN_TEXT_RU, S.SLIDE_TEXT_KAZ, S.SLIDE_HEAD_KAZ, S.BTN_TEXT_KAZ, S.BTN_URL_KAZ, S.ROOT from INSURANCE2.CORPSITE_MAIN_SLIDER s order by id DESC";
    $list_slider = $db -> Select($sql_slider); 
       
    $sql_news = "select * from  (SELECT s.id,s.news_title_ru,s.news_date,s.news_title_kaz, upload_file  FROM INSURANCE2.site_news s ORDER BY news_date DESC)  where rownum < 5";
    $list_news_head = $db->select($sql_news);
    
    $sql_fin = "select * from INSURANCE2.CORP_SAIT_FININDICATORS where id in (1,2,3) order by id ASC";
    $list_fin = $db -> select($sql_fin);
    
        $sql_findate = "select * from INSURANCE2.CORP_SAIT_FININDICATORS where id = 21 order by id ASC";
    $list_findate = $db -> select($sql_findate);
    
    //обратный звонок c header
    if(isset($_POST['name']))
    {         

        $ch = curl_init();
        $cliet_name = $_POST['name'];
        $client_tel_num_req = $_POST['tel'];
        $cliet_email = $_POST['client_email_req']; 
        $city_from_client = $_POST['city_from_client'];
                       
      /*  
        $token = "1215377986:AAEZGnzTZmsDbc08CL9eDbIGTRPZWmv-OYY";
        $chat_id = "-404713636";
        $arr = array(
          'Имя пользователя: ' => $cliet_name,
          'Телефон: ' => $client_tel_num_req,
          'Email:' => $cliet_email
        );
        
        foreach($arr as $key => $value) {
          $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        */
        
          // История заявок 
         $sql_history_call = "INSERT INTO insurance2.CORPS_CALL(NAME, PHONE, POST_DATE, CATEGORY) values ('$cliet_name', '$client_tel_num_req', sysdate, '$cliet_email')";                
         $list_history_call = $db->execute($sql_history_call); 
        
           $url = "http://192.168.5.244/calc_sait?email_to_send=$cliet_email&client_name_req=$cliet_name&client_tel_num_req=$client_tel_num_req&city_from_client=$city_from_client";
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "i.akhmetov:Astana2016");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
      //  echo $output;
        
        curl_close($ch);

        exit;
    }
    
  //обратный звонок со страниц продуктов  
        if(isset($_POST['tel_sait']))
    {
        $ch = curl_init();
        $clientname = $_POST['name_calback'];
        $tel = $_POST['tel_sait'];
        $cliet_email = $_POST['mail']; 
        $city = $_POST['city'];
        $name_product = $_POST['name_product'];
        
           $url = "http://192.168.5.244/calc_sait?email_client=$clientname&name_client=$cliet_email&tel_client=$tel&city=$city&name_product=$name_product";
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "i.akhmetov:Astana2016");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        echo $output;
        
        curl_close($ch);
        
        exit;
    }



    if(count($_POST) > 0){        
        $ch = curl_init();
        
        $urls = '';
        $i = 0;
        foreach($_POST as $k=>$v){ 
            if($i > 0){ 
                $urls .= "&";
            }
            $urls .= $k."=".$v;
            $i++;
        }
        $url = "http://192.168.5.244/calc_sait?$urls";
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "i.akhmetov:Astana2016");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);                              
        echo $output;
        
        curl_close($ch);
        
        exit;
    } 
    
    
    $context = stream_context_create(array('ssl'=>array(
    'verify_peer' => false, 
    "verify_peer_name"=>false
    )));

libxml_set_streams_context($context);
    
    
    $url = "http://www.nationalbank.kz/rss/rates_all.xml";
   $dataObj = simplexml_load_file($url);
   
       if ($dataObj){
    foreach ($dataObj->channel->item as $item){
        $pubdate = $item->pubDate;
        if($item->title == 'USD'){
             $usd = $item->description;
        }
        if($item->title == 'EUR'){
             $eur = $item->description;
        }
        if($item->title == 'RUB'){
             $rub = $item->description;
        }
        
          
        }}

    
    
?>