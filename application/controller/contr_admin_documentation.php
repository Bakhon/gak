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

// $list_agent2020 = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 13 order by id ASC")    

$list_goszakup = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 2 order by id ASC");

$list_files = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 0 order by id DESC");

$list_ins_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 3 order by id ASC");

$list_ins_agent = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 4 and CURRENT_BRANCH_YEAR = 2021 order by id ASC");

$list_org_struktura = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 5 order by id ASC");

$list_org_strateg_plan = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 6 order by id ASC");

$list_inie_doki = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 7 order by id ASC");

$list_about_us = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 10");

$list_about_strateg = $db->select("select * from insurance2.CORP_SITE_ABOUT_US_MENU where id = 11");

$list_agent2 = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 13 order by id ASC");

$list_agent19 = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 14 order by id ASC");

$list_agent18 = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 18 order by id ASC");

$list_agent21 = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 21 order by id ASC");


if(isset($_POST['orgstr']))
{
    $id = $_POST['orgstr'];
    $NAME_RU = $_POST['NAME_RU'];
     $NAME_KAZ = $_POST['NAME_KAZ'];
    if($lang == 'RU')
    {
        $NAME = $_POST['NAME_RU'];        
    }
    else{
         $NAME = $_POST['NAME_KAZ']; 
    }
   
    
    $sql = "UPDATE insurance2.CORP_SITE_ABOUT_US_MENU SET ITEM_NAME_$lang = '$NAME' where id = $id ";
    $db->execute($sql);
    header('location: admin_documentation'); 
}

