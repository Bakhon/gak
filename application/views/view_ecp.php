  <!--CONTENT-->
  <main class="content">
    <div class="authorization">
      <div class="container">
        <div class="title">Авторизация</div>
        <div class="block-auth">
          <ul class="nav nav-tabs">
           
            <li class="active"><a data-toggle="tab" href="#menu2">Вход по ЭЦП</a></li>
          <!--  <li class=""><a data-toggle="tab" href="#menu3">Ввод одноразового пароля</a></li>  -->
          </ul>

          <div class="tab-content">           
            <div id="menu2" class="tab-pane fade  in active ">
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

          </div>
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->
  
  
<!--  <script type="text/javascript" src="js/ncalayer.js" charset="utf-8"></script>  -->
