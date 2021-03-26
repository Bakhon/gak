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
                 
            </ul>
            <ul>
            <li><a href="admin_insurance_products">Страховые продукты</a></li>
                 <li><a href="admin_company" >О компании</a></li>
                <li><a href="admin_documentation" class="active">Документы</a></li>
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
              <li class="active"><a href="#menu1" data-toggle="tab">Корпоративные документы</a></li>
              <li><a href="#menu2" data-toggle="tab">План государственных закупок</a></li>          
              <li><a href="#menu3" data-toggle="tab">Страховые тарифы</a></li>
              <li><a href="#menu4" data-toggle="tab">Текущее состояние отрасли</a></li>
              <li><a href="#menu5" data-toggle="tab">Страховые агенты</a></li>
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
              <div class="tab-pane active" id="menu1">
               <div style="display: flex;justify-content: space-between;">  
                        <div class="title">Редактировать (Орг структура) </div>
                        <button style="height: 35px;" data-toggle="modal" data-target="#add_org_struktura" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
                    </div> 
              
                                                                          
                  <form method="post">
                        <input name="orgstr" type="hidden" value="10">
                        <div class="panel-body">
                        <?php if($lang == 'RU') { ?>
                        <h6>Название(рус)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 50px;" name="NAME_RU" class="form-control" id="NAME_RU"><?php echo $list_about_us[0]["ITEM_NAME_RU"]; ?> </textarea>
                        </div>              
                        <?php } else { ?>
                        <h6>Название(каз)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 50px;" name="NAME_KAZ" class="form-control" id="NAME_KAZ"><?php echo $list_about_us[0]["ITEM_NAME_KAZ"]; ?>  </textarea>
                        </div> 
                        <?php } ?>
                       </div> 
                       <button name="save" style="margin-left: 16px;" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>                        
                  </form>
                  
                  <hr/>  
                  
                  
                        <div class="row">
