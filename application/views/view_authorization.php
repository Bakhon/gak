  <!--CONTENT-->
  <main class="content">
    <div class="authorization">
      <div class="container">
        <div class="title">Авторизация</div>
        <div class="block-auth">
          <ul class="nav nav-tabs">
           <li class="active"><a data-toggle="tab" href="#menu1">Вход через ИИН и пароль</a></li> 
         <!--   <li class=""><a data-toggle="tab" href="#menu2">Вход по ЭЦП</a></li> -->
          <!--  <li class=""><a data-toggle="tab" href="#menu3">Ввод одноразового пароля</a></li>  -->
          </ul>

          <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active ">
              <div class="form">
                <form method="POST" action="">
                  <div class="form-1">
                    <span>ИИН</span>
                    <input required="" class="iin_auth" id="iin_auth" name="iin_auth" type="text" maxlength="12">
                    <div id="error_iin_auth" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>
                  </div>
                  <div class="form-1">
                    <span>Пароль</span>
                    <input required="" id="password_auth" name="password_auth" type="password">
                    <div id="error_psw_auth" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>
                    <!-- <a style="text-align:left; text-decoration:underline" class="" href=""><span class="">Забыли пароль?</span></a> -->                    
                  </div>
                <!--  <a><p>Забыли пароль?</p></a>  -->
                
                   <div id="error_login" style="display: none;" class="form-flex">                   
                  </div>
                  <div class="form-flex">
                    <a style="margin-bottom: 15px;" href="registration">Регистрация</a>
                    <input id="send_auth" type="button" class="button-blue2" value="Войти в систему">                   
                  </div>
                  
                  <div class="form-flex ecp">
                   <a style="width:100%;" href="ecp">Войти по ЭЦП</a>
                  </div> 
                  <p style="margin-top: 15px;" class="text-center"><a class="btn-link" href="reset">Забыли пароль?</a></p>                                 
                </form>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade ">
              <div class="form-second">
                
                  <div class="form-2">
                    <span>ИИН</span>
                    <input readonly="" type="text">
                  </div>
                  <div class="form-2">
                    <span>Email</span>
                    <input readonly type="text">
                  </div>
                  <div class="form-2">
                    <span>ФИО</span>
                    <input readonly type="text">
                  </div>
                  <div class="form-2">
                    <span>Срок действия</span>
                    <input readonly type="text">
                  </div>
                  <select hidden="" id="storageSelect" class="custom-select">
                    <option value="PKCS12" selected>PKCS12</option>
                </select>
                  <button onclick="getKeyInfoCall();" class="button-blue2">Выбрать сертификат</button>
                
             <!--   <form action="">
                  <div class="form-2">
                    <span>ИИН</span>
                    <p>9807083012389</p>
                  </div>
                  <div class="form-2">
                    <span>Email</span>
                    <p>aslan@mail.ru</p>
                  </div>
                  <div class="form-2">
                    <span>ФИО</span>
                    <p>Аслан Сергазы Нургалиевич</p>
                  </div>
                  <div class="form-2">
                    <span>Срок действия</span>
                    <p>20.02.2022</p>
                  </div>
                  <button class="button-blue2">Войти</button>
                </form> -->
              </div>
            </div>
            <div id="menu3" class="tab-pane fade">
              <div class="form">
                <form action="">
                  <div class="form-1">
                    <span>Фамилия</span>
                    <input type="text">
                  </div>
                  <div class="form-1">
                    <span>Имя</span>
                    <input type="text">
                  </div>
                  <div class="form-1">
                    <span>Отчество</span>
                    <input type="text">
                  </div>
                  <div class="form-1">
                    <span>ИИН</span>
                    <input type="text">
                  </div>
                  <div class="email-tel">
                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="pill" href="#mail">E-mail</a></li>
                      <li><a data-toggle="pill" href="#tel">Мобильный</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="mail" class="tab-pane fade in active">
                        <div class="form-1">
                          <span>E-mail</span>
                          <input type="email">
                        </div>
                      </div>
                      <div id="tel" class="tab-pane fade">
                        <div class="form-1">
                          <span>Номер телефона</span>
                          <input type="text" id="phone3" value="+7" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-flex">
                    <button class="button-blue-line2">Отменить</button>
                    <button class="button-blue2">Отправить</button>
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