if(isset($_POST['strateg_komp']))
{
    $id = $_POST['strateg_komp'];
    $NAME = $_POST['CONTENT_RU'];
    $NAME_KZ = $_POST['CONTENT_KAZ'];
    
        if($lang == 'RU')
    {
        $NAME = $_POST['CONTENT_RU'];        
    }
    else{
         $NAME = $_POST['CONTENT_KAZ']; 
    }
    
    $sql = "UPDATE insurance2.CORP_SITE_ABOUT_US_MENU SET CONTENT_$lang = '$NAME' where id = $id ";
    $db->execute($sql);
    header('location: admin_documentation'); 
}
       
    if(isset($_POST['category_file']))
    {
        $id = $_POST['list_files'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_documentation'); 
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
                                
   header('location: admin_documentation'); 
         
    }
    
    
    
       if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $list_uod_lisence = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
<div class="modal-body">
	<?php foreach($list_uod_lisence as $k=>$v) { ?>
	<input type="hidden" value="
		<?php echo $v['ID']; ?>" name="update_fname" />
		<?php if($lang == 'RU') { ?>
		<div class="form-group" id="data_1">
			<label class="font-noraml">Заголовок(Рус):</label>
			<input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="
				<?php echo $v['NAME_RU']; ?>" type="text">
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

// редактирование гос закупа
  if(isset($_POST['update_fname']))
    {
        $id_upd = $_POST['update_fname'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_documentation');  
    }




// страховые тарифы
     
    if(isset($_POST['category_file_ins_tarif']))
    {
        $id = $_POST['list_files_ins'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file_ins_tarif'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_documentation'); 
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
                                
   header('location: admin_documentation'); 
         
    }


       if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $list_uod_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
			<div class="modal-body">
				<?php foreach($list_uod_tarif as $k=>$v) { ?>
				<input type="hidden" value="
					<?php echo $v['ID']; ?>" name="update_fname" />
					<?php if($lang == 'RU') { ?>
					<div class="form-group" id="data_1">
						<label class="font-noraml">Заголовок(Рус):</label>
						<input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="
							<?php echo $v['NAME_RU']; ?>" type="text">
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


// редактирование страховых тарифов
  if(isset($_POST['update_fname']))
    {
        $id_upd = $_POST['update_fname'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_documentation');  
    }




// страховые агенты
     
    if(isset($_POST['category_file_ins_agent']))
    {
        $id = $_POST['list_files_agent'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file_ins_agent'];
        $current_year = $_POST['current_year'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1', CURRENT_BRANCH_YEAR = '$current_year' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_documentation'); 
    }



     if(isset($_POST['id_agent']))
    {
        $id = $_POST['id_agent'];
        $list_uod_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
						<div class="modal-body">
							<?php foreach($list_uod_tarif as $k=>$v) { ?>
							<input type="hidden" value="
								<?php echo $v['ID']; ?>" name="update_fagent" />
								<?php if($lang == 'RU') { ?>
								<div class="form-group" id="data_1">
									<label class="font-noraml">Заголовок(Рус):</label>
									<input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="
										<?php echo $v['NAME_RU']; ?>" type="text">
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

// редактирование страховых агентов
  if(isset($_POST['update_fagent']))
    {
        $id_upd = $_POST['update_fagent'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_documentation');  
    }

// удаление страховых агентов
     if(isset($_POST['delete_file_agent']))
    {
        $id = $_POST['delete_file_agent'];
        
    $list_name_file = $db->select("select * from insurance2.CORPSITE_FILES where id = $id");    
    $name_f = $list_name_file[0]["ROOT_$lang"];
           
    $str = mb_convert_encoding($name_f, 'windows-1251', 'utf-8');
    
	unlink($str);  
        
        $sql_delete_file = "delete insurance2.CORPSITE_FILES where id = '$id'";
        $db->execute($sql_delete_file);
                                
   header('location: admin_documentation'); 
         
    }




// организационная структура
     
    if(isset($_POST['category_file_org_str']))
    {
        $id = $_POST['list_files_org_struktura'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file_org_str'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_documentation'); 
    }



     if(isset($_POST['id_org']))
    {
        $id = $_POST['id_org'];
        $list_uod_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
									<div class="modal-body">
										<?php foreach($list_uod_tarif as $k=>$v) { ?>
										<input type="hidden" value="
											<?php echo $v['ID']; ?>" name="update_forg" />
											<?php if($lang == 'RU') { ?>
											<div class="form-group" id="data_1">
												<label class="font-noraml">Заголовок(Рус):</label>
												<input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="
													<?php echo $v['NAME_RU']; ?>" type="text">
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


// редактирование орг структуры
  if(isset($_POST['update_forg']))
    {
        $id_upd = $_POST['update_forg'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_documentation');  
    }




// удаление орг структуры
     if(isset($_POST['delete_file_org']))
    {
        $id = $_POST['delete_file_org'];
        
    $list_name_file = $db->select("select * from insurance2.CORPSITE_FILES where id = $id");    
    $name_f = $list_name_file[0]["ROOT_$lang"];
           
    $str = mb_convert_encoding($name_f, 'windows-1251', 'utf-8');
    
	unlink($str);  
        
        $sql_delete_file = "delete insurance2.CORPSITE_FILES where id = '$id'";
        $db->execute($sql_delete_file);
                                
   header('location: admin_documentation'); 
         
    }
    
    
    
// стратегический план компании
     
    if(isset($_POST['category_file_strateg_comp']))
    {
        $id = $_POST['list_files_strateg'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file_strateg_comp'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_documentation'); 
    }
    
    
    
     if(isset($_POST['id_plan']))
    {
        $id = $_POST['id_plan'];
        $list_uod_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
												<div class="modal-body">
													<?php foreach($list_uod_tarif as $k=>$v) { ?>
													<input type="hidden" value="
														<?php echo $v['ID']; ?>" name="update_plan" />
														<?php if($lang == 'RU') { ?>
														<div class="form-group" id="data_1">
															<label class="font-noraml">Заголовок(Рус):</label>
															<input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="
																<?php echo $v['NAME_RU']; ?>" type="text">
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



// удаление орг структуры
     if(isset($_POST['delete_file_plan']))
    {
        $id = $_POST['delete_file_plan'];
        
    $list_name_file = $db->select("select * from insurance2.CORPSITE_FILES where id = $id");    
    $name_f = $list_name_file[0]["ROOT_$lang"];
           
    $str = mb_convert_encoding($name_f, 'windows-1251', 'utf-8');
    
	unlink($str);  
        
        $sql_delete_file = "delete insurance2.CORPSITE_FILES where id = '$id'";
        $db->execute($sql_delete_file);
                                
   header('location: admin_documentation'); 
         
    }
    
    
    // редактирование орг структуры
  if(isset($_POST['update_plan']))
    {
        $id_upd = $_POST['update_plan'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_documentation');  
    }

    
    
    
    // ИНЫЕ ДОКУМЕНТЫ
        if(isset($_POST['category_file_inie_doki']))
    {
        $id = $_POST['list_files_inie'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['category_file_inie_doki'];
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_documentation'); 
    }
    
        if(isset($_POST['id_inie']))
    {
        $id = $_POST['id_inie'];
        $list_uod_tarif = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and IS_ADD = 1 and id = $id order by id DESC");
        
       ?>
															<div class="modal-body">
																<?php foreach($list_uod_tarif as $k=>$v) { ?>
																<input type="hidden" value="
																	<?php echo $v['ID']; ?>" name="update_inie_dok" />
																	<?php if($lang == 'RU') { ?>
																	<div class="form-group" id="data_1">
																		<label class="font-noraml">Заголовок(Рус):</label>
																		<input name="HEAD_UPD_RU" placeholder="" class="form-control" id="HEAD_UPD_RU" value="
																			<?php echo $v['NAME_RU']; ?>" type="text">
																		</div>
																		<?php } else { ?>
																		<div class="form-group" id="data_1">
																			<label class="font-noraml">Заголовок(Каз):</label>
																			<input name="HEAD_UPD_KAZ" placeholder="" class="form-control" id="HEAD_UPD_KAZ" value="
																				<?php echo $v['NAME_KAZ']; ?>" type="text">
																			</div>
																			<?php } ?>
                                                                            
                                                                            
                                                                           
                                                                           <div class="form-group" id="data_1">            
               <label class="font-noraml">Дата публикации</label>
               <div class="input-group date">
                  <span class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </span>
                  <input type="text" class="form-control dateOform" name="POST_DATE" data-mask="99.99.9999" id="POST_DATE" required="" value="<?php echo $v['POST_DATE']; ?>">
               </div>
            </div>
                                                                            
                                                                            
                                                                            
                                                                    <?php        } ?>
																		</div>
																		<div class="modal-footer">
																			<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
																			<button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
																		</div>
																		<?php                
        exit;
    }
    
    
    // удаление орг структуры
     if(isset($_POST['delete_file_inie']))
    {
        $id = $_POST['delete_file_inie'];
        
    $list_name_file = $db->select("select * from insurance2.CORPSITE_FILES where id = $id");    
    $name_f = $list_name_file[0]["ROOT_$lang"];
           
    $str = mb_convert_encoding($name_f, 'windows-1251', 'utf-8');
    
	unlink($str);  
        
        $sql_delete_file = "delete insurance2.CORPSITE_FILES where id = '$id'";
        $db->execute($sql_delete_file);
                                
   header('location: admin_documentation'); 
         
    }
    
    
        // редактирование орг структуры
  if(isset($_POST['update_inie_dok']))
    {
        $id_upd = $_POST['update_inie_dok'];
        $HEAD_UPD_KAZ = $_POST['HEAD_UPD_KAZ'];
        $HEAD_UPD_RU = $_POST['HEAD_UPD_RU'];
        $POST_DATE = $_POST['POST_DATE'];
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_UPD_RU', NAME_KAZ = '$HEAD_UPD_KAZ', POST_DATE = '$POST_DATE' where id = $id_upd";
        $db->execute($sql_upd_corp_files);
        header('location: admin_documentation');  
    }



// INSURANCE AGENTS
        if(isset($_POST['type_of_file']))
    {
        $id = $_POST['list_files_agents'];
        $HEAD_KAZ = $_POST['HEAD_KAZ'];
        $HEAD_RU = $_POST['HEAD_RU'];
        $val = $_POST['type_of_file'];
        $date = date('d.m.Y');
        
        $sql_upd_corp_files = "UPDATE insurance2.CORPSITE_FILES SET NAME_RU = '$HEAD_RU', NAME_KAZ = '$HEAD_KAZ', TYPE = '$val', IS_ADD = '1', POST_DATE = '$date' where id = $id";
        $db->execute($sql_upd_corp_files);  
        header('location: admin_documentation'); 
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

if(isset($_POST['id_branch'])){
    $id = $_POST['id_branch'];
    $html = '';
    $list_ins_agent_branch = $db-> select("select * from insurance2.CORPSITE_FILES where root_$lang is not null and type = 4 and CURRENT_BRANCH_YEAR = $id order by id ASC");
  //  print_r($list_ins_agent_branch);
            foreach($list_ins_agent_branch as $k=>$v) { 
                                         $html .= '<div class="ibox">
                                                <div class="ibox-title" style="display: flex;justify-content: space-between;">
                                                    <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id='.$v['ID'].'">'.$v["NAME_$lang"].'</a></h5>
                                                    <div class="ibox-tools">  
                                                    <form method="POST">                                               
                                                        <a id="ed"  data-id="'.$v['ID'].'" data-toggle="modal" data-target="#edit_agent" href="#" class="btn btn-white btn-sm btn_agent"><i class="fa fa-pencil"></i> Редактировать</a>
                                                                <input hidden="" name="delete_file_agent" value="'.$v['ID'].'"/>                                    
                                                                <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                                                    </form>                                                                                      
                                                    </div>
                                                </div>                    
                                            </div>';  
                                      }   
     echo $html;
     exit;  
}

    
?>


