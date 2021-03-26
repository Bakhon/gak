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
    

$list_missii_i_zadach = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 1");

$list_history_of_company = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 2");

$list_aksioner_i_sovet_dir = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 3");

$list_konsult = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 7");

$list_files = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 0 order by id DESC");

$list_license_and_sertificates = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 1 order by id ASC");

$list_svedenia_ob_uchastnikah = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 8");

$list_sved = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 9 order by id ASC");

$list_privlichenie = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 10 order by id ASC");

$list_p2 = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 11 order by id ASC");

$list_p3 = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 12 order by id ASC");

$list_rukovodstva = $db-> select(" select * from insurance2.CORPSITE_RUKOVODSTVA order by id ASC"); 


if(isset($_POST['content2'])){
        $id  = $_POST['about_company'];
        $p['CONTENT'] = $_POST['content2'];
        
        $sql_to_slide = "UPDATE insurance2.CORP_SITE_ABOUT_US_MENU SET CONTENT_$lang = EMPTY_CLOB() WHERE ID = $id
                        RETURNING CONTENT_$lang INTO :CONTENT";
              
        $t = $db->AddClob($sql_to_slide, $p);
        header('location: admin_company');
        //echo $sql_to_slide;
    }
    
    
    if(isset($_POST['content3'])){
        $id  = $_POST['about_company'];
        $p['CONTENT'] = $_POST['content3'];
        $dolzh_name = $_POST['dolzn_name'];
        
        $sql_to_slide = "UPDATE insurance2.CORPSITE_RUKOVODSTVA SET CONTENT_$lang = EMPTY_CLOB(), POSITION_$lang = '$dolzh_name' WHERE ID = $id
                        RETURNING CONTENT_$lang INTO :CONTENT";
              
        $t = $db->AddClob($sql_to_slide, $p);
        header('location: admin_company');
        //echo $sql_to_slide;
    }
    
    
    if(isset($_POST['category_file']))
    {
        $id = $_POST['list_files'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_company'); 
    }
    
    
    if(isset($_POST['delete_file']))
    {
        $id = $_POST['delete_file'];
        
    $list_name_file = $db->select("select * from insurance2.CORPSITE_FILES where id = $id");    
    $name_f = $list_name_file[0]["ROOT_$lang"];
           
    $str = mb_convert_encoding($name_f, 'windows-1251', 'utf-8');
    
	unlink($str);  
        
        $sql_delete_file = "delete insurance2.CORPSITE_FILES where id = '$id'";
        $db->execute($sql_delete_file);
        
        
        
        
        header('location: admin_company'); 
         
    }
    
    
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $list_uod_lisence = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
       
       <div class="modal-body">   
                 <?php foreach($list_uod_lisence as $k=>$v) { ?>                                 
                 <input type="hidden" value="<?php echo $v['ID']; ?>" name="update_fname" />                
                <?php if($lang == 'RU') { ?>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="<?php echo $v['NAME_RU']; ?>" type="text">
                    </div>  
                    <?php } else { ?>                                                                                                              
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <input name="HEAD_UPD_KAZ" placeholder="" class="form-control" id="HEAD_UPD_KAZ" value="<?php echo $v['NAME_KAZ']; ?>" type="text">
                    </div>
                    <?php } } ?>                                                                                                                   
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
<?php                
        exit;
    }
    
    
    if(isset($_POST['update_fname']))
    {
        $id_upd = $_POST['update_fname'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_company');  
    }
    
    
    
        
    if(isset($_POST['category_sved_f']))
    {
        $id = $_POST['list_files_sved'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_sved_f'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_company'); 
    }
    
    
    
    
        if(isset($_POST['id_sved']))
    {
        $id = $_POST['id_sved'];
        $list_uod_lisence = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
       
       <div class="modal-body">   
                 <?php foreach($list_uod_lisence as $k=>$v) { ?>                                 
                 <input type="hidden" value="<?php echo $v['ID']; ?>" name="update_sved" />                
                <?php if($lang == 'RU') { ?>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="<?php echo $v['NAME_RU']; ?>" type="text">
                    </div>  
                    <?php } else { ?>                                                                                                              
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <input name="HEAD_UPD_KAZ" placeholder="" class="form-control" id="HEAD_UPD_KAZ" value="<?php echo $v['NAME_KAZ']; ?>" type="text">
                    </div>
                    <?php } } ?>                                                                                                                   
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
<?php                
        exit;
    }


  if(isset($_POST['delete_sved']))
    {
        $id = $_POST['delete_sved'];
        
    $list_name_file = $db->select("select * from insurance2.CORPSITE_FILES where id = $id");    
    $name_f = $list_name_file[0]["ROOT_$lang"];
           
    $str = mb_convert_encoding($name_f, 'windows-1251', 'utf-8');
    
	unlink($str);  
        
        $sql_delete_file = "delete insurance2.CORPSITE_FILES where id = '$id'";
        $db->execute($sql_delete_file);                                
        header('location: admin_company'); 
         
    }
    
        if(isset($_POST['update_sved']))
    {
        $id_upd = $_POST['update_sved'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_company');  
    }


    if(isset($_POST['category_korps']))
    {
        $id = $_POST['list_files_korp'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_korps'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_company'); 
    }
  
    
    if(isset($_POST['orgstr']))
{
    $id = $_POST['orgstr'];
    $NAME_RU = $_POST['N_RU'];
     $NAME_KAZ = $_POST['N_KAZ'];
    if($lang == 'RU')
    {
        $NAME = $_POST['N_RU'];        
    }
    else{
         $NAME = $_POST['N_KAZ']; 
    }
   
    
    $sql = "UPDATE insurance2.CORP_SAIT_ELEMS SET TEXT_$lang = '$NAME' where id = $id ";
    $db->execute($sql);
    header('location: admin_company'); 
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
