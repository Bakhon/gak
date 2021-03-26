<?php if($_SESSION[USER_SESSION]) { ?>

<div class="header-secondary">
    <div class="head-c">
        <img src="img/2.jpg" alt="" class="img">
        <div class="title" style="color: #fff;">Административная панель</div>
    </div>
    <div class="menu-secondary">
        <div class="" style="margin-left: 10px;">
            <ul>
                <li><a href="admin_main" class="active">Главная</a></li>
                <li><a href="admin_contacts?contact_id=1617">Контакты сайта</a></li>
                <li><a href="admin_news">Новости</a></li>
                <li><a href="admin_vacancy">Вакансия</a></li>
                <li><a href="admin_upload_files">Файлы</a></li>
                <li><a href="admin_clients_support">Клиентская поддержка</a></li>
                
            </ul>
            
            
            <ul>
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
    <div class="block6 clearfix">
      <div class="container padding-0">
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
          <div class="col-md-3 col-sm-4 col-xs-12 b6-menu">
            <ul class="nav nav-tabs tabs-left">
              <li class="active"><a href="#menu1" data-toggle="tab">Слайдер</a></li>
              <li><a href="#menu2" data-toggle="tab">Фин показатели сайта</a></li>
           <!--   <li><a href="#menu3" data-toggle="tab"></a></li> -->
              <li><a href="#menu4" data-toggle="tab">Список заявок на обратный звонок</a></li>
              <!--
              <li><a href="#menu5" data-toggle="tab"><?php echo $list_about[4]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu6" data-toggle="tab"><?php echo $list_about[5]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu7" data-toggle="tab"><?php echo $list_about[6]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu8" data-toggle="tab"><?php echo $list_about[7]["ITEM_NAME_$lang"];?></a></li>  -->
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
              <div class="tab-pane active" id="menu1">
               
               
               
               
               
               
               <div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="project-list">
                    <div class="df" style="display: flex;
    justify-content: space-between;
    align-items: center;">
                    <div>
                    <h2>
                            Редактировать слайдер
                        </h2>
                    </div>
                    <div>
                    <button data-toggle="modal" data-target="#add_slide" type="submit" class="btn btn-md btn-primary" ><i class="fa fa-plus-square"></i> Добавить слайд </button>
                    </div>
                    </div>
                        
                    <!--    <span class="pull-right">
                            <a target="_blank" href="site_panel_arc" class="btn btn-warning btn-xs"><i class="">История изменений</i></a>
                        </span> -->                        
                        <table class="table table-hover">
                            <tbody>
                            <?php
                                foreach($list_slider as $k => $v){
                                    
                                    $image = "upload/".$v['ROOT'];
                                    
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
                            ?>
                            <tr>
                                <td class="col-sm-4">
                                    <div class="text-center">
                                        <img alt="image" class="img-responsive" src="<?php echo $src; ?>">
                                        <div class="m-t-xs font-bold"><?php echo $v['BTN_TEXT']; ?>(<?php echo $v['BTN_URL_RU']; ?>)</div>
                                    </div>
                                </td>
                                <td class="project-title">
                                    <a href="project_detail.html"><?php echo $v['SLIDE_HEAD_KAZ']; ?></a>
                                    <br>
                                    <small><?php echo $v['SLIDE_TEXT_KAZ']; ?></small><br /><br />
                                    <a href="project_detail.html"><?php echo $v['SLIDE_HEAD_RU']; ?></a>
                                    <br>
                                    <small><?php echo $v['SLIDE_TEXT_RU']; ?></small><br /><br />
                                    <a href="project_detail.html"><?php echo $v['SLIDE_HEAD_ENG']; ?></a>
                                    <br>
                                    <small><?php echo $v['SLIDE_TEXT_ENG']; ?></small><br />
                                </td>
                                <td class="project-actions">
                                    <form method="post">
                                    <input hidden="" name="delete_slide" value="<?php echo $v['ID']; ?>"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Удалить </button>
                                    <a data-toggle="modal" data-target="#edit_slide<?php echo $v['ID']; ?>" href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Редактировать </a>
                                    </form>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox">
                <div class="ibox-content">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal inmodal fade" id="add_slide" role="dialog"  aria-hidden="true">
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
                        <input name="SLIDE_HEAD_KAZ" placeholder="" class="form-control" id="SLIDE_HEAD_KAZ" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда (Каз):</label>
                        <textarea name="SLIDE_TEXT_KAZ" class="form-control" id="SLIDE_TEXT_KAZ"></textarea>
                    </div>
                    <hr />
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда (Рус):</label>
                        <input name="SLIDE_HEAD_RU" placeholder="" class="form-control" id="SLIDE_HEAD_RU" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда (Рус):</label>
                        <textarea name="SLIDE_TEXT_RU" class="form-control" id="SLIDE_TEXT_RU"></textarea>
                    </div>
                    <hr />                                                
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст кнопки Каз:</label>
                        <input name="BTN_TEXT_KAZ" placeholder="" class="form-control" id="BTN_TEXT_KAZ" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст кнопки Рус:</label>
                        <input name="BTN_TEXT_RU" placeholder="" class="form-control" id="BTN_TEXT_RU" type="text"/>
                    </div>                  
                    <hr />
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">URL кнопки:</label>
                        <input name="BTN_URL_RU" placeholder="" class="form-control" id="BTN_URL_RU" type="text"/>
                    </div>
                <!--    
                <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files" class="form-control">
                            <option></option>
                        <?php foreach($list_files as $k=>$v) { ?>    
                            <option value="<?php echo $v['ID']; ?>"><?php  echo $v['NAME'];  ?></option>                 
                            <?php } ?>          
                                                    </select>
                    </div> -->
                    <div class="form-group" id="data_1">
                      <input type="file" name="file_adm" />  
                    </div>
                  
                    <input name="CREATE_MAIL" value="test" style="display: none;"/>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button name="create_slider" type="submit" id="save" class="btn btn-success">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>
<?php
    foreach($list_slider as $k => $v){
?>
<div class="modal inmodal fade" id="edit_slide<?php echo $v['ID']; ?>" role="dialog"  aria-hidden="true">
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
                        <input name="ID_UPD" placeholder="" class="form-control" id="ID_UPD" value="<?php echo $v['ID']; ?>" type="text">
                    </div>
                     <?php /*             
                 $em = $_SESSION[USER_SESSION]['login'].'@gak.kz';            
                 $q = $db->Select("select * from sup_person where email = '$em'");
                        
                  $id_user = $db->id_user = $q[0]['ID']; */ ?>
               <!-- <input type="hidden" name="upd" value="<?php echo $id_user;?>"/> -->               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда каз</label>
                        <input name="SLIDE_HEAD_KAZ_UPD" placeholder="" class="form-control" id="SLIDE_HEAD_KAZ_UPD" value="<?php echo $v['SLIDE_HEAD_KAZ']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда каз</label>
                        <textarea style="height: 100px;" name="SLIDE_TEXT_KAZ_UPD" class="form-control" id="SLIDE_TEXT_KAZ_UPD"><?php echo $v['SLIDE_TEXT_KAZ']; ?></textarea>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда рус</label>
                        <input name="SLIDE_HEAD_RU_UPD" placeholder="" class="form-control" id="SLIDE_HEAD_RU_UPD" value="<?php echo $v['SLIDE_HEAD_RU']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда рус</label>
                        <textarea style="height: 100px;" name="SLIDE_TEXT_RU_UPD" class="form-control" id="SLIDE_TEXT_RU_UPD"><?php echo $v['SLIDE_TEXT_RU']; ?></textarea>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда англ</label>
                        <input name="SLIDE_HEAD_ENG_UPD" placeholder="" class="form-control" id="SLIDE_HEAD_ENG_UPD" value="<?php echo $v['SLIDE_HEAD_ENG']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда англ</label>
                        <textarea style="height: 100px;" name="SLIDE_TEXT_ENG_UPD" class="form-control" id="SLIDE_TEXT_ENG_UPD"><?php echo $v['SLIDE_TEXT_ENG']; ?></textarea>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст кнопки</label>
                        <input name="BTN_TEXT_KAZ_UPD" placeholder="" class="form-control" id="BTN_TEXT_KAZ_UPD" value="<?php echo $v['BTN_TEXT_KAZ']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст кнопки</label>
                        <input name="BTN_TEXT_RU_UPD" placeholder="" class="form-control" id="BTN_TEXT_RU_UPD" value="<?php echo $v['BTN_TEXT_RU']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст кнопки</label>
                        <input name="BTN_TEXT_ENG_UPD" placeholder="" class="form-control" id="BTN_TEXT_ENG_UPD" value="<?php echo $v['BTN_TEXT_ENG']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">URL кнопки</label>
                        <input name="BTN_URL_UPD" placeholder="" class="form-control" id="BTN_URL_UPD" value="<?php echo $v['BTN_URL_RU']; ?>" type="text">
                    </div>
                <!--    <div class="form-group" id="data_1">
                        <label class="font-noraml">Порядок отображения</label>
                        <input name="ORDER_ID" placeholder="" class="form-control" id="ORDER_ID" value="<?php echo $v['ORDER_ID']; ?>" type="text">
                    </div>  -->
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-success">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>
<?php
    }
?>

              
<script>
    function text_transofm(){
        var text_area_mail = $('#text_area_mail').val();
        var type = $('#TYPE').val();
        var state = $('#STATE').val();
        var REG_NUM = $('#REG_NUM').val();
        var HEAD_TEXT = $('#HEAD_TEXT').val();
        var SENDER = $('#SENDER').val();
        var RECIPIENT = $('#RECIPIENT').val();
        var DATE_START = $('#DATE_START').val();
        var DATE_END = $('#DATE_END').val();
        var LINK_FROM = $('#LINK_FROM').val();
        var SHORT_TEXT = $('#SHORT_TEXT').val();
        var CONTENT = $('.content').html();
        console.log(CONTENT);
        
        $.post('create_mail',   {"CREATE_MAIL": "CREATE_MAIL",
                                 "type": type,
                                 "state": state,
                                 "REG_NUM": REG_NUM,
                                 "HEAD_TEXT": HEAD_TEXT,
                                 "SENDER": SENDER,
                                 "RECIPIENT": RECIPIENT,
                                 "DATE_START": DATE_START,
                                 "DATE_END": DATE_END,
                                 "LINK_FROM": LINK_FROM,
                                 "SHORT_TEXT": SHORT_TEXT,
                                 "CONTENT": CONTENT
                                }, function(d)
        )
    }
</script>



<style>
    textarea {width:320px; height:100px; border: 1px solid #000;}
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
    
    p {font-family: calibri}
</style>

               
               
               
               
               
               
               
               
               
               
               
               
               
              </div>
              <div class="tab-pane" id="menu2">
             
             
             
             
             
<div class="row">

<div class="col-lg-12">
<?php foreach($list_f as $k=>$v) { ?>
                <div class="ibox">
                    <div class="ibox-title"  style="display: flex;justify-content: space-between;">
                        <h5><?php echo $v['NAME_RU'].'/ '.$v['NAME_KAZ']; ?></h5>
                        <div class="ibox-tools">
                        
                            
                            <a id="ed" data-id="<?php echo $v['ID']; ?>"  data-toggle="modal" data-target="#edit_slide22" href="#" class="btn btn-white btn-sm btn1"><i class="fa fa-pencil"></i> Редактировать</a>                                              
                           
                        </div>
                    </div>
                    <div class="ibox-content" style="">
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 50px;"><div class="scroll_content" style="overflow: hidden; width: auto; height: 200px;">
                            <p>
                              <?php echo $v['TEXT_RU']; ?> 
                            </p>
                            <?php if($v['ID'] == 21) { ?>
                           <p><?php echo $v['DATE_FIN']; ?></p>
                          <?php } ?>
                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 166.667px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                    </div>
                </div>
                <?php } ?>
            </div>


</div>



<div class="modal inmodal fade in" id="edit_slide22" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Редактировать</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post" class="form">
            
            </form>                        
        </div>        
    </div>
</div>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
            </div>
            <div class="tab-pane" id="menu3">
             <?php echo $list_about[2]["CONTENT_$lang"]; ?>
            </div>
            <div class="tab-pane" id="menu4">
          
          
          
          <div class="title">Список заявок на обратный звонок</div>
          
          <div class="dflex-prod">
                    <div class="product clearfix" style="width: 800px;">
                    <div class="table-responsive">
              <table>
                <tbody><tr><th>ID</th><th>Имя</th><th>Телефон</th><th>Дата и время заявки</th><th>Категория</th></tr>
                <?php foreach($list_corps_call as $k=>$v) { ?>
                <tr><td><?php echo $v['ID']; ?></td><td><?php echo $v['NAME']; ?></td><td><?php echo $v['PHONE']; ?>
</td><td>
<?php echo $v['POST_DATE']; ?>
</td><td>
<?php echo $v['NAME_CAT']; ?>
</td></tr>
<?php } ?>
    
     
    
                               </tbody></table>
            </div>  
                    </div>
                  
                  </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
            </div>
            <div class="tab-pane" id="menu5">
            
            </div>
            <div class="tab-pane" id="menu6">
              <div class="title">Информация о корпоративных событиях</div>
              
              
              
            </div>
            <div class="tab-pane" id="menu7">
            <?php echo 1; ?>
            </div>
            <div class="tab-pane" id="menu8">
           <?php echo $list_about[7]["CONTENT_$lang"]; ?>    
            <div class="row"><div class="span8">
<p>
<a target="_blank" href="/upload/письмо%20подтверждение%20АО%20ФГСВ.pdf"><img alt="" src="/upload/pdf.png" style="width: 20px; height: 20px;">
<font color="#333">Письмо подтверждение АО ФГСВ</font></a></p>
</div></div>          
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--CONTENT END-->





<?php } else { ?>

<?php require_once Error404; } ?>



