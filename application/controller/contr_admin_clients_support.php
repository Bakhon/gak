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
    
$list_files = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 0 order by id DESC");

$list_ask = $db->select("select * from insurance2.site_ask where category = 1 order by id DESC ");
$list_ask2 = $db->select("select * from insurance2.site_ask where category = 2 order by id DESC ");

$list_faq = $db->select("select * from INSURANCE2.DIC_FAQ_PRODUCTS");

$list_kind = $db->select("select * from insurance2.DIC_FAQ_PRODUCTS order by id ASC");

$list_complaint = $db->select("select * from insurance2.CORPSITE_COMPLAINT order by id DESC");

$list_termins = $db->select("select * from insurance2.CORPSITE_CLIENTS_SUPPORT where id = 8");

$list_grafik_priema_grazhdan = $db->select("select * from insurance2.CORPSITE_CLIENTS_SUPPORT where id = 9");

$list_ins_case = $db->select("select * from insurance2.CORPSITE_INSURANCE_CASE order by id");

$list_ins_case_osns = $db->select("select * from insurance2.CORPSITE_INSURANCE_CASE where id = 1");

$list_ins_case_dobrovolka = $db->select("select * from insurance2.CORPSITE_INSURANCE_CASE where id = 2");

$list_ins_case_srochnoe = $db->select("select * from insurance2.CORPSITE_INSURANCE_CASE where id = 3");

$list_ins_case_ns = $db->select("select * from insurance2.CORPSITE_INSURANCE_CASE where id = 4");

$list_usefull_links = $db->select("select * from insurance2.CORPSITE_USEFUL_LINKS order by id");

$list_soprovod_dog = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 8 order by id ASC");

    //номер последнего ТД
    $sql_ask_num = 'select * from insurance2.CORPSITE_SEQ_ASK where id = 1';
    $list_ask_num = $db -> Select($sql_ask_num);
    $seq_id = $list_ask_num[0]['NUM_PP'];
    
// редактирование FAQ
if(isset($_POST['ask_upd']))
{
      
        $id_upd = $_POST['ask_upd'];
        $NAME = $_POST['NAME_RU'];
        $NAME_KZ = $_POST['NAME_KZ'];
        $CONTENT_RU = $_POST['CONTENT_RU'];
        $CONTENT_KZ = $_POST['CONTENT_KZ'];
              
       
        $sql_to_condition = "UPDATE INSURANCE2.SITE_ASK SET ITEM_NAME_RU = '$NAME', CONTENT_RU = '$CONTENT_RU', ITEM_NAME_KAZ = '$NAME_KZ', CONTENT_KAZ = '$CONTENT_KZ' WHERE ID = $id_upd";       
        $db->Execute($sql_to_condition);
         header('location: admin_clients_support');
        
      //  header("corpsite_contacts?product_id=$id_upd");
    
}


// сохранение FAQ
if(isset($_POST['save']))
{
              
        $SLIDE_HEAD_KAZ = $_POST['SLIDE_HEAD_KAZ'];
        $SLIDE_TEXT_KAZ = $_POST['SLIDE_TEXT_KAZ'];
        $SLIDE_HEAD_RU = $_POST['SLIDE_HEAD_RU'];
        $SLIDE_TEXT_RU = $_POST['SLIDE_TEXT_RU'];
        $category = $_POST['category_question'];      
       
        $sql_to_condition = "INSERT INTO INSURANCE2.SITE_ASK (ID, ITEM_NAME_RU, CONTENT_RU, ITEM_NAME_KAZ, CONTENT_KAZ, CATEGORY, TAB) values ('$seq_id', '$SLIDE_HEAD_RU', '$SLIDE_TEXT_RU', '$SLIDE_HEAD_KAZ', '$SLIDE_TEXT_KAZ', '$category', 'collapse$seq_id')";
        echo $sql_to_condition;
        $db->Execute($sql_to_condition);
        
        $sql_update_seq_ask = "UPDATE INSURANCE2.CORPSITE_SEQ_ASK set num_pp = num_pp + 1 where id = 1";
        $db->execute($sql_update_seq_ask);
        
        header('location: admin_clients_support');
        
      //  header("corpsite_contacts?product_id=$id_upd");
    
}

// удаление FAQ
    if(isset($_POST['delete_ask']))
    {                 
        $delete_id = $_POST['delete_ask'];
        
      /*  $db->Execute("
                insert into SITE_NEWS_ARC
                select * from SITE_NEWS where id = '$delete_slide_id'"); */
        
        $sql_to_slide = "delete INSURANCE2.SITE_ASK where ID = '$delete_id'";
        $db->Execute($sql_to_slide);
         header('location: admin_clients_support');                        
    }
    
    
if(isset($_POST['content'])){
        $id  = $_POST['update_termin'];
        $p['CONTENT'] = $_POST['content'];
       
        $sql_to_slide = "UPDATE insurance2.CORPSITE_CLIENTS_SUPPORT SET CONTENT_$lang = EMPTY_CLOB() WHERE ID = $id
                        RETURNING CONTENT_$lang INTO :CONTENT";
              
        $t = $db->AddClob($sql_to_slide, $p);
        header('location: admin_clients_support');
        //echo $sql_to_slide;
    }
    
    
        
