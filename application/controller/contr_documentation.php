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

$list_doc = $db->select("select * from INSURANCE2.CORP_SITE_ABOUT_US_MENU where id = 9");
$list_doc10 = $db->select("select * from INSURANCE2.CORP_SITE_ABOUT_US_MENU where id = 10");
$list_doc11 = $db->select("select * from INSURANCE2.CORP_SITE_ABOUT_US_MENU where id = 11");
$list_doc12 = $db->select("select * from INSURANCE2.CORP_SITE_ABOUT_US_MENU where id = 12");
$list_doc13 = $db->select("select * from INSURANCE2.CORP_SITE_ABOUT_US_MENU where id = 13");
$insurance_tarif = $db->select("select * from INSURANCE2.CORP_SITE_ABOUT_US_MENU where id = 15");
$current_state_otrasl = $db->select("select * from INSURANCE2.CORPSITE_DOCUMENTS where id = 6");
$list7 = $db->select("select * from INSURANCE2.CORPSITE_DOCUMENTS where id = 7");

 $sql_goszakup = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 2 order by id DESC";
 $list_goszakup = $db->select($sql_goszakup);
 
  $sql_instarif = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 3 order by id ASC";
 $list_instarif = $db->select($sql_instarif);
 
   $sql_inie = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 7 order by id ASC";
 $list_inie = $db->select($sql_inie);
 
    $sql_org = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 5 order by id ASC";
 $list_org = $db->select($sql_org);
 
     $sql_plan = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 6 order by id ASC";
 $list_plan = $db->select($sql_plan);
 
  $sql_agent = "select f.id, f.root_$lang, f.name_$lang, f.POST_DATE  from insurance2.CORPSITE_FILES f where type = 13 order by id ASC";
 $list_agents = $db->select($sql_agent);
 
   $sql_agent2019 = "select f.id, f.root_$lang, f.name_$lang, f.POST_DATE  from insurance2.CORPSITE_FILES f where type = 14 order by id ASC";
 $list_agents2019 = $db->select($sql_agent2019);  
 
    $sql_agent2018 = "select f.id, f.root_$lang, f.name_$lang, f.POST_DATE  from insurance2.CORPSITE_FILES f where type = 18 and f.root_$lang is not null  order by id ASC";
 $list_agents2018 = $db->select($sql_agent2018);  
 
   $sql_agent = "select f.id, f.root_$lang, f.name_$lang, f.POST_DATE  from insurance2.CORPSITE_FILES f where type = 21 order by id ASC";
 $list_agents21 = $db->select($sql_agent);
 
 
// $list_ag =  $db->select("select f.id, f.type,  f.root_kaz, f.name_kaz, f.POST_DATE, F.AGENTS_YEAR  from insurance2.CORPSITE_FILES f where AGENTS_YEAR = 2018 and f.root_kaz is not null  order by id ASC");
 

 
 $list_about_us = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 10");

$list_about_strateg = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 11");
 
 
 
   $sql_current_state_otrasl = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 4 and CURRENT_BRANCH_YEAR = 2021 order by id DESC";
 $list_current_state_otrasl = $db->select($sql_current_state_otrasl);

$list_doc = $db->select("select * from INSURANCE2.CORPSITE_DOCUMENTS order by id ASC");
$list_doc_corp = $db->select("select * from INSURANCE2.CORPSITE_DOCUMENTS where id != 5 order by id ASC");
// $list_ins_agents = $db->select("select * from INSURANCE2.CORPSITE_INSURANCE_AGENTS");


    $sql_submenu2 = "select * from INSURANCE2.CORPSUBMENU where menu_id = 4 order by ID";
    $list_submenu2 = $db -> Select($sql_submenu2);
 

     $sql_elem = "select * from INSURANCE2.CORP_SAIT_ELEMS order by ID";
    $list_elem = $db -> Select($sql_elem);  
    
    
    if(isset($_POST['id_insur']))
    {
        $id = $_POST['id_insur'];
                
        if($id == 2021){                                     
            ?>                       
              <?php foreach($list_agents21 as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
             <div style="display: flex;">            
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>                  
                </a>
                <span><?php echo $list_elem[77]["TEXT_$lang"]; ?>: <?php echo $v['POST_DATE']; ?></span>                         
              </div>  
               <?php } } ?>  
              <?php                                   
            exit;
        }
        
        if($id == 2020){ 
            
            
            
            ?> 
            
          
              <?php foreach($list_agents as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
             <div style="display: flex;">
            
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                  
                </a>
                <span><?php echo $list_elem[77]["TEXT_$lang"]; ?>: <?php echo $v['POST_DATE']; ?></span> 
             
           
              </div>  
               <?php } } ?>  
              <?php                                   
            exit;
        }
        
        if($id == 2019){  ?>
              <?php foreach($list_agents2019 as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
           <div style="display: flex;">
            
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                  
                </a>
                <span><?php echo $list_elem[77]["TEXT_$lang"]; ?>: <?php echo $v['POST_DATE']; ?></span> 
            
           
              </div>  
                <?php } } ?>   
              <?php                                   
            exit;
        }
        
        
                if($id == 2018){ 
                    ?>
              <?php foreach($list_agents2018 as $k=>$v) {
                
                if($v["ROOT_$lang"] != '') {
                ?>
           <div style="display: flex;">
            
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                  
                </a>
                <span><?php echo $list_elem[77]["TEXT_$lang"]; ?> <?php echo $v['POST_DATE']; ?></span> 
            
           
              </div>  
                <?php } } ?>   
              <?php                                   
            exit;
        }
        
      
        if($id == 2017)
        {
            exit;
        }
    }

    // Текущая отрасль 
    if(isset($_POST['id_branch'])){
        
        $id = $_POST['id_branch'];     
        $list_current_otr = $db->select("select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 4 and CURRENT_BRANCH_YEAR = $id order by id DESC");
       
        $html = '';
        $html .= ' <div class="tb-file">';
                      foreach($list_current_otr as $k=>$v) {
                        if($v["ROOT_$lang"] != '') {
                        
                      $html .= '<a href="?file_id='.$v['ID'].'" target="_blank" class="file">
                          <img src="img/icon/pdf.svg" alt="">
                          <span>'.$v["NAME_$lang"].'</span>
                        </a>';
                       } }             
            $html .= '</div>';           
            echo $html; 
            exit;
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