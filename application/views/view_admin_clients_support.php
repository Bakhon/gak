


<?php if($_SESSION[USER_SESSION]) { 
    
 //   $seq_ask_num = $list_ask_num[0]['NUM_PP']+1;
    ?>

<div class="header-secondary">
    <div class="head-c">
        <img src="img/2.jpg" alt="" class="img">
        <div class="title" style="color: #fff;">Административная панель</div>
    </div>
    <div class="menu-secondary">
        <div class="" style="margin-left: 10px;">
            <ul>
                <li><a href="admin_main" >Главная</a></li>
                <li><a href="admin_contacts?contact_id=1617">Контакты сайта</a></li>
                <li><a href="admin_news">Новости</a></li>
                <li><a href="admin_vacancy">Вакансия</a></li>
                <li><a href="admin_upload_files">Файлы</a></li>
                <li><a href="admin_clients_support" class="active">Клиентская поддержка</a></li>
                <li><a href="admin_insurance_products">Страховые продукты</a></li>
                <li><a href="admin_company">О компании</a></li>
                <li><a href="admin_documentation">Документы</a></li>
                 <li><a href="admin_fin">Фин отчетность</a></li>
            </ul>
        </div>
    </div>
</div>

<!--CONTENT-->
  <main class="content">
    <div class="block6 customer-support clearfix">
      <div class="container padding-0">
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
          <div class="col-md-3 col-sm-4 col-xs-12 b6-menu">
            <ul class="nav nav-tabs tabs-left">
              <li class="active"><a href="#menu1" data-toggle="tab">Часто задаваемые вопросы</a></li>
              <li><a href="#menu2" data-toggle="tab">Жалобы и предложения</a></li>
              <li><a href="#menu3" data-toggle="tab">Термины</a></li>
              <li><a href="#menu4" data-toggle="tab">Если случился страховой случай</a></li>
              <li><a href="#menu5" data-toggle="tab">Полезные ссылки</a></li>
              <li><a href="#menu6" data-toggle="tab">График приема граждан</a></li>  
              <li><a href="#menu7" data-toggle="tab">Сопровождение договора</a></li>                         
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
                      <div class="tab-pane active" id="menu1">
                <div class="headask">     
                  <div class="title">Редактировать часто задаваемые вопросы</div>
                  <button style="height: 35px;" data-toggle="modal" data-target="#add_slide" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить вопрос </button>
                </div>   
                  
                   <div class="select">
                  <select id="selectFAQ">
              <?php foreach($list_faq as $k=>$v) { ?>
                    <option value="<?php echo $v['MENU']; ?>"><?php echo $v["PRODUCT_NAME_$lang"]; ?></option>
                       <?php } ?>                
                  </select>
                </div>
                <div class="faq" id="accordion1">
                  <div class="panel-group" id="accordion1">
                  <?php foreach($list_ask as $k=>$v) { ?>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $v['TAB']; ?>"><?php echo $v["ITEM_NAME_$lang"]; ?>
                        
                         <div class="expand_caret"></div></a>
                      </div>
                      <div id="<?php echo $v['TAB']; ?>" class="panel-collapse collapse ">
                      <form method="post">
                        <input type="hidden" name="ask_upd" value="<?php echo $v['ID']; ?>" />
                        <div class="panel-body">
                         <div class="form-group" id="data_1">
                           <label>Название(рус)</label>
                            <textarea style="height: 150px;" name="NAME_RU" class="form-control" id="NAME_RU"><?php echo $v["ITEM_NAME_RU"]; ?> </textarea>
                        </div>
                        <div class="form-group" id="data_1">
                        <label>Описание(рус)</label>
                            <textarea style="height: 150px;" name="CONTENT_RU" class="form-control" id="CONTENT_RU"><?php echo $v["CONTENT_RU"]; ?> </textarea>
                        </div>   
                        <div class="form-group" id="data_1">
                            <label>Название(каз)</label>
                            <textarea style="height: 150px;" name="NAME_KZ" class="form-control" id="NAME_KZ"><?php echo $v["ITEM_NAME_KAZ"]; ?> </textarea>
                        </div>
                        <div class="form-group" id="data_1">
                        <label>Описание(каз)</label>
                            <textarea style="height: 150px;" name="CONTENT_KZ" class="form-control" id="CONTENT_KZ"><?php echo $v["CONTENT_KAZ"]; ?> </textarea>
                        </div>                                                                     
                        </div>
                        <button type="submit" class="btn btn-md btn-primary"> Сохранить описание </button> 
                        <button name="delete_ask" value="<?php echo $v['ID']; ?>" style="left: 35%;position: absolute;" id="8" class="btn btn-danger"> <i class="fa fa-trash">Удалить</i></button> 
                        </form>
                      </div>
                    </div>
                  <?php } ?>
                  </div>
                  </div>
                  <div class="faq" id="accordion2">
                  <div class="panel-group" id="accordion2">
                  <?php foreach($list_ask2 as $k=>$v) { ?>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $v['TAB']; ?>"><?php echo $v["ITEM_NAME_$lang"]; ?> <div class="expand_caret"></div></a>
                      </div>
                      <div id="<?php echo $v['TAB']; ?>" class="panel-collapse collapse ">
                         <form method="post">
                        <input type="hidden" name="ask_upd" value="<?php echo $v['ID']; ?>" />
                        <div class="panel-body">
                         <div class="form-group" id="data_1">
                           <label>Название(рус)</label>
                            <textarea style="height: 150px;" name="NAME_RU" class="form-control" id="NAME_RU"><?php echo $v["ITEM_NAME_RU"]; ?> </textarea>
                        </div>
                        <div class="form-group" id="data_1">
                        <label>Описание(рус)</label>
                            <textarea style="height: 150px;" name="CONTENT_RU" class="form-control" id="CONTENT_RU"><?php echo $v["CONTENT_RU"]; ?> </textarea>
                        </div>   
                        <div class="form-group" id="data_1">
                            <label>Название(каз)</label>
                            <textarea style="height: 150px;" name="NAME_KZ" class="form-control" id="NAME_KZ"><?php echo $v["ITEM_NAME_KAZ"]; ?> </textarea>
                        </div>
                        <div class="form-group" id="data_1">
                        <label>Описание(каз)</label>
                            <textarea style="height: 150px;" name="CONTENT_KZ" class="form-control" id="CONTENT_KZ"><?php echo $v["CONTENT_KAZ"]; ?> </textarea>
                        </div>                                                                     
                        </div>
                        <button type="submit" class="btn btn-md btn-primary"> Сохранить описание </button> 
                        <button name="delete_ask" value="<?php echo $v['ID']; ?>" style="left: 35%;position: absolute;" id="8" class="btn btn-danger"> <i class="fa fa-trash">Удалить</i></button> 
                        </form>
                      </div>
                    </div>
                  <?php } ?>
                  </div>
                  </div>
                </div>
              
              <div class="tab-pane" id="menu2">
                   
                   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ФИО</th>
      <th scope="col">Город</th>
      <th scope="col">Телефон</th>
      <th scope="col">Тип обращения</th>
      <th scope="col">Клиент</th>
      <th scope="col">Текст</th>
      <th scope="col">Файл</th>
      <th scope="col">Почта</th>
      <th scope="col">Дата отправки</th>
      <th scope="col">Время отправки</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i = 1;
  foreach($list_complaint as $k=>$v) { ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $v['FIO']; ?></td>
       <td><?php echo $v['CITY']; ?></td>
       <td><?php echo $v['PHONE']; ?></td>
       <td><?php if($v['TYPE_APPEAL'] == '1') { ?>Жалоба<?php } else { ?>Предложение<?php } ?></td>
       <td><?php  if($v['IS_CLIENT'] == '1') { ?>да<?php } else{ ?>нет<?php } ?></td>
       <td><?php echo $v['TEXT_FROM']; ?></td>
       <td><?php if($v['FILE_FROM']) { ?><a href="?file_id_zhalob=<?php echo $v['ID']; ?>" target="_blank">Файл</a><?php } else { ?>Пусто<?php } ?></td>
       <td><?php echo $v['EMAIL']; ?></td>
       <td><?php echo $v['POST_DATA']; ?></td>
       <td><?php echo $v['POST_TIME']; ?></td>
    </tr>
  <?php $i++; } 
  ?>  
  </tbody>
</table>
                   
                   
              </div>
            
            
            <div class="tab-pane" id="menu3">
            <label>Выберите язык</label>
            <select name="search_YEAR" class="form-control" onchange="javascript:langSelect(this)">
                            <option></option>
                                                        <option value="RU" <?php  if($lang == 'RU') {echo 'selected';} ?>>Рус</option>   
                                                        <option value="KAZ" <?php if($lang == 'KAZ') {echo 'selected';} ?>>Каз</option>                                                      
                                                    </select>
                                                    <hr/>
              <form method="post">
              <input type="hidden" name="update_termin" value="<?php echo $list_termins[0]['ID']; ?>" />
  <textarea id="summernote" name="content" style="width: 100%;"><?php echo $list_termins[0]["CONTENT_$lang"]; ?></textarea>
  <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
</form>                                      
                                                               
            </div>

        <div class="tab-pane" id="menu4">
           <div class="select">
                  <select id="selectTab">
                  <?php foreach($list_ins_case as $y=>$z) { ?>
                                  <option  value="<?php echo $z['MENU']; ?>"><?php echo $z["ITEM_NAME_$lang"]; ?></option>
                                           
                                           <?php } ?>
                                       
                  </select>
                </div>
        
        <div class="box" id="value1" style="display: block;">
                  <div class="title"><?php echo $list_ins_case_osns[0]["ITEM_NAME_$lang"]; ?></div>
                  
          <form method="post">
              <input type="hidden" name="update_osns" value="<?php echo $list_ins_case_osns[0]['ID']; ?>" />
              <textarea id="summernote2" name="content2" style="width: 100%;"><?php echo $list_ins_case_osns[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form> 
                
            <!--        <div class="tb-file">
                      <a href="/upload/УВЕДОМЛЕНИЕ.docx" target="_blank" class="file">
                        <img src="img/icon/pdf.svg" alt="">
                        <span>Уведомление о несчастном случае</span>
                      </a>
                    </div>  -->
                                      
                  </div>
                  
                  
<div class="box" id="value2" style="display: block;">
                  <div class="title"><?php echo $list_ins_case_dobrovolka[0]["ITEM_NAME_$lang"]; ?></div>
                  
          <form method="post">
              <input type="hidden" name="update_osns" value="<?php echo $list_ins_case_dobrovolka[0]['ID']; ?>" />
              <textarea id="summernote3" name="content2" style="width: 100%;"><?php echo $list_ins_case_dobrovolka[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form> 
                
            <!--        <div class="tb-file">
                      <a href="/upload/УВЕДОМЛЕНИЕ.docx" target="_blank" class="file">
                        <img src="img/icon/pdf.svg" alt="">
                        <span>Уведомление о несчастном случае</span>
                      </a>
                    </div>  -->
                                      
                  </div>
                  
                  
       <div class="box" id="value3" style="display: block;">
                  <div class="title"><?php echo $list_ins_case_srochnoe[0]["ITEM_NAME_$lang"]; ?></div>
                  
          <form method="post">
              <input type="hidden" name="update_osns" value="<?php echo $list_ins_case_srochnoe[0]['ID']; ?>" />
              <textarea id="summernote4" name="content2" style="width: 100%;"><?php echo $list_ins_case_srochnoe[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form> 
                
            <!--        <div class="tb-file">
                      <a href="/upload/УВЕДОМЛЕНИЕ.docx" target="_blank" class="file">
                        <img src="img/icon/pdf.svg" alt="">
                        <span>Уведомление о несчастном случае</span>
                      </a>
                    </div>  -->
                                      
                  </div>   
                  
       
       <div class="box" id="value4" style="display: block;">
                  <div class="title"><?php echo $list_ins_case_ns[0]["ITEM_NAME_$lang"]; ?></div>
                  
          <form method="post">
              <input type="hidden" name="update_osns" value="<?php echo $list_ins_case_ns[0]['ID']; ?>" />
              <textarea id="summernote5" name="content2" style="width: 100%;"><?php echo $list_ins_case_ns[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form> 
                
            <!--        <div class="tb-file">
                      <a href="/upload/УВЕДОМЛЕНИЕ.docx" target="_blank" class="file">
                        <img src="img/icon/pdf.svg" alt="">
                        <span>Уведомление о несчастном случае</span>
                      </a>
                    </div>  -->
                                      
                  </div>                     
        
        
        
        
        </div>
 
    <div class="tab-pane" id="menu5">
           
           
           
           
           
           
                          
               
               <div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="project-list">
                        <h2 style="color:#000; font-size: 24px; font-family: 'GOTHAM_BOLD'; margin-bottom: 35px;">
                            Редактировать полезные ссылки
                        </h2>
                    <!--    <span class="pull-right">
                            <a target="_blank" href="site_panel_arc" class="btn btn-warning btn-xs"><i class="">История изменений</i></a>
                        </span> -->                        
                        <table class="table table-hover">
                            <tbody>
                            <?php
                                foreach($list_usefull_links as $k => $v){
                            ?>
                            <tr>
                                <td class="col-sm-4">
                                    <div class="text-center">
                                        <img alt="image" class="img-responsive" src="<?php echo $v['IMG_BASE']; ?>">
                                        <div class="m-t-xs font-bold">(<?php echo $v['URL']; ?>)</div>
                                    </div>
                                </td>
                                <td class="project-title">
                                    <a href="project_detail.html"><?php echo $v['NAME_RU']; ?></a>
                                  <hr />
                                    <a href="project_detail.html"><?php echo $v['NAME_KAZ']; ?></a>
                                    <br>                                  
                                </td>
                                <td class="project-actions">
                                    <form method="post">
                                    <input hidden="" name="delete_link" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Удалить </button>
                                    <a data-toggle="modal" data-target="#edit_usefull_links<?php echo $v['ID']; ?>" href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Редактировать </a>
                                    </form>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                        <button data-toggle="modal" data-target="#add_usefull_links" type="submit" class="btn btn-md btn-primary" ><i class="fa fa-plus-square"></i> Добавить полезные ссылки </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox">
                <div class="ibox-content">
                    
                </div>
            </div>
        </div>
    </div>
</div>
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
             
    </div>
    
    
    <div class="tab-pane" id="menu6">
    <div class="title">Редактировать График приема и граждан</div>
    <form method="post">
              <input type="hidden" name="update_grafik" value="<?php echo $list_grafik_priema_grazhdan[0]['ID']; ?>" />
              <textarea id="summernote6" name="content_grafik" style="width: 100%;"><?php echo $list_grafik_priema_grazhdan[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form> 
                
    
    </div>
    
    
     <div class="tab-pane" id="menu7">  
    <div style="display: flex;justify-content: space-between;">  
                        <div class="title">Редактировать (Сопровождение договора) </div>
                        <button style="height: 35px;" data-toggle="modal" data-target="#add_soprovod" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
                    </div> 
                    
                    
    
      
                          <div class="row">
<div class="col-lg-12">
<?php foreach($list_soprovod_dog as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title" style="display: flex;justify-content: space-between;">
                        <h5><img style="border: 0px solid rgb(0, 0, 0); float: left; width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;" src="http://gak.kz/upload/pdf.png" /><a  href="?file_id=<?php echo $v['ID']; ?>"><?php echo $v["NAME_$lang"]; ?></a></h5>
                        <div class="ibox-tools">  
                        <form method="POST">                                               
                            <a id="ed"  data-id="<?php echo $v['ID']; ?>" data-toggle="modal" data-target="#edit_soprovod" href="#" class="btn btn-white btn-sm btn_soprovod"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_file_soprovod" value="<?php echo $v['ID']; ?>"/>                                    
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
</main>
<!--CONTENT END-->

<div class="modal inmodal fade" id="add_slide" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления вопроса</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок (Каз):</label>
                        <input name="SLIDE_HEAD_KAZ" placeholder="" class="form-control" id="SLIDE_HEAD_KAZ" type="text"/>
                    </div>                                                                                                          
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст(Каз):</label>
                        <textarea name="SLIDE_TEXT_KAZ" class="form-control" id="SLIDE_TEXT_KAZ"></textarea>
                    </div>
                    <hr />
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок(Рус):</label>
                        <input name="SLIDE_HEAD_RU" placeholder="" class="form-control" id="SLIDE_HEAD_RU" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст (Рус):</label>
                        <textarea name="SLIDE_TEXT_RU" class="form-control" id="SLIDE_TEXT_RU"></textarea>
                    </div>
                    <hr />  
                  
                    
                    <div class="select">
                    <label>Выберите категорию вопроса</label>
                  <select name="category_question" id="selectTab" style="border-radius: 4px; width: 100%; height: 48px; border: 1px solid #E8E8E8; background: #fff;">
                                   <option></option>
                                    <?php foreach($list_kind as $k=>$v) { ?>
                                   <option value="<?php echo $v['ID']; ?>"><?php echo $v['PRODUCT_NAME_RU']; ?></option>
                                    <?php } ?> 
                                       
                  </select>
                </div>
                    
                    <hr />                                                                                                                      
                </div>
                <div class="modal-footer">
                    <button type="submit" name="save" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>




<div class="modal inmodal fade" id="add_usefull_links" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления полезной ссылки</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" id="zona-d">
                <div class="modal-body">
                   
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда (Каз):</label>
                        <input name="HEAD_LINKS_KAZ" placeholder="" class="form-control" id="HEAD_LINKS_KAZ" type="text"/>
                    </div>                    
                    <hr />
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда (Рус):</label>
                        <input name="HEAD_LINKS_RU" placeholder="" class="form-control" id="HEAD_LINKS_RU" type="text"/>
                    </div>                                                                                          
                    <hr />
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">URL кнопки:</label>
                        <input name="URL_LINKS" placeholder="" class="form-control" id="URL_LINKS" type="text"/>
                    </div>
                    
                    <input id="readimg" type="file" name="imagereader" accept=".jpg,.jpeg,.png"/>
                    <textarea id="getbase64" style="display: none;"></textarea>
                    <div class="mail-body">
                        <a id="openimage" class="btn btn-primary"><i class="fa fa-paperclip"></i> Прикрепить файл</a><br />
                        <label>Разрешенные форматы:</label> .jpg, .jpeg, .png (Размер 1900 х 500 px)
                    </div>
                    <div id="getimage"></div>
                    <div id="zona-drop" style="cursor: pointer; display: none;">
                        <div class="dz-default dz-message">
                            <span>
                                <strong></strong><br/>
                            </span>
                        </div>
                    </div>
                    <div id="text_areas_in_base64">
                        
                    </div>
                    
                    <input name="CREATE_MAIL" value="test" style="display: none;"/>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button name="insert_link" type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>



<?php
    foreach($list_usefull_links as $k => $v){
?>
<div class="modal inmodal fade" id="edit_usefull_links<?php echo $v['ID']; ?>" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div hidden="" class="form-group" id="data_1">
                        <label class="font-noraml">ID</label>
                        <input name="id_ul" placeholder="" class="form-control" id="id_ul" value="<?php echo $v['ID']; ?>" type="text">
                    </div>
                     <?php /*             
                 $em = $_SESSION[USER_SESSION]['login'].'@gak.kz';            
                 $q = $db->Select("select * from sup_person where email = '$em'");
                        
                  $id_user = $db->id_user = $q[0]['ID']; */ ?>
               <!-- <input type="hidden" name="upd" value="<?php echo $id_user;?>"/> -->               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок (рус)</label>
                        <input name="SLIDE_HEAD_RU_UPD" placeholder="" class="form-control" id="SLIDE_HEAD_RU_UPD" value="<?php echo $v['NAME_RU']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок (каз)</label>
                        <textarea style="height: 100px;" name="SLIDE_TEXT_KAZ_UPD" class="form-control" id="SLIDE_TEXT_KAZ_UPD"><?php echo $v['NAME_KAZ']; ?></textarea>
                    </div>                                                          
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">URL кнопки</label>
                        <input name="BTN_URL_UPD" placeholder="" class="form-control" id="BTN_URL_UPD" value="<?php echo $v['URL']; ?>" type="text">
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button name="update_usefull_links" type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>
<?php
    }
?>






      <!-- Модальное окно для добавление файлов сопровождение договоров -->    
<div class="modal inmodal fade in" id="add_soprovod" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" value="8" name="category_file_soprovod" />   
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
                        <select name="list_files_soprovod" class="form-control">
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





 <!-- Модальное окно для редактирования слайда сопровождение договора -->  
   <div class="modal inmodal fade in" id="edit_soprovod" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form_soprovod">                           
                
            </form>
        </div>
    </div>
</div> 

















<script>

 function langSelect(lang)
    {
        window.location = '?lang='+lang.value;
    }

</script>





<script>
    $('#zona-drop').click(
        function(){
            $('#openimage').click();
        }
    )
</script>
              
<script>
    function delete_doc(class_name)
    {
        //console.log('classname ');
        $(".altay4").remove();
    }

    function add_doc(name, type, format)
    {
        var img = $('#getbase64').val();
        console.log(name);
        $('#text_areas_in_base64').append('<textarea hidden="" name="doc_b64" class="altay4">'+img+'</textarea>');
        var format = '';
        alert('Загружено');
    }
    
    function check_file_size(size_int, size_form)
    {
        if(size_int > 10 && size_form == 'MB')
        {
            alert('Файл '+name+'слишком большой');
            return false;
        }
    }
    
    (function() {
  
          var zonaDrop = document.getElementById('zona-drop');
          zonaDrop.addEventListener("dragover", function(e){
          e.preventDefault();
            
            zonaDrop.setAttribute("class", "over");
            
          
          }, false);
        
          zonaDrop.addEventListener("drop", function(e){
              e.preventDefault();
            var files = e.dataTransfer.files;
            var fileCount = files.length;
            var i;
            
            if(fileCount > 0) {
              for (i = 0; i < fileCount; i = i + 1) {
                var file = files[i];
                var name = file.name;
                var class_name = name.slice(0, -4);
                
                var name_split = name.split('.');
                var format = name_split[name_split.length-1];
                
                var size = bytesToSize(file.size);
                var size_int_split = size.split(' ');
                console.log(size_int_split[0]);
                console.log(size_int_split[1]);
                var checker = check_file_size(size_int_split[0], size_int_split[1]);
                if(checker == false){
                    return false;
                }
                var type = file.type;
                var reader = new FileReader();
                
                zonaDrop.removeAttribute("class");
                
                reader.onload = function(e) {
                document.getElementById("getbase64").value = e.target.result;
                var img_source = e.target.result;
                if(format != 'jpg' && format != 'png'){
                    img_source = 'styles/img/1487344174_blank.png';
                }
                zonaDrop.innerHTML+= "<div class='altay4'><img src='" + img_source + "'/></br> Название " + name +", Тип: " + type +", Размер: " + size +" <a onclick='delete_doc(altay4);'>Delete</a></div>";
                add_doc(class_name, type, format);
                };        
                reader.readAsDataURL(file);
              }
             
            }
            
          }, false);
        
        })();
        
        function simulateclick(){
            document.getElementById("readimg").click();    
        }
        
        var zonaDrop = document.getElementById('zona-drop');
        document.getElementById("readimg").style.visibility = "collapse";
        document.getElementById("readimg").style.width = "0px";
        document.getElementById("openimage").addEventListener("click", simulateclick, false);
        
        function readImage() {
            var fileToLoad = document.getElementById("readimg").files[0];
            var name = fileToLoad.name;
            var class_name = name.slice(0, -4);
            
            var name_split = name.split('.');
            var format = name_split[name_split.length-1];
            
            var size = bytesToSize(fileToLoad.size);
            var size_int_split = size.split(' ');
            var checker = check_file_size(size_int_split[0], size_int_split[1]);
            if(checker == false){
                return false;
            }
            var type = fileToLoad.type;
                                        
        	var fileReader = new FileReader();
        	fileReader.onload = function(fileLoadedEvent) {
        		var textFromFileLoaded = fileLoadedEvent.target.result;
        		var previewimage = new Image();
                // previewimage.src = textFromFileLoaded;
                document.getElementById("getimage").appendChild(previewimage) ;   
                document.getElementById("getbase64").value = textFromFileLoaded;
                img_source = 'styles/img/1487344174_blank.png';
                zonaDrop.innerHTML+="<div class='altay4'><img src='" + img_source + "'/></br> Название "+ name +", Тип: " + type +", Размер: " + size +" <a onclick='delete_doc(altay4);'>Delete</a></div>";
                add_doc(class_name, type, format);
        	};
        	fileReader.readAsDataURL(fileToLoad);
        }
        function bytesToSize(bytes) {
           var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
           if (bytes == 0) return '0 Bytes';
           var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
           return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
        };
        document.getElementById("readimg").addEventListener("change", readImage, false);
</script>

<style>
  
    #zona-drop 
    {
      min-height: 300px;
      max-width: 100%;
      padding: 15px;
      border: 4px dashed #d3d3d3;
    }
    
    #zona-drop img 
    {
      max-width: 50px;
      display: block;
      
    }
    
    .over 
    {
      border-color:#333;
      background: #ddd;
    }
    
    
</style>

<?php } else { ?>

<?php require_once Error404; } ?>