if(isset($_POST['content2'])){
        $id  = $_POST['update_osns'];
        $p['CONTENT'] = $_POST['content2'];
        
        $sql_to_slide = "UPDATE insurance2.CORPSITE_INSURANCE_CASE SET CONTENT_$lang = EMPTY_CLOB() WHERE ID = $id
                        RETURNING CONTENT_$lang INTO :CONTENT";
              
        $t = $db->AddClob($sql_to_slide, $p);
        header('location: admin_clients_support');
        //echo $sql_to_slide;
    }

// обновление редактирования полезной ссылки
if(isset($_POST['update_usefull_links']))
{
      
        $id_upd = $_POST['id_ul'];
        $NAME = $_POST['SLIDE_HEAD_RU_UPD'];
        $NAME_KZ = $_POST['SLIDE_TEXT_KAZ_UPD'];
        $BTN_URL = $_POST['BTN_URL_UPD'];
        
              
       
        $sql_to_condition = "UPDATE INSURANCE2.CORPSITE_USEFUL_LINKS SET NAME_RU = '$NAME', NAME_KAZ = '$NAME_KZ', URL = '$BTN_URL' WHERE ID = $id_upd";       
        $db->Execute($sql_to_condition);
         header('location: admin_clients_support');
        
      //  header("corpsite_contacts?product_id=$id_upd");
    
}

// добавление полезных ссылок
    if(isset($_POST['insert_link']))
    {        
       
        $SLIDE_HEAD_KAZ = $_POST['HEAD_LINKS_KAZ'];
        $SLIDE_TEXT_KAZ = $_POST['HEAD_LINKS_RU'];               
        $BTN_URL = $_POST['URL_LINKS'];
        
          
        
        $p['IMG_BASE'] = $_POST['doc_b64']; 
        $sql_to_slide = "INSERT INTO insurance2.CORPSITE_USEFUL_LINKS (NAME_RU, NAME_KAZ, URL, IMG_BASE)
                         VALUES ('$SLIDE_TEXT_KAZ', '$SLIDE_HEAD_KAZ', '$BTN_URL', EMPTY_CLOB())
                         RETURNING IMG_BASE INTO :IMG_BASE";  
       // echo $sql_to_slide;                                       
        $t = $db->AddClob($sql_to_slide, $p);
       header('location: admin_clients_support');
       // echo $t;
        
        //echo $sql_to_slide;
    }


// удаление полезной ссылки
    if(isset($_POST['delete_link']))
    {                 
        $delete_id = $_POST['delete_link'];
        
      /*  $db->Execute("
                insert into SITE_NEWS_ARC
                select * from SITE_NEWS where id = '$delete_slide_id'"); */
        
        $sql_to_slide = "delete INSURANCE2.CORPSITE_USEFUL_LINKS where ID = '$delete_id'";
        $db->Execute($sql_to_slide);
         header('location: admin_clients_support');                        
    }
    
// обновление графика и приема граждан
if(isset($_POST['content_grafik'])){
        $id  = $_POST['update_grafik'];
        $p['CONTENT'] = $_POST['content_grafik'];
       
        $sql_to_slide = "UPDATE insurance2.CORPSITE_CLIENTS_SUPPORT SET CONTENT_$lang = EMPTY_CLOB() WHERE ID = $id
                        RETURNING CONTENT_$lang INTO :CONTENT";
              
        $t = $db->AddClob($sql_to_slide, $p);
        header('location: admin_clients_support');
        //echo $sql_to_slide;
    }
    
    
    
        // ИНЫЕ ДОКУМЕНТЫ
        if(isset($_POST['category_file_soprovod']))
    {
        $id = $_POST['list_files_soprovod'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file_soprovod'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_clients_support'); 
    }

   
           if(isset($_POST['id_soprovod']))
    {
        $id = $_POST['id_soprovod'];
        $list_uod_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
       
       <div class="modal-body">   
                 <?php foreach($list_uod_tarif as $k=>$v) { ?>                                 
                 <input type="hidden" value="<?php echo $v['ID']; ?>" name="update_soprovod" />                
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
  

        // редактирование орг структуры
  if(isset($_POST['update_soprovod']))
    {
        $id_upd = $_POST['update_soprovod'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_clients_support');  
    }

// удаление полезной ссылки
    if(isset($_POST['delete_file_soprovod']))
    {                 
        $delete_id = $_POST['delete_file_soprovod'];
        
      /*  $db->Execute("
                insert into SITE_NEWS_ARC
                select * from SITE_NEWS where id = '$delete_slide_id'"); */
        
        $sql_to_slide = "delete INSURANCE2.CORPSITE_FILES where ID = '$delete_id'";
        $db->Execute($sql_to_slide);
         header('location: admin_clients_support');                        
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


    
    if(isset($_GET['file_id_zhalob']))
{
    
    $file_id = $_GET['file_id_zhalob'];
    $list_file_id = $db->select("select * from insurance2.CORPSITE_COMPLAINT where id = $file_id");
    $file = $list_file_id[0]["FILE_FROM"];
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