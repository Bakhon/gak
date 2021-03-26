<?php 

$db = new DB();

$list_vacancy = $db->Select("select * from insurance2.CORP_SITE_VACANCY order by id");

 session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
    

  if(isset($_POST['vacansy'])){
        
    $id = $_POST['vacansy'];
    $NAME = str_replace("'", '"', $_POST['NAME']);
    $NAME_KAZ = str_replace("'", '"', $_POST['NAME_KAZ']);
  //  $CONTENT_RU = str_replace("'", '"', $_POST['CONTENT_RU']);
 //   $CONTENT_KAZ = str_replace("'", '"', $_POST['CONTENT_KAZ']);
        
        $p['CONTENT'] = $_POST['CONTENT'];
      //  $p['CONTENT_KAZ'] = $_POST['CONTENT_KAZ']; */
        
     /*   $ps = array(
        'CONTENT' => $_POST['CONTENT_RU'],
        'CONTENT_KAZ' => $_POST['CONTENT_KAZ']
        ); */
        
        
        $sql_to_slide = "UPDATE insurance2.CORP_SITE_VACANCY SET ITEM_NAME_$lang ='$NAME', CONTENT_$lang = EMPTY_CLOB() WHERE ID = $id
                        RETURNING CONTENT_$lang  INTO :CONTENT";
     //   echo $sql_to_slide;      
        $t = $db->AddClob($sql_to_slide, $p);
        header('location: admin_vacancy');
        //echo $sql_to_slide;
    }
    
    
/*
if(isset($_POST['vacansy']))
{
    $ID_UPD = $_POST['vacansy'];
    $NAME_RU = str_replace("'", '"', $_POST['NAME_RU']);
    $NAME_KAZ = str_replace("'", '"', $_POST['NAME_KAZ']);
    $CONTENT_RU = str_replace("'", '"', $_POST['CONTENT_RU']);
    $CONTENT_KAZ = str_replace("'", '"', $_POST['CONTENT_KAZ']);
    
    
    
    $sql_to_slide = "UPDATE insurance2.CORP_SITE_VACANCY SET ITEM_NAME_RU = '$NAME_RU', ITEM_NAME_KAZ = '$NAME_KAZ',  CONTENT_KAZ = '$CONTENT_KAZ' WHERE ID = $ID_UPD";
  //  echo $sql_to_slide;
    $db->Execute($sql_to_slide);
    
    header('location:admin_vacancy');
}
*/

   if(isset($_POST['save_vac']))
    {     
        $ITEM_NAME = $_POST['ITEM_NAME'];
      
        $data = date('d.m.Y');
       
        
        $sql_men = "select insurance2.CORP_SITE_VACANCY_SEQ.nextval from dual";
        $list_men = $db->select($sql_men);
        $men = $list_men[0]['NEXTVAL'];
        $l = $men+1;
         $menu = 'menu'.$l;
  
       $p['CONTENT'] = $_POST['CONTENT'];
           
       $sql_to_slide = "insert into insurance2.CORP_SITE_VACANCY (ID, ITEM_NAME_$lang, CONTENT_$lang, MENU) values 
                         (insurance2.CORP_SITE_VACANCY_SEQ.nextval, '$ITEM_NAME', EMPTY_CLOB(), '$menu')
                         RETURNING  CONTENT_$lang INTO :CONTENT ";
      //  echo $sql_to_slide;                                 
                                                                                     
       
                                
        $t = $db->AddClob($sql_to_slide, $p); 
        
        $js = "
$(document).ready(function() {
  $('#summernote$men').summernote();
});
";
echo $js;
        
       
        header('location: admin_vacancy');                                                                                                                                                           
    }
    
    
    
        if(isset($_POST['delete_vacancy']))
    {                 
        $delete_id = $_POST['delete_vacancy'];
        
      /*  $db->Execute("
                insert into SITE_NEWS_ARC
                select * from SITE_NEWS where id = '$delete_slide_id'"); */
        
        $sql_to_slide = "delete INSURANCE2.CORP_SITE_VACANCY where ID = '$delete_id'";
        $db->Execute($sql_to_slide);
       
         header('location: admin_vacancy');                        
    }
    
    
  



?>