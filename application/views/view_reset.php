  <!--CONTENT-->
  <?php session_start(); ?>
  <main class="content">
    <div class="authorization">
      <div class="container">
        <div class="title tab_sms_code">Восстановление пароля</div>
        <div class="block-auth">
          <ul class="nav nav-tabs ">
           <li class="active "><a class="tab_sms" data-toggle="tab" href="#menu1">Восстановление пароля</a></li> 
          </ul>

          <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active ">
              <div class="form" id="form_1">
                <form method="POST" action="">
                  <div class="form-1">
                    <span>ИИН</span>
                    <input required="" class="reset_iin" id="reset_iin" name="" type="text" maxlength="12">
                    <div id="error_reset_iin" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>
                  </div> 
                  
                    <div class="form-1 phone_reset" style="display: none;">
                    <span>Номер телефона</span>
                    <input required="" class="reset_phone" id="reset_phone" name="" type="text" maxlength="12">
                    <div id="error_reset_phone" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>
                  </div>   
                  
                   <div class="form-1 sms_code_block" style="display: none;">
                    <span>Введите SMS код</span>
                    <input required="" class="sms_code" id="sms_code" name="sms_code" type="text" maxlength="6">
                    <div id="error_sms_code" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>
                  </div>  
                                                       
                   <div id="error_login" style="display: none;" class="form-flex">                   
                  </div>
                  <div class="form-flex continue_reset_password">                    
                    <input style="width: 100%" id="continue_reset" type="button" class="button-blue2" value="Продолжить">                   
                  </div>
                 
                  <div class="form-flex get_sms_code" style="display: none;">                    
                    <input style="width: 100%" id="get_sms_code_reset" type="button" class="button-blue2" value="Получить смс-код">                   
                  </div>
                  
                   <div class="form-flex next_step_sms_code" style="display: none;">                    
                    <input style="width: 100%" id="get_step_sms_code" type="button" class="button-blue2" value="Продолжить">                   
                  </div>
                
                                                   
                </form>
              </div>
              
                    <div class="form" id="form_2" style="display: none;">
                  <form method="POST">   
                  <div class="form-1" style="display: none;">
                    <span>ИИН</span>
                    <input required="" class="reset_iin" id="reset_iin" value="<?php echo $_SESSION[IIN_RESET]; ?>" name="" type="text" maxlength="12">
                    <div id="error_reset_iin" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>
                  </div>                           
                  <div class="form-1">                  
                    <span>Пароль</span>
                    <input placeholder="" value="" class="reset_pass" id="reset_pass" name="reset_pass" type="password" maxlength="12" required="">                                                           
                  </div>                   
                  <div class="form-1">
                          <span>Подтвердите пароль</span>
                          <input id="confirm_reset_psw" name="confirm_reset_psw" type="password" required>                                                    
                  </div>
                  <div id="password_error" class="form-1">                                                                        
                  </div>
                           
                  <div class="form-flex">
                   <a id="cancel_form_reg" type="button" class="button-blue-line2" href="authorization">Отменить</a>
                   <input style="width: 48%;" type="button" id="send_pass_reset" value="Отправить"  class="button-blue2" />
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
  
  <style>
  
    .authorization .tab-content .form-flex .ecp {
    width: 100%;}
  </style>
  
<!--  <script type="text/javascript" src="js/ncalayer.js" charset="utf-8"></script>  -->
