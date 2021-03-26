  <!--CONTENT-->
  <main class="content">
    <div class="authorization">
      <div class="container">
        <div class="title">Регистрация</div>
        <div class="block-auth">
<div class="tab-content">
          <div id="menu3" class="tab-pane fade in active">
              <div class="form">
                  <form method="POST">             
                  <div class="form-1">
                    <span>ИИН*</span>
                    <input placeholder="Введите ИИН" value="<?php echo $_POST['iin_client']; ?>" class="iin_client" id="iin_client" name="iin_client" type="text" maxlength="12" required="">
                    <div id="error_iin" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>                                       
                  </div>
                   
                  <div class="form-1">
                          <span>Номер телефона*</span>
                          <input class="phone_client" id="phone_client" name="phone_client" type="text" required>
                          <div id="error_phone" style="color:red; margin-top: -20px; margin-bottom: 15px;" class="help"></div>
                  </div>
                   <div class="form-1" id="error_bmg">
                  </div> 
                  <div class="form-1" id="code_confirm">
                  </div> 
                   <div id="btnconf" class="form-flex">
                  
                  </div>  
          
                  <div class="form-flex">
                   <a id="cancel_form_reg" type="button" class="button-blue-line2" href="authorization">Отменить</a>
                   <input type="button" id="send_form_reg" value="Получить смс-код"  class="button-blue2" />
                  <!--  <button name="send_sms" id="send_form_reg" class="button-blue2">Получить смс-код</button> -->
                  </div>                                                     
                 <div id="confirm_btn" style="display:none;" class="form-flex">
                  <input style="width:100%" type="button" value="Подтвердить код"  name="ok" id="ok_conf" class="button-blue2">
                  </div>
                  <br/>
                                   <div id="countdown" style="display: none;">
  <p style="text-align:center;">Отправить код в SMS через  <span class="display">120</span> секунд</p>
  <a class="btn" id="send_sms_else" style="display: none;">Отправить смс-код еще раз!</a> 
</div>  
<div id="sms_show" style="display: none;">
<p style="text-align:center;">Смс отправлен на номер <?php echo $_POST['phone_client']; ?> </p>
</div>
                 
                </form>         
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <script>

      (function(d){
  var display = d.querySelector('#countdown .display') // меняющаяся цифра
	var timeLeft = parseInt(display.innerHTML) // оставшееся время
  
  var timer = setInterval(function(){
    if (--timeLeft >= 0) { // если таймер всё еще больше нуля
    	display.innerHTML = timeLeft // обновляем цифру
    } else {
    	d.querySelector('#countdown p').style.display = 'none' // прячем теекст
      d.querySelector('#countdown a').style.display = 'block' // показываем кнопку
      clearInterval(timer) // удаляем таймер
    }
  }, 1000)  // таймер срабатывает каждые 1000 msec (1 sec)
})(document)
  
  </script>
  
  <!--CONTENT END-->

<!--  <script type="text/javascript" src="js/ncalayer.js" charset="utf-8"></script>  -->