<div class="col-lg-12">
<?php foreach($list_org_struktura as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_org" href="#" class="btn btn-white btn-sm btn_org"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_file_org" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>

 <br />
  <br />
   <br />
    <br />
                  </div>
                    
                  
                   <div style="display: flex;justify-content: space-between;">  
                        <div class="title">Редактировать (Стратегический план) </div>
                        <button style="height: 35px;" data-toggle="modal" data-target="#add_strateg_plan" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
                    </div>              
                  
                  <hr />
                  
                  
                  
                 
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form method="post">
                        <input name="strateg_komp" type="hidden" value="11">
                        <div class="panel-body">
                        <?php if($lang == 'RU') { ?>
                        <h6>Название(рус)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 150px;" name="CONTENT_RU" class="form-control" id="NAME_RU"><?php echo $list_about_strateg[0]["CONTENT_$lang"]; ?> </textarea>
                        </div>              
                        <?php } else { ?>
                        <h6>Название(каз)</h6>                        
                        <div class="form-group" id="data_1">
                            <textarea style="height: 50px;" name="CONTENT_KAZ" class="form-control" id="NAME_RU"><?php echo $list_about_strateg[0]["CONTENT_$lang"]; ?> </textarea>
                        </div> 
                        <?php } ?>
                       </div> 
                       <button style="margin-left: 16px;" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>                        
                  </form>
                  <hr />
                  
                  
                          <div class="row">
<div class="col-lg-12">
<?php foreach($list_org_strateg_plan as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a download="?file_id=<?php echo $v['ID']; ?>" href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_strateg_plan" href="#" class="btn btn-white btn-sm btn_plan"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_file_inie" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div>
          <br />
  <br />
             
          <hr />          
                    
     <div style="display: flex;justify-content: space-between;">  
                        <div class="title">Редактировать (Иные документы) </div>
                        <button style="height: 35px;" data-toggle="modal" data-target="#add_inie_doki" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
                    </div>              
                  
                  <hr />                 
                    
                     <div class="row">
<div class="col-lg-12">
<?php foreach($list_inie_doki as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_inie" href="#" class="btn btn-white btn-sm btn_inie"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_file_plan" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div>            
                    
                    
                    
                    
                    
                    
                    
                                                             
               </div>
               
               <div class="tab-pane" id="menu2">               
                    <div style="display: flex;justify-content: space-between;">  
                        <div class="title">Редактировать</div>
                        <button style="height: 35px;" data-toggle="modal" data-target="#add_goszakup" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
                    </div>    
                    
                    
                            
               <div class="row">

<div class="col-lg-12">
<?php foreach($list_goszakup as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_slide" href="#" class="btn btn-white btn-sm btn_goszakup"><i class="fa fa-pencil"></i> Редактировать</a>
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
               
               <div class="tab-pane" id="menu3">                                  
                   <div style="display: flex;justify-content: space-between;">  
                        <div class="title">Редактировать</div>
                        <button style="height: 35px;" data-toggle="modal" data-target="#add_ins_tarif" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
                    </div>  
                    
                    
                    
                      <div class="row">
<div class="col-lg-12">
<?php foreach($list_ins_tarif as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_ins" href="#" class="btn btn-white btn-sm btn_instarif"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_file_ins" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>
                    </div>                    
                </div>  
            <?php } ?>                                                      
</div>


                  </div> 
                    
                
                
                                                           
               </div>
               
               <div class="tab-pane" id="menu4">               
                       <div style="display: flex;justify-content: space-between;">  
                            <div class="title">Редактировать</div>
                            <button style="height: 35px;" data-toggle="modal" data-target="#add_ins_agent" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
                        </div> 
                        <hr />
                <div class="date" style="display: flex; justify-content: space-between ">
                    <span>Выберите год:</span>
                    <div class="select">
                    <select name="" id="current_branch">
                      <option value="2021">2021 г.</option>
                      <option value="2020">2020 г.</option>
                      <option value="2019">2019 г.</option>
                      <option value="2018">2018 г.</option>                      
                    </select>
                    </div>
                  </div>
                  <hr />
                        <div class="row">
                            <div class="col-lg-12">
                            <div id="app">
                                  <?php foreach($list_ins_agent as $k=>$v) { ?>
                                            <div class="ibox">
                                                <div class="ibox-title" style="display: flex;justify-content: space-between;">
                                                    <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                                                    <div class="ibox-tools">  
                                                    <form method="POST">                                               
                                                        <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_agent" href="#" class="btn btn-white btn-sm btn_agent"><i class="fa fa-pencil"></i> Редактировать</a>
                                                                <input hidden="" name="delete_file_agent" value="<?php echo $v['ID']; ?>"/>                                    
                                                                <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                                                    </form>                                                                                      
                                                    </div>
                                                </div>                    
                                            </div>  
                                        <?php } ?>  
                            </div>
                                                                          
                            </div>
                        </div>                        
               </div>
               
               
               <div class="tab-pane customer-support" id="menu5">
                    <div style="display: flex;justify-content: space-between;">  
                    <div class="title">Редактировать</div>
                    <button style="height: 35px;" data-toggle="modal" data-target="#add_agent" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
               </div>
               
               <hr />
           <div class="tab-content">  
           <div class="text">Выберите год:</div>  
               <div class="select">
                  <select id="selectFAQ">
                                 <option value="accordion1">2021</option>
                                  <option value="accordion4">2020</option>
                                  <option value="accordion2">2019</option>
                                  <option value="accordion3">2018</option>                                        
                  </select>
                </div>
            </div>  
            
                  <div class="faq" id="accordion1" style="display: block;">
                  <div class="panel-group" id="accordion1">                         
                        <div class="col-lg-12">
                        <?php foreach($list_agent21 as $k=>$v) { ?>
                                        <div class="ibox">
                                            <div class="ibox-title" style="display: flex;justify-content: space-between;">
                                                <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                                                <div class="ibox-tools">  
                                                <form method="POST">                                               
                                                    <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_agents2020" href="#" class="btn btn-white btn-sm btn_agents"><i class="fa fa-pencil"></i> Редактировать</a>
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
               
                
                <div class="faq" id="accordion4" style="display: block;">
                  <div class="panel-group" id="accordion4">  
                            <div class="col-lg-12">
                            <?php foreach($list_agent2 as $k=>$v) { ?>
                                            <div class="ibox">
                                                <div class="ibox-title" style="display: flex;justify-content: space-between;">
                                                    <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                                                    <div class="ibox-tools">  
                                                    <form method="POST">                                               
                                                        <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_agents2020" href="#" class="btn btn-white btn-sm btn_agents"><i class="fa fa-pencil"></i> Редактировать</a>
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
                  
                    <div class="faq" id="accordion2" style="display: block;">
                            <div class="panel-group" id="accordion2">                         
                               <div class="col-lg-12">
                                        <?php foreach($list_agent19 as $k=>$v) { ?>
                               <div class="ibox">
                                   <div class="ibox-title" style="display: flex;justify-content: space-between;">
                                   <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                               <div class="ibox-tools">  
                                <form method="POST">                                               
                                    <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_agents2020" href="#" class="btn btn-white btn-sm btn_agents"><i class="fa fa-pencil"></i> Редактировать</a>
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
                       
  
                <div class="faq" id="accordion3" style="display: block;">
                  <div class="panel-group" id="accordion3">
                            <div class="col-lg-12">
                            <?php foreach($list_agent18 as $k=>$v) { ?>
                                            <div class="ibox">
                                                <div class="ibox-title" style="display: flex;justify-content: space-between;">
                                                    <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                                                    <div class="ibox-tools">  
                                                    <form method="POST">                                               
                                                        <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_agents2020" href="#" class="btn btn-white btn-sm btn_agents"><i class="fa fa-pencil"></i> Редактировать</a>
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
                                                                                                                           
                </div>                                 
              </div>
             </div>
            </div>
           </div>
          </div>  
          
          
          
          
          
          
          
          
          
          
          
      <!-- Модальное окно для добавление файлов госзакупа -->    
                   <div class="modal inmodal fade in" id="add_goszakup" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="2" name="category_file" />   
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



 <!-- Модальное окно для редактирования слайда госзакуп -->  
   <div class="modal inmodal fade in" id="edit_slide" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_goszakup">                           
                
            </form>
        </div>
    </div>
</div> 



      <!-- Модальное окно для добавление файлов страховые тарифы -->    
                   <div class="modal inmodal fade in" id="add_ins_tarif" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="3" name="category_file_ins_tarif" />   
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
                        <select name="list_files_ins" class="form-control">
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



 <!-- Модальное окно для редактирования слайда страховые тарифы -->  
   <div class="modal inmodal fade in" id="edit_ins" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_instarif">                           
                
            </form>
        </div>
    </div>
</div> 



      <!-- Модальное окно для добавление файлов текущее состояние отрасли -->    
<div class="modal inmodal fade in" id="add_ins_agent" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла Тек</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="4" name="category_file_ins_agent" />   
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
                        <select name="list_files_agent" class="form-control">
                            <option></option>
                        <?php foreach($list_files as $k=>$v) { ?>    
                            <option value="<?php echo $v['ID']; ?>"><?php  echo $v['NAME'];  ?></option>                 
                            <?php } ?>          
                                                    </select>
                    </div>
                    
                        <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите год:</label>
                        <select name="current_year" class="form-control">
                            <option value="2021">2021</option> 
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>    
                            <option value="2018">2018</option>   
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



 <!-- Модальное окно для редактирования слайда страховые агенты -->  
   <div class="modal inmodal fade in" id="edit_agent" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_agent">                           
                
            </form>
        </div>
    </div>
</div> 




      <!-- Модальное окно для добавление файлов организационная структура -->    
<div class="modal inmodal fade in" id="add_org_struktura" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="5" name="category_file_org_str" />   
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
                        <select name="list_files_org_struktura" class="form-control">
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






 <!-- Модальное окно для редактирования слайда орг структура -->  
   <div class="modal inmodal fade in" id="edit_org" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_org">                           
                
            </form>
        </div>
    </div>
</div> 



      <!-- Модальное окно для добавление файлов стратегический план Компании -->    
<div class="modal inmodal fade in" id="add_strateg_plan" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="6" name="category_file_strateg_comp" />   
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
                        <select name="list_files_strateg" class="form-control">
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




 <!-- Модальное окно для редактирования слайда стратегический план -->  
   <div class="modal inmodal fade in" id="edit_strateg_plan" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_plan">                           
                
            </form>
        </div>
    </div>
</div> 



      <!-- Модальное окно для добавление файлов иные доки -->    
<div class="modal inmodal fade in" id="add_inie_doki" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="7" name="category_file_inie_doki" />   
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
                        <select name="list_files_inie" class="form-control">
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



 <!-- Модальное окно для редактирования слайда стратегический план -->  
   <div class="modal inmodal fade in" id="edit_inie" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_inie">                           
                
            </form>
        </div>
    </div>
</div> 




      <!-- Модальное окно для добавление файлов страховые агенты -->    
<div class="modal inmodal fade in" id="add_agent" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">                   
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
                        <label class="font-noraml">Выберите год:</label>
                        <select name="type_of_file" class="form-control">
                            <option value="21">2021</option> 
                            <option value="13">2020</option>
                            <option value="14">2019</option>    
                            <option value="18">2018</option>   
                        </select>
                    </div>
                    
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files_agents" class="form-control">
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




 <!-- Модальное окно для редактирования слайда стратегический план -->  
   <div class="modal inmodal fade in" id="edit_agents2020" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_agents2020">                           
                
            </form>
        </div>
    </div>
</div> 



<?php } else { ?>

<?php require_once Error404; } ?>