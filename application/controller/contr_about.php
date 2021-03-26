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


    $sql_about = "select * from INSURANCE2.CORP_SITE_ABOUT_US_MENU order by ID";
    $list_about = $db -> Select($sql_about);
  //  print_r($list_about);
  
    $sql_submenu2 = "select * from INSURANCE2.CORPSUBMENU where menu_id = 4 order by ID";
    $list_submenu2 = $db -> Select($sql_submenu2);
    
     $sql_managament = "select * from INSURANCE2.CORPSITE_RUKOVODSTVA order by ID";
    $list_managament = $db -> Select($sql_managament);
    
    
    $sql_sertificate = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 1";
    $list_sertificate = $db->select($sql_sertificate);
    
    
       $sql_sved = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 9 order by id ASC";
 $list_sved = $db->select($sql_sved);
 
 
        $sql_korp = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 10 order by id ASC";
 $list_korp = $db->select($sql_korp);
 
  $sql_k2 = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 11 order by id ASC";
 $list_k2 = $db->select($sql_k2);
 
  $sql_k3 = "select f.id, f.root_$lang, f.name_$lang  from insurance2.CORPSITE_FILES f where type = 12 order by id ASC";
 $list_k3 = $db->select($sql_k3);
    
    
    
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