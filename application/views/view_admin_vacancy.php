<?php if($_SESSION[USER_SESSION]) { ?>

<div class="header-secondary">
    <div class="head-c">
        <img src="img/2.jpg" alt="" class="img">
        <div class="title" style="color: #fff;"></div>
    </div>
    <div class="menu-secondary">
        <div class="" style="margin-left: 10px;">
            <ul>
                <li><a href="admin_main" >Главная</a></li>
                <li><a href="admin_contacts?contact_id=1617">Контакты сайта</a></li>
                <li><a href="admin_news">Новости</a></li>
                <li><a href="admin_vacancy" class="active">Вакансия</a></li>
                <li><a href="admin_upload_files">Файлы</a></li>
                <li><a href="admin_clients_support">Клиентская поддержка</a></li>
                <li><a href="admin_insurance_products">Страховые продукты</a></li>
                <li><a href="admin_company">О компании</a></li>
                <li><a href="admin_documentation">Документы</a></li>
                <li><a href="admin_fin">Фин отчетность</a></li>
            </ul>
        </div>
    </div>
</div>



<div class="container">
<div class="admin_vac" >
<h2>Редактировать вакансии</h2>

<button style="margin-top: 20px; height: 35px;"  data-toggle="modal" data-target="#add_slide" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить вакансию </button>
</div>
<hr />
 <?php foreach($list_vacancy as $k=>$v) { ?>
<div class="panel-group" id="accordion1">
                 <div class="panel panel-default">
                      <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $v['MENU']; ?>" class="collapsed" aria-expanded="false"><?php if($lang == 'RU') { echo $v['ITEM_NAME_RU']; } else{ echo $v['ITEM_NAME_KAZ']; } ?> <div class="expand_caret"></div></a>
                      </div>
                      <div id="<?php echo $v['MENU']; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                     
                      <form method="post">
                        <input name="vacansy" type="hidden" value="<?php echo $v['ID']; ?>"  />
                        <div class="panel-body">
                       
                        <?php if($lang == 'RU') { ?>
                        
                         <h6>Название(рус)</h6>
                        <div class="form-group" id="data_1">
                            <textarea style="height: 50px;" name="NAME" class="form-control" id="NAME_RU"><?php echo $v['ITEM_NAME_RU']; ?> </textarea>
                        </div>
               <h6>Описание(рус)</h6>         
              
              <textarea id="summernote<?php echo $v['ID']; ?>" name="CONTENT" style="width: 100%;"><?php echo $v["CONTENT_RU"]; ?></textarea>
              <?php } else { ?>
              
              <h6>Название(каз)</h6>
                        <div class="form-group" id="data_1">
                            <textarea style="height: 50px;" name="NAME" class="form-control" id="NAME_KAZ"><?php echo $v['ITEM_NAME_KAZ']; ?> </textarea>
                        </div>
                 <h6>Описание(каз)</h6>
                       
              <textarea id="summernote<?php echo $v['ID']; ?>" name="CONTENT" style="width: 100%;"><?php echo $v["CONTENT_KAZ"]; ?></textarea> 
              <?php } ?>
       
                        
                                               
                        </div>
                       <button type="submit" class="btn btn-md btn-primary"> Сохранить описание </button> 
                       <button name="delete_vacancy" value="<?php echo $v['ID']; ?>" style="left: 35%;position: absolute;" class="btn btn-danger"> <i class="fa fa-trash">Удалить</i></button>
                        </form>                       
                      </div>
                    </div>                                                                                                                              
</div> <?php } ?>
</div>
                                    
                                    
                                    
                                    
<div class="modal inmodal fade" id="add_slide" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления вакансии</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <?php if($lang == 'RU') { ?>  
                <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="ITEM_NAME" placeholder="" class="form-control" id="ITEM_NAME_RU" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Описание(Рус):</label>
                        <textarea id="summernote0" name="CONTENT" class="form-control" id="CONTENT_RU"></textarea>
                    </div>                
                   
                    <hr />
                    <?php } else { ?>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Каз):</label>
                        <input name="ITEM_NAME" placeholder="" class="form-control" id="ITEM_NAME_KAZ" type="text"/>
                    </div>                                                                                                                
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Описание(Каз):</label>
                        <textarea id="summernote" name="CONTENT" class="form-control" id="CONTENT_KAZ"></textarea>
                    </div>
                     <hr />  
                    <?php } ?>
                                                                                                                                                                     
                </div>
                <div class="modal-footer">
                    <button name="save_vac" type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>                              
                                    
                                    
                                    
                                    
             
             
             
             
             
             
             
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <?php }else { require_once Error404; } ?>