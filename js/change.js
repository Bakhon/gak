  $('.branch').change(function(){
    var id = $('.branch').val();   
  //  var panel =  $(".nav-tabs .ui-accordion-content-active");
       
    console.log(id);
      $.post
            ('contacts',
                {"id": id                                                 
                },
                function(d)
                {        
                     $('#c2').hide();  
                   //  $('#map').hide();
                    $('#contacts_branch2').html(d);
                  //  $('.map_filial').html(d);                    
                }
            )
    
  })
  
  
  $('#map_yandex').change(function(){
    
     var tex = $('select option:checked').attr('data-id');
                
               $.post
            ('contacts',
                {"tex": tex                                                 
                },
                function(d)
                {        
                     $('#maps').hide();                    
                    $('.map_filial').html(d);                    
                }
            )         
  })
  
  $('#insurance_agent').change(function(){
    var id = $('#insurance_agent').val();
    console.log(id);
    $.post('documentation', 
    {"id_insur": id}, 
    function(d){
        $('#content-insurance').html(d);
    } 
    )  
  })
  
    $('#current_otrasl').change(function(){
    var id = $('#current_otrasl').val();
    console.log(id);
    $.post('documentation', 
    {"id_branch": id}, 
    function(d){
        $('#content-branch').html(d);
    } 
    )  
  })
  
  // Текущее состояние отросли Админская часть
     $('#current_branch').change(function(){
    var id = $('#current_branch').val();
    console.log(id);
    $.post('admin_documentation', 
    {"id_branch": id}, 
    function(d){
        $('#app').html(d);
    } 
    )  
  })
  
  
  
  
  $('#fin_indicators_change').change(function(){
    var fin = $('#fin_indicators_change').val();
    
    $.post('financial-statements',
    {"fin_id": fin},
    function(d){
        $('.b8-block').html(d);
    }
    )
    
  })
  
  
    $('#fin_indicators_state_change').change(function(){
    var fin = $('#fin_indicators_state_change').val();
    
    $.post('admin_fin',
    {"fin_id_state": fin},
    function(d){
        $('.b8-block').html(d);
    }
    )
    
  })
  
      $('#fin_indicators_state_change_sait').change(function(){
    var fin = $('#fin_indicators_state_change_sait').val();
    console.log(fin);
    
    $.post('financial-statements',
    {"fin_id_state_sait": fin},
    function(d){
        $('.b8-block').html(d);
    }
    )
    
  })
  
  
  $('#year_finance').change(function(){
    var id = $('#year_finance').val();
    alert('Hello world!');
  })
  
  function contactshide()
  {
    $('#contacts_branch').hide();
  }


 $('.calculate').click(function(){
        var id = $(this).attr('id');
        var fm = $(this).attr('data'); 
        console.log(id);
        console.log(fm);       
        var ob = {};
        $(fm+' input').each(function(i, s){
        	var name = s.id;
            var val = s.value;
            ob[name] = val;                                    
        });
        $(fm+' select').each(function(i, s){
        	var name = s.id;
            var val = s.value;
            ob[name] = val;                                    
        });
        
        
        ob['product'] = id;       
        console.log(ob); 
        $.post('index', ob, function(data){
            $('#first_item').html(data);
            $('#return_modal').modal('show');
        });
    });
  

              function callback_smiso()
        {
            var name_calback = $('#name_calback').val();
            var tel = $('#tel').val();
            var mail = $('#mail').val();
            var city = $('#city_from').val();
            var name_product = $('#name_product').val();
          
            console.log(name_calback);
            console.log(tel);
            console.log(mail);
            console.log(city);
        
        
               if(tel != '' && name_calback != '' && city != '' )
            {
                alert('Заявка отправлена! Наши сотрудники свяжутся с Вами в течение дня'); 
                          $.post
            ('index',
                {"name_calback": name_calback,
                 "tel_sait": tel,
                 "mail":mail,
                 "city": city,
                 "name_product":name_product                
                },
                function(d)
                {
                    //alert(d);
                }
            ) 
            }
        
        
          //  alert('Заявка отправлена! Наши сотрудники свяжутся с Вами в течение дня');
  
        }
        
        
        
        $(".answer button").click(function(e) {
  e.preventDefault();
  $(".answer button").removeClass('active');  
  $(this).addClass('active');   
//  window.location =  $(this).attr('href');
})


