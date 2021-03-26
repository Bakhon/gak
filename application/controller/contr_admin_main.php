<?php

    $db = new DB();
    
    
    $list = $db->select("select * from insurance2.CORPSITE_MAIN_SLIDER");
    foreach($list as $k=>$v) {
    $list_rt = $v['ROOT'];
    }
   
    
   /*  header("Content-Type: image/jpg");
    $fs = filesize($list_rt); // $dst - путь до картинки
    $h = fopen($fs, "rb");
    $img = fread($h, $fs);
    fclose($h); */
    
     session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
    
    
    $list_corps_call = $db->select("select s.*, C.NAME name_cat from INSURANCE2.corps_call s , INSURANCE2.DIC_CATEGORY_CALL_SITE c where S.CATEGORY = c.id order by 1 DESC");
 //   print_r($list_corps_call);  
    $list_files = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 0 order by id DESC");
  
    if(isset($_POST['create_slider']))
    {        
       
        $SLIDE_HEAD_KAZ = $_POST['SLIDE_HEAD_KAZ'];
        $SLIDE_TEXT_KAZ = $_POST['SLIDE_TEXT_KAZ'];
        $SLIDE_HEAD_RU = $_POST['SLIDE_HEAD_RU'];
        $SLIDE_TEXT_RU = $_POST['SLIDE_TEXT_RU'];
                
        $BTN_TEXT_KAZ = $_POST['BTN_TEXT_KAZ'];
        $BTN_TEXT_RU = $_POST['BTN_TEXT_RU'];
       
        $BTN_URL_RU = $_POST['BTN_URL_RU'];        
        $emp_id = $_POST['emp_id'];  
        $today_date = date('d.m.Y');
        $now_time = date('H:i:s');

    /*    $id = $_POST['list_files'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET IS_ADD = '1' where id = $id";                
        $db->execute($sql_upd_corp_files);                       
        
        $list_root = $db->select("select * from insurance2.CORPSITE_FILES where id = $id ");
        $root = $list_root[0]['ROOT_RU']; */
        $target_dir = "upload/"; 
       
        /*	$target_file = $target_dir . basename($_FILES['file_adm']['name']);
            $d = strlen($target_file); */

  
	$target_file = $target_dir . basename($_FILES['file_adm']['name']);
    $d = strlen($target_file);
    

  
	$msg = "";
     
    // $tr = mb_convert_encoding($_FILES['file_adm']['name'], "UTF-8");
     $tr = iconv('windows-1251', 'UTF-8', $_FILES['file_adm']['name']);
     
	if (move_uploaded_file($_FILES["file_adm"]["tmp_name"], $target_dir.$tr)) {
	    $msg = "Successfully uploaded";
	}else{
	 //   $msg = "Error while uploading";
	}
                     
        $sql_to_slide = "INSERT INTO insurance2.CORPSITE_MAIN_SLIDER (SLIDE_HEAD_KAZ, SLIDE_TEXT_KAZ, SLIDE_HEAD_RU, SLIDE_TEXT_RU,  BTN_TEXT_KAZ, BTN_TEXT_RU, BTN_URL_RU, POST_DATE, POST_TIME, ROOT)
                         VALUES ('$SLIDE_HEAD_KAZ', '$SLIDE_TEXT_KAZ', '$SLIDE_HEAD_RU', '$SLIDE_TEXT_RU',  '$BTN_TEXT_KAZ', '$BTN_TEXT_RU', '$BTN_URL_RU', '$today_date', '$now_time', '$tr')";                
        $t = $db->execute($sql_to_slide);
        //echo $t;        
        //echo $sql_to_slide;        
    }
    
    if(isset($_POST['ID_UPD']))
    {           
        $ID_UPD = $_POST['ID_UPD'];
        $SLIDE_HEAD_KAZ = str_replace("'", '"', $_POST['SLIDE_HEAD_KAZ_UPD']);
        $SLIDE_TEXT_KAZ = str_replace("'", '"', $_POST['SLIDE_TEXT_KAZ_UPD']);
        $SLIDE_HEAD_RU = str_replace("'", '"', $_POST['SLIDE_HEAD_RU_UPD']);
        $SLIDE_TEXT_RU = str_replace("'", '"', $_POST['SLIDE_TEXT_RU_UPD']);
        $SLIDE_HEAD_ENG = str_replace("'", '"', $_POST['SLIDE_HEAD_ENG_UPD']);
        $SLIDE_TEXT_ENG = str_replace("'", '"', $_POST['SLIDE_TEXT_ENG_UPD']);
        $BTN_TEXT_KAZ = $_POST['BTN_TEXT_KAZ_UPD'];
        $BTN_TEXT_RU = $_POST['BTN_TEXT_RU_UPD'];
        $BTN_TEXT_ENG = $_POST['BTN_TEXT_ENG_UPD'];
        $BTN_URL = $_POST['BTN_URL_UPD'];  
        $ORDER_ID = $_POST['ORDER_ID'];     
        $update_emp_id = $_POST['upd'];
        $today_date = date('d.m.Y');
        $now_time = date('H:i:s');
        
        $sql_to_slide = "UPDATE insurance2.CORPSITE_MAIN_SLIDER set SLIDE_HEAD_KAZ = '$SLIDE_HEAD_KAZ', SLIDE_TEXT_KAZ = '$SLIDE_TEXT_KAZ', SLIDE_HEAD_RU = '$SLIDE_HEAD_RU', SLIDE_TEXT_RU = '$SLIDE_TEXT_RU', SLIDE_HEAD_ENG = '$SLIDE_HEAD_ENG', SLIDE_TEXT_ENG = '$SLIDE_TEXT_ENG', BTN_TEXT_KAZ = '$BTN_TEXT_KAZ', BTN_TEXT_RU = '$BTN_TEXT_RU', BTN_TEXT_ENG = '$BTN_TEXT_ENG', BTN_URL_RU = '$BTN_URL', UPDATE_EMP_ID = '$update_emp_id', UPDATE_DATA = sysdate, UPDATE_TIME = '$now_time', ORDER_ID = '$ORDER_ID' WHERE ID = $ID_UPD";
       // echo $sql_to_slide;        
        $db->Execute($sql_to_slide);
 
        
        /*
                $db->Execute("
                insert into SITE_MAIN_SLIDER_ARC
                select * from CORPSITE_MAIN_SLIDER where id = $ID_UPD
            ");
        
        */
        
     //   header('site_panel');
    }
    
    if(isset($_POST['delete_slide']))
    {
        $delete_slide_id = $_POST['delete_slide'];
        $update_emp_id = $_POST['emp_update'];
        $today_date = date('d.m.Y');
        $now_time = date('H:i:s');
        
        $sql_to_slide_upd = "UPDATE insurance2.CORPSITE_MAIN_SLIDER set UPDATE_EMP_ID = '$update_emp_id', UPDATE_DATA = '$today_date', UPDATE_TIME = '$now_time' WHERE ID = $delete_slide_id";
       // echo $sql_to_slide_upd;
       /*
                        $db->Execute("
                insert into SITE_MAIN_SLIDER_ARC
                select * from CORPSITE_MAIN_SLIDER where id = $delete_slide_id
            "); */
        
        $sql_to_slide = "delete insurance2.CORPSITE_MAIN_SLIDER where ID = '$delete_slide_id'";
       // echo $sql_to_slide;
        $db->Execute($sql_to_slide);
    }
    
    //постоянные запросы
    $today_date = date('d.m.Y');
    $today_date_plus_15 = date("d.m.Y", mktime(0, 0, 0, date('m'), date('d') + 15, date('Y')));
    
    $sql_slider = "select s.id, S.SLIDE_HEAD_RU, S.SLIDE_TEXT_RU, S.BTN_TEXT_RU, S.BTN_URL_RU, S.SLIDE_TEXT_KAZ, S.SLIDE_HEAD_KAZ, S.BTN_TEXT_KAZ, S.BTN_URL_KAZ, S.ROOT  from insurance2.CORPSITE_MAIN_SLIDER s order by id ASC";
    $list_slider = $db -> Select($sql_slider);
    
    
    
    

