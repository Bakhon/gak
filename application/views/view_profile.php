 <?php if($_SESSION[IIN]) { ?>
 <!--CONTENT-->
  <main class="content">
    <div class="container">
      <div class="profile">
        <div class="title">Личный кабинет</div>
        <div class="profile-item">
          <div class="profile-item_1">
            <div class="img"><img src="img/users.png" alt=""></div>
            <div class="text">
            <div class="sign-out" style="display: flex; justify-content: space-between;">
                <div class="name"><?php echo $lastname.' '.$name.' '.$middlename; ?>
                </div>
                <div>
                <a id="exit_acc" data-id="<?php echo $_SESSION[IIN]; ?>" href="exit_acc" style="color: #333;">
                <i class="fa fa-sign-out" aria-hidden="true">Выйти</i>
                </a>
                </div>
            </div>
              
              <div class="iin"><?php echo $iin; ?></div>
              <div class="pi-flex">
                <div class="item">
                  <span>Дата рождения</span>
                  <p><?php echo $birthdate; ?></p>
                </div>
                <div class="item">
                  <span>Телефон</span>
                  <p><?php echo $phone; ?></p>
                </div>
                <div class="item">
                  <span>Адресные данные</span>
                  <p><?php echo $address; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="profile-item_2">
            <div class="title-m">Сведения о действующих договорах</div>
            <div class="item-flex">
            <?php for($i=0; $i<count($list_active_contracts)/2;$i++) { ?>
              <div class="item">
                <div class="it">
                  <span class="gray width-50">Договор аннуитетного страхования:</span> <a href="reference?contract_num=<?php echo $list_active_contracts[$i]['CONTRACT_NUM']; ?>"><span class="blue width-50">№ <?php echo $list_active_contracts[$i]['CONTRACT_NUM']; ?></span></a>
                </div>
                <div class="it">
                  <span class="gray width-50">Период страховых выплат:</span> <span class="width-50"><span class="bold">c</span> <?php echo $list_active_contracts[$i]['DATE_BEGIN']; ?> <span class="bold pl-30">по</span> <?php echo $list_active_contracts[$i]['DATE_END']; ?></span>
                </div>
                <div class="it">
                  <span class="gray width-50">Периодичность страховых выплат:</span> <span class="width-50"><?php echo $list_active_contracts[$i]['PERIODICH']; ?></span>
                </div>
              </div>
            <?php } $ss = $i;  ?>
            </div>
            <?php if($ss >= 3) { ?>
            <hr />
            <?php } ?>
             <div class="item-flex">
            <?php for($i=3; $i<count($list_active_contracts);$i++) { ?>
              <div class="item">
                <div class="it">
                  <span class="gray width-50">Договор аннуитетного страхования:</span> <a href="reference?contract_num=<?php echo $list_active_contracts[$i]['CONTRACT_NUM']; ?>"><span class="blue width-50">№ <?php echo $list_active_contracts[$i]['CONTRACT_NUM']; ?></span></a>
                </div>
                <div class="it">
                  <span class="gray width-50">Период страховых выплат:</span> <span class="width-50"><span class="bold">c</span> <?php echo $list_active_contracts[$i]['DATE_BEGIN']; ?> <span class="bold pl-30">по</span> <?php echo $list_active_contracts[$i]['DATE_END']; ?></span>
                </div>
                <div class="it">
                  <span class="gray width-50">Периодичность страховых выплат:</span> <span class="width-50"><?php echo $list_active_contracts[$i]['PERIODICH']; ?></span>
                </div>
              </div>
            <?php }  ?>
            </div>
            
          </div>
          <div class="profile-item_3">
            <a href="reference?contract_num=<?php echo $last_contract; ?>" class="button-blue3">Получить справку о произведенных выплатах</a>
            <div class="button-blue3" >
            <a href="#modal-grafik"  data-toggle="modal" style="color: #fff;">График страховых выплат по договору пенсионного аннуитета</a>
            </div>
            <a href="#modal-address" data-toggle="modal" class="button-blue3">Внести изменения в адресные данные</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->
  
  
  
  
  
   <div class="modal-window">
    <div id="Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <div class="modal-title">Заказать обратный звонок</div>
            <!--  <div class="modal-title">Ваша заявка принята!</div> -->
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form">
                <span>Имя</span>
                <input type="text">
              </div>
              <div class="form">
                <span>Номер телефона</span>
                <input type="tel" id="phone1" placeholder="+7" value="+7">
              </div>
              <button class="button-blue">Отправить</button>
            </form>
            <!-- <div class="text">Наш менеджер свяжется с вами в ближайшие время</div> -->
          </div>
        </div>
      </div>
    </div>
  </div>

 <div class="modal-window-address">
    <div id="modal-address" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <div class="title-m">Изменение адресных данных</div>
            <div class="form">
              <form method="POST" action="">
                <div class="form-flex">
                  <div class="form-1">
                    <span>Область</span>
                    <input type="hidden" name="iin_addr" value="<?php echo $_SESSION[IIN]; ?>" />
                    <select name="reg_districts" id="">
                     <option value=""></option>
                    <?php foreach($list_districts as $k=>$v){ ?>
                    <option <?php if($v['ID_REGION'] == $reg_adress_districts) { echo 'selected'; } ?> value="<?php echo $v['ID_REGION']; ?>"><?php echo $v['RU_NAME']; ?></option>
                    <?php  } ?>
                    </select>
                  </div>
                  <div class="form-1">
                    <span>Регион</span>
                    <select name="reg_region" id="region">
                     <option value=""></option>
                      <?php foreach($list_region as $k=>$v) { ?>
                      <option <?php if($v['ID'] == $reg_adress_reg_id2) { echo 'selected';} ?> value="<?php echo $v['ID']; ?>"><?php echo $v['RU_NAME']; ?></option>                      
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-1">
                    <span>Город</span>
                    <select name="city" id="">
                      <option value="">Выберите город</option>
                      <option value="">Алматы</option>
                    </select>
                  </div>
                  <div class="form-1">
                    <span>Улица</span>
                    <input name="reg_adress_street" type="text" value="<?php echo $reg_adress_street; ?>">
                  </div>
                  <div class="form-1">
                    <span>Дом</span>
                    <input name="reg_adress_building" type="text" value="<?php echo $reg_adress_building; ?>">
                  </div>
                  <div class="form-1">
                    <span>Страна</span>
                    <select name="country" id="">
                    <option></option>
                    <?php foreach($list_country as $k=>$v) { ?>
                      <option <?php if($v['ID'] == $REG_ADDRESS_COUNTRY_ID) { echo 'selected';} ?> value="<?php echo $v['ID']; ?>"><?php echo $v['RU_NAME']; ?></option>                      
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <button name="addres" class="button-blue">Сохранить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--
  <div class="modal-window-address">
    <div id="modal-address" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <div class="title-m">Изменение адресных данных</div>
            <div class="form">
              <form method="POST">
                <div class="form-flex">
                  <div class="form-1" style="width: 100%;">
                    <span>Адрес</span>
                    <input type="hidden" name="iin_addr" value="<?php echo $_SESSION[IIN]; ?>" />
                    <input type="text" name="addres" value="<?php echo $address; ?>">
                  </div>
                </div>
                <button class="button-blue">Сохранить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
  
    <div class="modal-window-address">
    <div id="modal-grafik" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <div class="title-m">Выберите договор</div>
            <div class="form">
              <form method="POST" action="reference">
                <div class="form-flex">
                  <div class="form-1" style="width: 100%;">
                    <span>Выберите договор</span>
                    <div class="select">
                        <select name="contracts" id="">
                        <?php foreach($list_active_contracts as $k=>$v) { ?>
                          <option value="<?php echo $v['CONTRACT_NUM'] ?>"><?php echo $v['CONTRACT_NUM'] ?> от <?php echo $v['DATE_BEGIN']; ?></option>                          
                          <?php } ?>
                        </select>
                    </div>                  
                  </div>
                </div>
                <button class="button-blue">Сформировать</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }  else {?>
    <!--CONTENT-->
  <main class="content">
    <div class="page">
      <img src="img/404.png" alt="" class="center-block img-responsive">
      <p>Извините! Такой страницы не существует</p>
      <span>Перейдите на <a href="/">главную страницу</a></span>
    </div>
  </main>
  <!--CONTENT END-->
 
  <?php } ?>