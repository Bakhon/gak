<?php
    $db = new DB();
     header('Content-Type: text/html; charset=utf-8');

    
    //постоянные запросы
    $today_date = date('d.m.Y');
    $today_date_plus_15 = date("d.m.Y", mktime(0, 0, 0, date('m'), date('d') + 15, date('Y')));
    
    
    if(isset($_POST['add_news']))
    {        
        $SLIDE_HEAD_KAZ = $_POST['SLIDE_HEAD_KAZ'];
        $SLIDE_TEXT_KAZ = $_POST['SLIDE_TEXT_KAZ'];
        $SLIDE_HEAD_RU = $_POST['SLIDE_HEAD_RU'];
        $SLIDE_TEXT_RU = $_POST['SLIDE_TEXT_RU'];
      //  $emp_id = $_POST['emp_id'];
        $data = date('d.m.Y');


        $target_dir = "upload/"; 
       
        /*	$target_file = $target_dir . basename($_FILES['file_adm']['name']);
            $d = strlen($target_file); */

  
	$target_file = $target_dir . basename($_FILES['file_adm']['name']);
    $d = strlen($target_file);
    
    
  
	$msg = "";
     
    // $tr = mb_convert_encoding($_FILES['file_adm']['name'], "UTF-8");
     $tr = iconv('UTF-8', 'windows-1251' , $_FILES['file_adm']['name']);    
	if (move_uploaded_file($_FILES["file_adm"]["tmp_name"], $target_dir.$tr)) {
	    $msg = "Successfully uploaded";
	}else{
	 //   $msg = "Error while uploading";
	}
    

                        
  /*      
        $p['IMG_BASE'] = $_POST['doc_b64']; 
        $sql_to_slide = "insert into SITE_NEWS2 (ID, NEWS_DATE, THEME, NEWS_TITLE_RU, NEWS_TEXT_RU, NEWS_TITLE_KAZ, NEWS_TEXT_KAZ, NEWS_TITLE_ENG, NEWS_TEXT_ENG, IMG_BASE64) values 
                         (SEQ_SITE_NEWS.nextval, '$today_date', '1', '$SLIDE_HEAD_RU', '$SLIDE_TEXT_RU', '$SLIDE_HEAD_KAZ', '$SLIDE_TEXT_KAZ', '$SLIDE_HEAD_ENG', '$SLIDE_TEXT_ENG', EMPTY_CLOB())
                         RETURNING IMG_BASE64 INTO :IMG_BASE";
                                                                 
        $t = $db->AddClob($sql_to_slide, $p);
   */   
       
                
       $sql_to_slide = "insert into insurance2.SITE_NEWS (NEWS_DATE, THEME, NEWS_TITLE_RU, NEWS_TEXT_RU, NEWS_TITLE_KAZ, NEWS_TEXT_KAZ, IMG_BASE64, CREATE_DATA, UPLOAD_FILE) values 
                         (sysdate, '1', '$SLIDE_HEAD_RU', EMPTY_CLOB(), '$SLIDE_HEAD_KAZ', EMPTY_CLOB(), EMPTY_CLOB(), sysdate, '$tr')
                         RETURNING NEWS_TEXT_RU, NEWS_TEXT_KAZ INTO :NEWS_TEXT_RU, :NEWS_TEXT_KAZ 
                         ";
                         
      
                                         
                                                                                     
        $ps = array(
            'NEWS_TEXT_RU'=>$SLIDE_TEXT_RU,
            'NEWS_TEXT_KAZ'=>$SLIDE_TEXT_KAZ            
        );
                                
        $t = $db->AddClobArray($sql_to_slide, $ps);                                                                                                                                                             
    }
    
    if(isset($_POST['ID_UPD']))
    {      
       
        $ID_UPD = $_POST['ID_UPD'];       
        $SLIDE_HEAD_KAZ = str_replace("'", '"', $_POST['SLIDE_HEAD_KAZ_UPD']);
        $SLIDE_TEXT_KAZ = str_replace("'", '"', $_POST['SLIDE_TEXT_KAZ_UPD']);
        $SLIDE_HEAD_RU = str_replace("'", '"', $_POST['SLIDE_HEAD_RU_UPD']);
        $SLIDE_TEXT_RU = str_replace("'", '"', $_POST['SLIDE_TEXT_RU_UPD']);        
        $emp_id = $_POST['emp_id_upd'];
        $date_upd = date('d.m.Y');
        $time_upd = date('H:i:s');
        
           /*         
                 $em = $_SESSION[USER_SESSION]['login'].'@gak.kz';            
                 $q = $db->Select("select * from sup_person where email = '$em'");
                        
                  $id_user = $db->id_user = $q[0]['ID']; 
       
                
        if($MAIN_POST == ''){
            $MAIN_POST = 0;
        }
        else {
            $MAIN_POST = 1;
        }
       */
        $sql_to_slide = "UPDATE insurance2.SITE_NEWS SET THEME = '1', NEWS_TITLE_RU = '$SLIDE_HEAD_RU', NEWS_TEXT_RU = '$SLIDE_TEXT_RU', NEWS_TITLE_KAZ = '$SLIDE_HEAD_KAZ', NEWS_TEXT_KAZ = '$SLIDE_TEXT_KAZ', DATE_UPD = sysdate WHERE ID = $ID_UPD";
      //   echo $sql_to_slide;            
        $db->Execute($sql_to_slide); 
         header('Location: admin_news');
      /*  $db->Execute("
                insert into insurance2.SITE_NEWS_ARC
                select * from SITE_NEWS where id = $ID_UPD
            ");
                  
              
        header('site_panel');      */                  
     }
    
    if(isset($_POST['delete_slide']))
    {
         
        
        $delete_slide_id = $_POST['delete_slide'];
        
      /*  $db->Execute("
                insert into SITE_NEWS_ARC
                select * from SITE_NEWS where id = '$delete_slide_id'"); */
        
        $sql_to_slide = "delete insurance2.SITE_NEWS where ID = '$delete_slide_id'";
        
        $db->Execute($sql_to_slide); 
                           
    }
    
       
    $sql_slider = "select id,NEWS_TITLE_RU, NEWS_DATE,THEME, NEWS_TITLE_KAZ, NEWS_TITLE_ENG, NEWS_TEXT_ENG, NEWS_TEXT_KAZ, NEWS_TEXT_RU, EMP_ID, IS_MAIN, CREATE_DATA, EMP_UPD, DATE_UPD, TIME_UPD from insurance2.site_news order by id DESC";
    $list_slider = $db -> Select($sql_slider);
?>


