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
                <li><a href="admin_vacancy">Вакансия</a></li>
                <li><a href="admin_upload_files" >Файлы</a></li>
                <li><a href="admin_clients_support">Клиентская поддержка</a></li>
                <li><a href="admin_insurance_products">Страховые продукты</a></li>
                <li><a href="admin_company">О компании</a></li>
                 <li><a href="admin_documentation">Документы</a></li>
                 <li><a href="admin_fin" class="active">Фин отчетность</a></li>
            </ul>
        </div>
    </div>
</div>


 
 
    <div class="block8 clearfix">
      <div class="container-776">
      
<div style="display: flex;justify-content: space-between;">  
                    <h2>Редактировать</h2>
                    <button style=" margin-top: 20px; height: 35px;" data-toggle="modal" data-target="#add_fin_state" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файл</button>                                             
               </div>
        <div class="date">
          <span>Выберите год:</span>
          <div class="select">
            <select name="" id="fin_indicators_state_change">
              <option value="2020">2020 г.</option>
              <option value="2019">2019 г.</option>
              <option value="2018">2018 г.</option>
              <option value="2017">2017 г.</option>
            </select>
          </div>
        </div>
        <div class="b8-block">
      <?php
      $y = 2020;
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
                            <a id="ed"  data-id="'.$v['ID'].'" data-toggle="modal" data-target="#edit_ins" href="#" class="btn btn-white btn-sm btn_fin_state"><i class="fa fa-pencil"></i> Редактировать</a>
                                    <input hidden="" name="delete_file_ins" value="'.$v['ID'].'"/>                                    
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Удалить </button>
                        </form>                                                                                      
                        </div>';
                             
      
    } }
      $html .= '</div>';
            echo $html; }
       ?>
        
          </div>
        
          
        </div>
      </div>
    
                  
          
                  
               
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
 
               
               </div>
               
               
               
               
               
               
               
               
               
               
               
               
   <div class="modal inmodal fade in" id="add_fin_state" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления файла</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">
                <div class="modal-body">  
                <input type="hidden" name="fin_val" value="15" />                 
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
                        <select name="fin_god" class="form-control">
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>     
                            <option value="2018">2018</option>  
                            <option value="2017">2017</option>  
                        </select>
                    </div>
                    
                     <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите квартал:</label>
                        <select name="fin_kvartal" class="form-control">
                            <option value="31.03.">1 квартал</option>
                            <option value="30.06.">2 квартал</option>  
                            <option value="30.09.">3 квартал</option> 
                            <option value="29.12.">4 квартал</option> 
                            <option value="30.12.">Годовой отчет</option>    
                        </select>
                    </div>
                    
     <div class="form-group" id="data_1">            
               <label class="font-noraml">Дата публикации:</label>
               <div class="input-group date">
                  <span class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </span>
                  <input placeholder="01.01.2020" type="text" class="form-control dateOform" name="POST_DATE" data-mask="99.99.9999" id="POST_DATE" required="" value="">
               </div>
            </div>
                    
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Выберите файл из списка:</label>
                        <select name="list_files_fin" class="form-control">
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
            <form method="post" class="form_fin">                           
                
            </form>
        </div>
    </div>
</div> 


<?php } else { ?>

<?php require_once Error404; } ?>

          