$('.service_form').click(function(){
    
    var str = $("form").serialize();
    console.log(str);
    if(str) {
      $.post('customer_support', 
    {"str": str}, 
    function(d){ 
                
    } 
    )
     swal("Благодарим за ваш отзыв", "Нам важно мнение каждого клиента!", "success");
    }
    else{
        
    }
   
})


$('#auth_alert').click(function(){
    alert("На сайте проводится технические работы!");
})

        
$('#send_form_reg').click(function(){
       event.preventDefault();
       var iin_client = $('#iin_client').val();
       var phone_client = $('#phone_client').val();
       
       if(iin_client == '')
       {
       $('#error_iin').html('<span style="color:red">Необходимо заполнить «ИИН»</span>');
       }
       
        if(iin_client != '')
       {
          $('#error_iin').remove();
       }
       
       
       if(phone_client == '')
       {
         $('#error_phone').html('<span style="color:red">Необходимо заполнить «Телефон».</span>');
       }
       
        if(phone_client != '')
       {
           $('#error_phone').remove();
       }
       
       
       if(iin_client != '' && phone_client != '' )
       {
        $('#error_iin').remove();
        $('#error_phone').remove();
       $.post(window.location.href, {"iin_client": iin_client, "phone_client": phone_client}, function(d){             
        if(d == 0){
           // alert('Hello world!');
            $('#code_confirm').append('<span>Код подтверждения:</span>'+'<input class="code" id="code" name="code" type="text" maxlength="7" required>');
            $('#confirm_btn').show();
            $('#countdown').show();
            // $('#btnconf').append('<input type="button" value="Подтвердить код"  name="ok" id="ok_conf" class="button-blue2">'+'<hr/>');
             $('#send_form_reg').hide();
            $('#cancel_form_reg').hide();
            $('#sms_show_number').show();
            $('#sms_show_phone').val(phone_client);
            $('#iin_client').prop("disabled", true); 
             $('#phone_client').prop("disabled", true); 
        }
        else if(d == 1)
        {
            alert('Вы зарегистрированы в базе, войдите с ИИН + пароль!');
             
        }
        else if(d == 2) {
            alert('Данный ИИН не зарегистрирован в базе!');
        }
        else if (d == 3) {
           // $('#error_bmg').text('Номер не соответствует к ИИН!');
            alert('Номер не соответствует к ИИН!');
        }
        
    }); 
    }
})

$('#ok_conf').click(function(){
    var code = $('#code').val();
    var phone_client = $('#phone_client').val();
    var iin_client = $('#iin_client').val();
    console.log(code);
    console.log(iin_client);
    $.post(window.location.href, {"ok": code, "phone_client": phone_client}, function(d){
        if(d == 0)
        {       
           // $.post('set_pass', {"iin_client_psw": iin_client}, function(d){                
            //    window.location.href = 'set_pass';                
          //  });
            window.location.href = 'set_pass?iin='+iin_client;
          // alert('Правильный код подтверждения');
        }
        else {
            alert('Неверный код подтверждения');
        }
    })
})

$('#send_auth').click(function(){
    var iin_auth = $('#iin_auth').val();
    var password_auth = $('#password_auth').val();
    console.log(iin_auth);
    
    if(iin_auth == '')
    {
        $('#error_iin_auth').html('<span style="color:red">Необходимо заполнить «ИИН».</span>');
    }
    
     
    if(iin_auth != '')
    {
         $('#error_iin_auth').remove();
    }
    
    if(password_auth == '')
    {        
        $('#error_psw_auth').html('<span style="color:red">Необходимо заполнить «Пароль».</span>');
    }
    
     if(password_auth != '')
    {
         $('#error_psw_auth').remove();
    }
    
    
    if(iin_auth != '' && password_auth != '')
    {  
        $('#error_iin_auth').remove();
        $('#error_psw_auth').remove();
    $.post(window.location.href, {"iin_auth": iin_auth, "password_auth": password_auth}, function(d){
        if(d == 0)
        {
            
            $.post('profile', {"iin": iin_auth}, function(d){
                window.location.href = 'profile?iin='+iin_auth;
            })
        }
        else {
            $('#error_login').show();
            $('#error_login').html('<p style="color: red;">Вы ввели не правильный логин или пароль!</p>');
           // alert('Вы ввели не правильный логин или пароль!')
        }
    })
   } 
})