$sql_f = "select * from INSURANCE2.CORP_SAIT_FININDICATORS order by id ASC";
$list_f = $db->select($sql_f);

if($_POST['id'])
{
    $id = $_POST['id'];
    $sql_f = "select * from INSURANCE2.CORP_SAIT_FININDICATORS where id = $id order by id ASC";
    $list_f2 = $db->select($sql_f);
    
    if($id == '21')
    {
        foreach($list_f2 as $kk=>$vv){ }
        $html = '
         <div class="modal-body">';   
         
         $html .= '<input type="hidden" id="fdate" name="fdate" value="'.$vv['ID'].'" />';
 
                  
        $html .=  '<div class="form-group" id="data_1">            
               <label class="font-noraml">Дата финансового показателя</label>
               <div class="input-group date">
                  <span class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </span>
                  <input type="text" class="form-control dateOform" name="DATE_FIN" data-mask="99.99.9999" id="DATE_FIN" required="" value="'.$vv['DATE_FIN'];
                  
         $html .= '" />
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button id="" type="submit" class="btn btn-primary">Сохранить</button>
            <a type="button" class="btn btn-white" data-dismiss="modal">Закрыть</a>                  
         </div>';
         
         echo $html;
      
        exit;
    }
  
  else{
    foreach($list_f2 as $k=>$v){        
    }
            
    $html =  '<div class="modal-body">';     
    $html .= '<input type="hidden" id="id_fin" name="id_fin" value="'.$v['ID'];
    $html .= '" />';                                                           
                  $html .=  '<div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(рус)</label>
                        <textarea style="height: 150px;" name="NAME_RU" class="form-control" id="NAME_RU">'.$v['NAME_RU'];
     $html .= '</textarea></div>';
     
     $html .= '<div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(каз)</label>
                        <textarea style="height: 150px;" name="NAME_KAZ" class="form-control" id="NAME_KAZ">'.$v['NAME_KAZ'];
    $html .= '</textarea>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Показатели</label>
                        <small>(Напишите только показатель без слова тг)</small>
                        <textarea style="height: 150px;" name="TEXT_RU" class="form-control" id="TEXT_RU">'.$v['TEXT_RU'];
                        
   $html .= '</textarea>
                    </div>                                      
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>';                        
     echo $html;                   
                        
    exit;
    }
}


