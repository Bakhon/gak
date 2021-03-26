<?php if($_SESSION[USER_SESSION]) { ?>
<div class="header-secondary">
    <div class="head-c">
        <img src="img/2.jpg" alt="" class="img">
        <div class="title" style="color: #fff;">Административная панель</div>
    </div>
    <div class="menu-secondary">
        <div class=""  style="margin-left: 10px;">
            <ul>
                <li><a href="admin_main" >Главная</a></li>
                <li><a href="admin_contacts?contact_id=1617">Контакты сайта</a></li>
                <li><a href="admin_news">Новости</a></li>
                <li><a href="admin_vacancy">Вакансия</a></li>
                <li><a href="admin_upload_files">Файлы</a></li>
                <li><a href="admin_clients_support">Клиентская поддержка</a></li>
                <li><a href="admin_insurance_products">Страховые продукты</a></li>
                <li><a href="admin_company" class="active">О компании</a></li>
                <li><a href="admin_documentation">Документы</a></li>
                <li><a href="admin_fin">Фин отчетность</a></li>  
            </ul>  
        </div>
    </div>
   
</div>





<!--CONTENT-->
  <main class="content">
    <div class="block6 clearfix">
      <div class="container padding-0">
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
          <div class="col-md-3 col-sm-4 col-xs-12 b6-menu">
            <ul class="nav nav-tabs tabs-left">
              <li class="active"><a href="#menu1" data-toggle="tab">Цели, миссии и задачи</a></li>
              <li><a href="#menu2" data-toggle="tab">История</a></li>          
              <li><a href="#menu3" data-toggle="tab">Акционер и Совет Директоров</a></li>
              <li><a href="#menu4" data-toggle="tab">Консультативно-совещательные органы</a></li>
              <li><a href="#menu5" data-toggle="tab">Лицензия и сертификаты</a></li>
              <li><a href="#menu6" data-toggle="tab">Сведения об участии в ассоциациях (союзах)</a></li>
              <li><a href="#menu7" data-toggle="tab">Информация о корпоративных событиях</a></li>
              <li><a href="#menu8" data-toggle="tab">Руководство</a></li>
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
              <div class="tab-pane active" id="menu1">
               <div class="title">Редактировать</div>
                <form method="post">
              <input type="hidden" name="about_company" value="<?php echo $list_missii_i_zadach[0]['ID']; ?>" />
              <textarea id="summernote" name="content2" style="width: 100%;"><?php echo $list_missii_i_zadach[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>                                              
               </div>
               
               <div class="tab-pane" id="menu2">
               <div class="title">Редактировать</div>
                <form method="post">
              <input type="hidden" name="about_company" value="<?php echo $list_history_of_company[0]['ID']; ?>" />
              <textarea id="summernote1" name="content2" style="width: 100%;"><?php echo $list_history_of_company[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>                                              
               </div>
               
               <div class="tab-pane" id="menu3">
               <div class="title">Редактировать</div>
                <form method="post">
              <input type="hidden" name="about_company" value="<?php echo $list_aksioner_i_sovet_dir[0]['ID']; ?>" />
              <textarea id="summernote2" name="content2" style="width: 100%;"><?php echo $list_aksioner_i_sovet_dir[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>                                              
               </div>
               
               <div class="tab-pane" id="menu4">
               <div class="title">Редактировать</div>
                <form method="post">
              <input type="hidden" name="about_company" value="<?php echo $list_konsult[0]['ID']; ?>" />
              <textarea id="summernote3" name="content2" style="width: 100%;"><?php echo $list_konsult[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>                                              
               </div>
               
               
               <div class="tab-pane" id="menu5">
             <div style="display: flex;justify-content: space-between;">  
               <div class="title">Редактировать</div>
                <button style="height: 35px;" data-toggle="modal" data-target="#add_file" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
               </div>
               
               
               
               
               <div class="row">

<div class="col-lg-12">
<?php foreach($list_license_and_sertificates as $k=>$v) { 
  

       
?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_slide" href="#" class="btn btn-white btn-sm btn_license"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_file" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div>                                                                                                                                       
                </div>   
                
                     <div class="tab-pane" id="menu6">
             <div style="display: flex;justify-content: space-between;">  
               <div class="title">Редактировать</div>
                <button style="height: 35px;" data-toggle="modal" data-target="#add_sved" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
               </div>
               
               <form method="post">
              <input type="hidden" name="about_company" value="<?php echo $list_svedenia_ob_uchastnikah[0]['ID']; ?>" />
              <textarea id="summernote4" name="content2" style="width: 100%;"><?php echo $list_svedenia_ob_uchastnikah[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form> 
               
               
        <hr />
            <div class="row">

<div class="col-lg-12">
<?php foreach($list_sved as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_sved" href="#" class="btn btn-white btn-sm btn_sved"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_sved" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div>       
                                                                                                                                                                
                </div> 
                
                
                <div class="tab-pane" id="menu7">                 
                   <div style="display: flex;justify-content: space-between;">  
               <div class="title">Информация о корпоративных событиях</div>
                <button style="height: 35px;" data-toggle="modal" data-target="#add_korp" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
               </div>
                
                
                
                   <form method="post">
                        <input name="orgstr" type="hidden" value="68">
                        <div class="panel-body">
                        <?php if($lang == 'RU') { ?>
                        <h6>Название(рус)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 150px;" name="N_RU" class="form-control" id="N_RU"><?php echo $list_elem[67]['TEXT_RU']; ?> </textarea>
                        </div>              
                        <?php } else { ?>
                        <h6>Название(каз)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 150px;" name="N_KAZ" class="form-control" id="N_KAZ"><?php echo $list_elem[67]['TEXT_KAZ']; ?>  </textarea>
                        </div> 
                        <?php } ?>
                       </div> 
                       <button name="save" style="margin-left: 16px;" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>                        
                  </form>
                  
                  <hr/> 
                                  
            <div class="row">

<div class="col-lg-12">
<?php foreach($list_privlichenie as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_sved" href="#" class="btn btn-white btn-sm btn_sved"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_sved" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div>  
<hr />
                <div style="display: flex;justify-content: space-between;">  
               <div class="title">Редактировать</div>
                <button style="height: 35px;" data-toggle="modal" data-target="#add_korp2" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
               </div>
                
                <hr />
                
                
                  <form method="post">
                        <input name="orgstr" type="hidden" value="69">
                        <div class="panel-body">
                        <?php if($lang == 'RU') { ?>
                        <h6>Название(рус)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 150px;" name="N_RU" class="form-control" id="N_RU"><?php echo $list_elem[68]['TEXT_RU']; ?> </textarea>
                        </div>              
                        <?php } else { ?>
                        <h6>Название(каз)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 150px;" name="N_KAZ" class="form-control" id="N_KAZ"><?php echo $list_elem[68]['TEXT_KAZ']; ?>  </textarea>
                        </div> 
                        <?php } ?>
                       </div> 
                       <button name="save" style="margin-left: 16px;" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>                        
                  </form>
                  
                  <hr />
                
                
                  <div class="row">

<div class="col-lg-12">
<?php foreach($list_p2 as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_sved" href="#" class="btn btn-white btn-sm btn_sved"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_sved" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div>  
<hr />
                
                
                
                
                <div style="display: flex;justify-content: space-between;">  
               <div class="title">Редактировать</div>
                <button style="height: 35px;" data-toggle="modal" data-target="#add_korp3" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
               </div>
                
                 
                <hr />
                
                
                  <form method="post">
                        <input name="orgstr" type="hidden" value="70">
                        <div class="panel-body">
                        <?php if($lang == 'RU') { ?>
                        <h6>Название(рус)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 150px;" name="N_RU" class="form-control" id="N_RU"><?php echo $list_elem[69]['TEXT_RU']; ?> </textarea>
                        </div>              
                        <?php } else { ?>
                        <h6>Название(каз)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 150px;" name="N_KAZ" class="form-control" id="N_KAZ"><?php echo $list_elem[69]['TEXT_KAZ']; ?>  </textarea>
                        </div> 
                        <?php } ?>
                       </div> 
                       <button name="save" style="margin-left: 16px;" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>                        
                  </form>
                  
                  <hr />
                
                
                       <div class="row">

<div class="col-lg-12">
<?php foreach($list_p3 as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_sved" href="#" class="btn btn-white btn-sm btn_sved"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_sved" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div>  
                
                
                
                
                </div>
                
                
                 <div class="tab-pane customer-support" id="menu8"> 
                 
                 <div class="tab-content">  
                 <div style="    display: flex;
    justify-content: space-between;
    align-items: baseline;">
                 <div class="text">Выберите из списка члена руководства:</div>  
                 <div>
                 <div style="">
                     <button data-toggle="modal" data-target="#add_managament" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить члена руководства</button>
                 </div>
                 </div>
                 </div>
           
               <div class="select">
                  <select id="selectFAQ">
                                  <option></option>
                                  <?php foreach($list_rukovodstva as $k=>$v) { ?>
                                  <option value="<?php echo $v['MENU']; ?>"><?php echo $v["NAME_$lang"]; ?></option>                                   
                                  <?php } ?> 
                  </select>
                </div>
            </div>
                 
                 <div class="faq" id="item1" style="display: block;">
                  <div class="panel-group" id="item1">
                      
<div class="title">Редактировать</div>
                <form method="post">
               <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[0]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[0]['ID']; ?>" />
              <textarea id="summernote7" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                  
                   <div class="faq" id="item2" style="display: none;">
                  <div class="panel-group" id="item2">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[1]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[1]['ID']; ?>" />
              <textarea id="summernote8" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[1]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                  
                   <div class="faq" id="item3" style="display: none;">
                  <div class="panel-group" id="item3">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[2]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[2]['ID']; ?>" />
              <textarea id="summernote9" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[2]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                  
                    <div class="faq" id="item4" style="display: none;">
                  <div class="panel-group" id="item4">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[3]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[3]['ID']; ?>" />
              <textarea id="summernote10" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[3]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                    <div class="faq" id="item5" style="display: none;">
                  <div class="panel-group" id="item5">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[4]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[4]['ID']; ?>" />
              <textarea id="summernote11" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[4]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                    <div class="faq" id="item6" style="display: none;">
                  <div class="panel-group" id="item6">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[5]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[5]['ID']; ?>" />
              <textarea id="summernote12" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[5]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                  
                     <div class="faq" id="item7" style="display: none;">
                  <div class="panel-group" id="item7">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[6]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[6]['ID']; ?>" />
              <textarea id="summernote13" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[6]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                  
                     <div class="faq" id="item8" style="display: none;">
                  <div class="panel-group" id="item8">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[7]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[7]['ID']; ?>" />
              <textarea id="summernote14" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[7]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                  <div class="faq" id="item9" style="display: block;">
                  <div class="panel-group" id="item9">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[8]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[8]['ID']; ?>" />
              <textarea id="summernote15" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[8]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                  
                    <div class="faq" id="item10" style="display: block;">
                  <div class="panel-group" id="item10">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[9]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[9]['ID']; ?>" />
              <textarea id="summernote17" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[9]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>
                  
                         <div class="faq" id="item11" style="display: block;">
                  <div class="panel-group" id="item11">
                         
<div class="title">Редактировать</div>
                <form method="post">
                 <div class="form-group" id="data_1">
               <textarea style="height: 50px;" name="dolzn_name" class="form-control" id="dolzn_name"><?php echo $list_rukovodstva[9]["POSITION_$lang"]; ?> </textarea>
               </div>
              <input type="hidden" name="about_company" value="<?php echo $list_rukovodstva[10]['ID']; ?>" />
              <textarea id="summernote16" name="content3" style="width: 100%;"><?php echo $list_rukovodstva[10]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить  </button>
          </form>            
               
                                    </div>
                  </div>

                 
                 </div>
                
                                                                                                              
              </div>
             </div>
            </div>
           </div>
          </div>    
          
          
          
          
          
          
          
          
          
          
          
          <div class="modal inmodal fade in" id="add_file" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="1" name="category_file" />   
                <?php if($lang == 'RU') { ?>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="HEAD_RU" placeholder="" class="form-control" id="ITEM_NAME_KAZ" type="text">
                    </div>  
                    <?php } else { ?>                                                                                                              
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <textarea name="HEAD_KAZ" class="form-control" id="CONTENT_KAZ"></textarea>
                    </div>
                    <?php } ?>
                    <hr>
                    
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files" class="form-control">
                            <option></option>
                        <?php foreach($list_files as $k=>$v) { ?>    
                            <option value="<?php echo $v['ID']; ?>"><?php  echo $v['NAME'];  ?></option>                 
                            <?php } ?>          
                                                    </select>
                    </div>
                    <hr>                                                                                                                                                    
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>
          
          
        
<div class="modal inmodal fade in" id="edit_slide" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_license">                           
                
            </form>
        </div>
    </div>
</div>  
          
          
          
          




          
          
          <div class="modal inmodal fade in" id="add_sved" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="9" name="category_sved_f" />   
                <?php if($lang == 'RU') { ?>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="HEAD_RU" placeholder="" class="form-control" id="ITEM_NAME_KAZ" type="text">
                    </div>  
                    <?php } else { ?>                                                                                                              
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <textarea name="HEAD_KAZ" class="form-control" id="CONTENT_KAZ"></textarea>
                    </div>
                    <?php } ?>
                    <hr>
                    
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files_sved" class="form-control">
                            <option></option>
                        <?php foreach($list_files as $k=>$v) { ?>    
                            <option value="<?php echo $v['ID']; ?>"><?php  echo $v['NAME'];  ?></option>                 
                            <?php } ?>          
                                                    </select>
                    </div>
                    <hr>                                                                                                                                                    
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>
          
          
        
        <div class="modal inmodal fade in" id="edit_sved" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_sved">                           
                
            </form>
        </div>
    </div>
</div>    




  <div class="modal inmodal fade in" id="add_korp" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="10" name="category_korps" />   
                <?php if($lang == 'RU') { ?>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="HEAD_RU" placeholder="" class="form-control" id="ITEM_NAME_KAZ" type="text">
                    </div>  
                    <?php } else { ?>                                                                                                              
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <textarea name="HEAD_KAZ" class="form-control" id="CONTENT_KAZ"></textarea>
                    </div>
                    <?php } ?>
                    <hr>
                    
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files_korp" class="form-control">
                            <option></option>
                        <?php foreach($list_files as $k=>$v) { ?>    
                            <option value="<?php echo $v['ID']; ?>"><?php  echo $v['NAME'];  ?></option>                 
                            <?php } ?>          
                                                    </select>
                    </div>
                    <hr>                                                                                                                                                    
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>


  <div class="modal inmodal fade in" id="add_korp2" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="11" name="category_korps" />   
                <?php if($lang == 'RU') { ?>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="HEAD_RU" placeholder="" class="form-control" id="ITEM_NAME_KAZ" type="text">
                    </div>  
                    <?php } else { ?>                                                                                                              
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <textarea name="HEAD_KAZ" class="form-control" id="CONTENT_KAZ"></textarea>
                    </div>
                    <?php } ?>
                    <hr>
                    
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files_korp" class="form-control">
                            <option></option>
                        <?php foreach($list_files as $k=>$v) { ?>    
                            <option value="<?php echo $v['ID']; ?>"><?php  echo $v['NAME'];  ?></option>                 
                            <?php } ?>          
                                                    </select>
                    </div>
                    <hr>                                                                                                                                                    
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>


  <div class="modal inmodal fade in" id="add_korp3" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="12" name="category_korps" />   
                <?php if($lang == 'RU') { ?>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="HEAD_RU" placeholder="" class="form-control" id="ITEM_NAME_KAZ" type="text">
                    </div>  
                    <?php } else { ?>                                                                                                              
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <textarea name="HEAD_KAZ" class="form-control" id="CONTENT_KAZ"></textarea>
                    </div>
                    <?php } ?>
                    <hr>
                    
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files_korp" class="form-control">
                            <option></option>
                        <?php foreach($list_files as $k=>$v) { ?>    
                            <option value="<?php echo $v['ID']; ?>"><?php  echo $v['NAME'];  ?></option>                 
                            <?php } ?>          
                                                    </select>
                    </div>
                    <hr>                                                                                                                                                    
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>


<div class="modal inmodal fade" id="add_managament" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда (Каз):</label>
                        <input name="NAME_MANAGAMENT_KAZ" placeholder="" class="form-control" id="NAME_MANAGAMENT_KAZ" type="text"/>
                    </div>
                     <div class="form-group" id="data_1">
                        <label class="font-noraml">Позиция (Каз):</label>
                        <input name="POS_MANAGAMENT_KAZ" placeholder="" class="form-control" id="POS_MANAGAMENT_KAZ" type="text"/>
                    </div>                                                                                                          
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда (Каз):</label>                        
                        <textarea id="summernote<?php echo $v['ID']-2; ?>" style="height: 100px;" name="TEXT_MANAGAMENT_KAZ" class="form-control" id="TEXT_MANAGAMENT_KAZ"></textarea>
                    </div>
                    <hr />
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда (Рус):</label>
                        <input name="NAME_MANAGAMENT_RU" placeholder="" class="form-control" id="NAME_MANAGAMENT_RU" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Позиция (Рус):</label>
                        <input name="POS_MANAGAMENT_RU" placeholder="" class="form-control" id="POS_MANAGAMENT_RU" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда (Рус):</label>                        
                        <textarea id="summernote<?php echo $v['ID']; ?>" style="height: 100px;" name="TEXT_MANAGAMENT_RU" class="form-control" id="TEXT_MANAGAMENT_RU"></textarea>
                    </div>
                    <hr />                                  
                    <div class="form-group" id="data_1">
                    <label class="font-noraml">Изображение:</label>
                      <input type="file" name="file_adm" accept=".jpg, .png, .jpeg">  
                    </div>
                                                                 
                    <input name="CREATE_MAIL" value="test" style="display: none;"/>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button name="add_news" type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>



       
          
 <?php } else { ?>

<?php require_once Error404; } ?>         
          