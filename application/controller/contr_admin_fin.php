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

 $quarter = array(1,2,3,4, 'Годовой отчет');
// INSURANCE AGENTS
        if(isset($_POST['fin_val']))
    {
        $id = $_POST['list_files_fin'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['fin_val'];
        $date = date('d.m.Y');
        $fin_god = $_POST['fin_god'];
        $fin_kvartal = $_POST['fin_kvartal'];
        $fin = $fin_kvartal.$fin_god;
        $POST_DATE = $_POST['POST_DATE'];
        
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1', FIN_DATE = '$fin', POST_DATE = '$POST_DATE' where id = $id";
     //   echo $sql_upd_corp_files;
        $db->execute($sql_upd_corp_files);  
        header('location: admin_fin'); 
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


      if(isset($_POST['id_fin']))
    {
        
        
        
        $id = $_POST['id_fin'];
        $list_uod_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
															<div class="modal-body">
																<?php foreach($list_uod_tarif as $k=>$v) {
																    $rus_name = trim($v['NAME_RU']);
                                                                    ?>
																<input type="hidden" value="
																	<?php echo $v['ID']; ?>" name="update_finstate" />
																	<?php if($lang == 'RU') { ?>
																	<div class="form-group" id="data_1">
																		<label class="font-noraml">Заголовок(Рус):</label>
																		<input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="
																			<?php echo $rus_name; ?>" type="text">
																		</div>
																		<?php } else { ?>
																		<div class="form-group" id="data_1">
																			<label class="font-noraml">Заголовок(Каз):</label>
																			<input name="HEAD_UPD_KAZ" placeholder="" class="form-control" id="HEAD_UPD_KAZ" value="
																				<?php echo $v['NAME_KAZ']; ?>" type="text">
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
    
    
  if(isset($_POST['update_finstate']))
    {
        $id_upd = $_POST['update_finstate'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $date = date('d.m.Y');
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ', POST_DATE = '$date' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_fin');  
    }
    
    
           if(isset($_POST['delete_file_ins']))
    {
        $id = $_POST['delete_file_ins'];
        
    $list_name_file = $db->select("select * from insurance2.CORPSITE_FILES where id = $id");    
    $name_f = $list_name_file[0]["ROOT_$lang"];
           
    $str = mb_convert_encoding($name_f, 'windows-1251', 'utf-8');
    
	unlink($str);  
        
        $sql_delete_file = "delete insurance2.CORPSITE_FILES where id = '$id'";
        $db->execute($sql_delete_file);
                                
   header('location: admin_fin'); 
         
    }
    
    if(isset($_POST['fin_id_state']))
    {
        $id  = $_POST['fin_id_state'];
        
           
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
          $html = '<div class="b8">';  
          $html .= '<div class="b8-flex">';                
          $html .= '<p>'.$b.' '.$text.'</p><span>Дата публикации: '.$list_report[0]['POST_DATE'].'</span>
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
                        <form method="POST">                                               
                            
                                    <input hidden="" name="delete_file_ins" value="'.$v['ID'].'"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>';
                             
      
    } }
      $html .= '</div>';
            echo $html; }
                                   
            exit;
            
       
    }
    


?>