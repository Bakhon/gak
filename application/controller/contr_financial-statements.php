<?php

$db = new DB();

$sql_submenu2 = "select * from INSURANCE2.CORPSUBMENU where menu_id = 4 order by ID";
    $list_submenu2 = $db -> Select($sql_submenu2);

$quarter = array(1,2,3,4);  


         session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];

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
 
 

    
         session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
    
                                     
    $id = $_POST['fin_id'];
    $y = $id;
    
    $quarter = array(1,2,3,4, 'Годовой отчет');   
   
   
 
        
    if(isset($_POST['fin_id_state_sait']))
    {
        $id  = $_POST['fin_id_state_sait'];
            $sql_elem = "select * from INSURANCE2.CORP_SAIT_ELEMS order by ID";
    $list_elem = $db -> Select($sql_elem);
           
      $y = $id;
           foreach($quarter as $a => $b)
                          {
                            if($b == 1) {
                                 if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.01.$y' and '31.03.$y' order by id";
                            $list_report = $db -> Select($sql_report); }
                            if($b == 2) {
                                 if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.04.$y' and '30.06.$y' order by id";
                            $list_report = $db -> Select($sql_report);  }
                            if($b == 3) {
                                if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.07.$y' and '30.09.$y' order by id";
                            $list_report = $db -> Select($sql_report);
                            }
                            if($b == 4) {
                                 if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.10.$y' and '29.12.$y' order by id";
                            $list_report = $db -> Select($sql_report);
                            }
                            if($b == "Годовой отчет"){
                                if($lang == 'RU')
                                {
                                $text = '';
                                }
                                else {
                                     $b = 'Жылдық қорытынды';
                                    $text = '';
                                }
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '30.12.$y' and '31.12.$y' order by id";
                            $list_report = $db -> Select($sql_report);
                            }
                           
                 //     print_r($list_report);
                  if($list_report) {
          $html = '<div class="b8">';  
          $html .= '<div class="b8-flex">';                
          $html .= '<p>'.$b.' '.$text.' </p><span>'.$list_elem[76]["TEXT_$lang"].': '.$list_report[0]['POST_DATE'].'</span>
            </div>';
        foreach($list_report as $k => $v)
                                           {
                                              if($v["NAME_$lang"] != '') {
       $html .= '              
              ';                                         
        $html .= '<div style="display: flex;justify-content: space-between;"><a href="?file_id='.$v['ID'].'" class="file">
              <img src="img/icon/pdf.svg" alt="">
              <span>'.$v["NAME_$lang"].'</span>
            </a>';
       $html .= '  
                                                                                                             
                        </div>';
                             
      
    } }
      $html .= '</div>';
            echo $html; } }
                                   
            exit;
            
       
    }


    

 
 
                      


?>