if(isset($_POST['NAME_RU']))
{
    $fid = $_POST['id_fin'];
    $name_ru = $_POST['NAME_RU'];
    $name_kaz = $_POST['NAME_KAZ'];
    $text_ru = $_POST['TEXT_RU'];
    
    $sql = "UPDATE INSURANCE2.CORP_SAIT_FININDICATORS SET NAME_RU = '$name_ru', NAME_KAZ = '$name_kaz', TEXT_RU = '$text_ru' where id = $fid";
    $list = $db->execute($sql);
    header('location: admin_main');
    
}


if(isset($_POST['fdate']))
{
    $fid = $_POST['fdate'];
    $DATE_FIN = $_POST['DATE_FIN'];
     

    
    $sql = "UPDATE INSURANCE2.CORP_SAIT_FININDICATORS SET DATE_FIN = '$DATE_FIN' where id = $fid";
    echo $sql;
    $list = $db->execute($sql);
    header('location: admin_main');
    
}
    
    
    
    
    
    
    array_push
    ($js_loader,
        'styles/js/inspinia.js',  
        'styles/js/plugins/pace/pace.min.js', 
        'styles/js/plugins/slimscroll/jquery.slimscroll.min.js',     
        'styles/js/plugins/chosen/chosen.jquery.js',
        'styles/js/plugins/jsKnob/jquery.knob.js',
        'styles/js/plugins/jasny/jasny-bootstrap.min.js',
        'styles/js/plugins/dataTables/jquery.dataTables.js',
        'styles/js/plugins/dataTables/dataTables.bootstrap.js',
        'styles/js/plugins/dataTables/dataTables.responsive.js',
        'styles/js/plugins/dataTables/dataTables.tableTools.min.js',
        'styles/js/plugins/datapicker/bootstrap-datepicker.js',
        'styles/js/plugins/nouslider/jquery.nouislider.min.js',
        'styles/js/plugins/switchery/switchery.js',
        'styles/js/plugins/ionRangeSlider/ion.rangeSlider.min.js',
        'styles/js/plugins/iCheck/icheck.min.js',
        'styles/js/plugins/colorpicker/bootstrap-colorpicker.min.js',
        'styles/js/plugins/clockpicker/clockpicker.js',
        'styles/js/plugins/cropper/cropper.min.js',
        'styles/js/plugins/fullcalendar/moment.min.js',
        'styles/js/plugins/daterangepicker/daterangepicker.js',
        'styles/js/plugins/Ilyas/edit_employees_js.js',
        'styles/js/plugins/Ilyas/addClients.js',
        'styles/js/demo/contracts_osns.js',
        'styles/js/plugins/sweetalert/sweetalert.min.js'
    );

    array_push
    ($css_loader, 
        'styles/css/plugins/dataTables/dataTables.bootstrap.css',
        'styles/css/plugins/dataTables/dataTables.responsive.css',
        'styles/css/plugins/dataTables/dataTables.tableTools.min.css',
        'styles/css/plugins/iCheck/custom.css',
        'styles/css/plugins/chosen/chosen.css',
        'styles/css/plugins/colorpicker/bootstrap-colorpicker.min.css',
        'styles/css/plugins/cropper/cropper.min.css',
        'styles/css/plugins/switchery/switchery.css',
        'styles/css/plugins/jasny/jasny-bootstrap.min.css',
        'styles/css/plugins/nouslider/jquery.nouislider.css',
        'styles/css/plugins/datapicker/datepicker3.css',
        'styles/css/plugins/ionRangeSlider/ion.rangeSlider.css',
        'styles/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css',
        'styles/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css',
        'styles/css/plugins/clockpicker/clockpicker.css',
        'styles/css/plugins/daterangepicker/daterangepicker-bs3.css',
        'styles/css/plugins/select2/select2.min.css'
    );    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>


