  <!--CONTENT-->  
  <?php //if($_SERVER['HTTP_REFERER'] == 'http://gak.kz/registration') {
 ?>  
  <main class="content">
    <div class="authorization">
      <div class="container">
        <div class="title">Установите пароль </div>
        <div class="block-auth">
<div class="tab-content">
          <div id="menu2" class="tab-pane fade in active">
              <div class="form">
                  <form method="POST">                              
                  <div class="form-1">
                  <input id="iin_client" type="hidden" name="iin_client" value="<?php echo $iin_client_psw; ?>" />
                    <span>Пароль</span>
                    <input placeholder="" value="<?php echo $_POST['iin_client']; ?>" class="psw" id="psw" name="psw" type="password" maxlength="12" required="">                                                           
                  </div>                   
                  <div class="form-1">
                          <span>Подтвердите пароль</span>
                          <input id="psw_confirm" name="psw_confirm" type="password" required>                                                    
                  </div>
                  <div id="password_error" class="form-1">                                                                        
                  </div>
                           
                  <div class="form-flex">
                   <a id="cancel_form_reg" type="button" class="button-blue-line2" href="authorization">Отменить</a>
                   <input style="width: 48%;" type="button" id="send_insert_to_users" value="Отправить"  class="button-blue2" />
                  <!--  <button name="send_sms" id="send_form_reg" class="button-blue2">Получить смс-код</button> -->
                  </div>
             
                 
                </form>         
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->


<?php //}

//else {        
 ?>

  <!--CONTENT-->
 <!-- 
  <main class="content">
    <div class="page">
      <img src="img/404.png" alt="" class="center-block img-responsive">
      <p>Извините! Такой страницы не существует</p>
      <span>Перейдите на <a href="/">главную страницу</a></span>
    </div>
  </main>
  -->
  <!--CONTENT END-->
 
 <?php // } ?>