$('#send_insert_to_users').click(function(){
    var psw = $('#psw').val();
    var psw_confirm = $('#psw_confirm').val();        
    if(psw != '' && psw_confirm != '' && psw == psw_confirm) {
    $.post(window.location.href, {"psw": psw}, function(d){  
        if(d == 0)
        {
            setTimeout(function(){ window.location.href = 'authorization'; }, 3000);
            alert('Пароль сохранен, вас перенаправят на страницу авторизации');
        }
        if(d == 1) {
            alert('Пользователь с таким ИИН существует, войдите через пароль + ИИН');
        }   
        if(d == 2){
            alert('Пользователь с таким ИИН не получает выплаты от компании ГАК!');
        }                   
    })
    }
    else {
        $('#password_error').html('<span style="color:red">Проверьте корректность заполненения полей</span>');
    }
})

$('#send_sms_else').click(function(){
   var iin_else =  $('.iin_client').val();
   var phone_else = $('.phone_client').val(); 
   console.log(iin_else);
   
   $.post(window.location.href, {"iin_client": iin_else, "phone_client": phone_else }, function(d){
      if(d == 0){
       // alert('Hello world!');
       $('#send_sms_else').hide();
        $('#sms_show').show();
       // timer_sms();
      } 
   })
})

      
$(".tel_obr").keypress(function(event){
  event = event || window.event;
  if (event.charCode && event.charCode!=0 && event.charCode!=46 && (event.charCode < 48 || event.charCode > 57) )
    return false;
});

$(".iin_client").keypress(function(event){
  event = event || window.event;
  if (event.charCode && event.charCode!=0 && event.charCode!=46 && (event.charCode < 48 || event.charCode > 57) )
    return false;
});

$(".iin_auth").keypress(function(event){
  event = event || window.event;
  if (event.charCode && event.charCode!=0 && event.charCode!=46 && (event.charCode < 48 || event.charCode > 57) )
    return false;
});

$(".code").keypress(function(event){
  event = event || window.event;
  if (event.charCode && event.charCode!=0 && event.charCode!=46 && (event.charCode < 48 || event.charCode > 57) )
    return false;
});


$('#continue_reset').click(function(){
    var reset_iin = $('.reset_iin').val();
    if(reset_iin != ''){
        $('#error_reset_iin').text('');
    $.post(window.location.href, {"reset_iin": reset_iin}, function(d){
        if(d == 1){
            $('.phone_reset').show();
            $('.get_sms_code').show();
            $('.continue_reset_password').hide();
        }else{
            $('#error_reset_iin').text('Данный «ИИН» не зарегистрирован в базе «АО «КСЖ ГАК»');
        }
    })
  //  console.log(reset_iin);
    }else{
        $('#error_reset_iin').text('Необходимо заполнить «ИИН».');
    }
})


$('#get_sms_code_reset').click(function(){
    var reset_iin = $('.reset_iin').val();
    var reset_phone = $('.reset_phone').val();
    if(reset_iin != '' && reset_phone != '')
    {
        $.post(window.location.href, {"iin_reset": reset_iin, "phone_reset": reset_phone}, function(d){
            if(d == 1){
                $('.sms_code_block').show();
                $('.next_step_sms_code').show();
                $('.get_sms_code').hide();
            }else{
              $('#error_reset_phone').text('«Номер» и «ИИН» не соответствует БМГ');  
            }
        })
    }else{
        $('#error_reset_phone').text('Заполните форму!');
    }
})

$('#get_step_sms_code').click(function(){
     var reset_iin = $('.reset_iin').val();
    var sms_code = $('#sms_code').val();
    var phone_res = $('.reset_phone').val();
    console.log(sms_code);
    if(sms_code != '')
    {
        $.post(window.location.href, {"ok": sms_code, "phone_res": phone_res}, function(d){
         if(d == 1){
            $('#form_2').show();
            $('#form_1').hide();
            $('.tab_sms_code').text('Установка пароля');
            $('.tab_sms').text('Установка пароля');          
         }else{
            $('#error_sms_code').text('Не правильный код подтверждения');
         }   
        })
    }else{
        
    }
})

$('#send_pass_reset').click(function(d){
    var res_pass_set = $('#reset_pass').val();
    var reset_iin_set = $('#reset_iin').val();
    console.log(reset_iin_set);
   $.post(window.location.href,{"res_iin_set": reset_iin_set, "res_pass_set": res_pass_set}, function(d){
    setTimeout(alert('Пароль успешно изменен!'), 3000);
    setTimeout(location.href='authorization', 3000);      
    })
    })
    
  
    
    

        
  