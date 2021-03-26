<?php


  $db = new DB();
   
    
    $sql_department = "select * from INSURANCE2.DIC_DEPARTMENT where (ID = 1 OR ID = 12 or id = 8 OR ID = 16)";
    $list_department = $db -> Select($sql_department);
    
    $sql_contacts = "select * from INSURANCE2.SITE_CONTACTS";
    $list_contacts = $db -> Select($sql_contacts);
    
    $list_beneficiar = $db->select("select * from insurance2.corpsite_contacts");
    


  if(isset($_POST['id']))
  {
               session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
        
             
       if($lang == 'KAZ'){
                            $lang = "_KZ";
                        }else{
                            $lang = "";
                        }
    
    
    $id = $_POST['id'];
    
    if($id == '')
    {
    $sql_branch = "select * from INSURANCE2.dic_branch2 where RFBN_ID != 0000 and RFBN_ID != 1601 and nvl(asko, 0) = 0 order by 1 DESC";
    $list_branch = $db -> Select($sql_branch);
    exit;
    }
    
    
    
    $list_branch = $db->select("select * from INSURANCE2.dic_branch2 where RFBN_ID = $id");
    foreach($list_branch as $k=>$v) {}
    echo '<div class="cont-1"><p>'.$v["NAME$lang"].'</p><span>'.$v["ADDRESS$lang"].'</span></div>
              <div class="cont-2">
                <span>'.$v["GR_JOB$lang"].'</span>
              </div>
              <div class="cont-3">
                <a href="'.$v['PHONE'].'">'.$v['PHONE'].'</a>                
              </div>'; 
              
    // echo $v['MAPS'];        
              
    exit;
  }
  else{
    $sql_branch = "select * from INSURANCE2.dic_branch2 where RFBN_ID != 0000 and RFBN_ID != 1601 and nvl(asko, 0) = 0 order by NUM_PP ASC";
    $list_branch = $db -> Select($sql_branch);
  }
  
  
  if(isset($_POST['tex']))
  {
    
               session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
        
             
       if($lang == 'KAZ'){
                            $lang = "_KZ";
                        }else{
                            $lang = "";
                        }
    
    
    $tex = $_POST['tex'];   
    
    if($tex == '')
    {      
        $tex ='';
        exit;
    }
    
     $list_branch = $db->select("select * from INSURANCE2.dic_branch2 where RFBN_ID = $tex");
      foreach($list_branch as $k=>$v) {}
      echo $v['MAPS'];    
    exit;
  }

?>