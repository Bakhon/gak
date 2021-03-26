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
                <li><a href="admin_insurance_products" class="active">Страховые продукты</a></li>
                <li><a href="admin_company">О компании</a></li>               
                 <li><a href="admin_documentation">Документы</a></li>
                 <li><a href="admin_fin">Фин отчетность</a></li>
            </ul>
        </div>
    </div>
</div>



<div class="block6 customer-support clearfix">
      <div class="container padding-0">
             
            <div class="tab-content">
            
                   <div class="select">
                  <select id="selectFAQ">
              <?php foreach($list_products as $k=>$v) { ?>
                    <option value="<?php echo $v['MENU']; ?>"><?php echo $v["ITEM_NAME_$lang"]; ?></option>
                       <?php } ?>                
                  </select>
                </div>
                <div class="faq" id="accordion1">
                  <div class="panel-group" id="accordion1">
             <form method="post">
              <input type="hidden" name="id_upd" value="<?php echo $list_hranitel[0]['ID']; ?>" />
              <textarea id="summernote" name="content" style="width: 100%;"><?php echo $list_hranitel[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form>
                  </div>
                  </div>
                  
                  <div class="faq" id="accordion2">
                  <div class="panel-group" id="accordion2">
             <form method="post">
              <input type="hidden" name="id_upd" value="<?php echo $list_premium[0]['ID']; ?>" />
              <textarea id="summernote1" name="content" style="width: 100%;"><?php echo $list_premium[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form>
                  </div>
                  </div>
                  
                  <div class="faq" id="accordion3">
                  <div class="panel-group" id="accordion3">
             <form method="post">
              <input type="hidden" name="id_upd" value="<?php echo $list_osns[0]['ID']; ?>" />
              <textarea id="summernote2" name="content" style="width: 100%;"><?php echo $list_osns[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form>
                  </div>
                  </div>
                  
                   <div class="faq" id="accordion4">
                  <div class="panel-group" id="accordion4">
             <form method="post">
              <input type="hidden" name="id_upd" value="<?php echo $list_pensionka[0]['ID']; ?>" />
              <textarea id="summernote3" name="content" style="width: 100%;"><?php echo $list_pensionka[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form>
                  </div>
                  </div>
                  
                  
                  
                   <div class="faq" id="accordion5">
                  <div class="panel-group" id="accordion5">
             <form method="post">
              <input type="hidden" name="id_upd" value="<?php echo $list_529[0]['ID']; ?>" />
              <textarea id="summernote4" name="content" style="width: 100%;"><?php echo $list_529[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form>
                  </div>
                  </div>
                  
                   <div class="faq" id="accordion6">
                  <div class="panel-group" id="accordion6">
             <form method="post">
              <input type="hidden" name="id_upd" value="<?php echo $premium_corporate[0]['ID']; ?>" />
              <textarea id="summernote5" name="content" style="width: 100%;"><?php echo $premium_corporate[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form>
                  </div>
                  </div>
                  
                  
                   <div class="faq" id="accordion7">
                  <div class="panel-group" id="accordion7">
             <form method="post">
              <input type="hidden" name="id_upd" value="<?php echo $hranitel_corporate[0]['ID']; ?>" />
              <textarea id="summernote6" name="content" style="width: 100%;"><?php echo $hranitel_corporate[0]["CONTENT_$lang"]; ?></textarea>
              <button name="save_termin" type="submit" class="btn btn-md btn-primary"> Сохранить описание </button>
          </form>
                  </div>
                  </div>
                  
              </div>
              </div>    
                </div>
                
                <?php } else { require_once Error404; } ?>
            