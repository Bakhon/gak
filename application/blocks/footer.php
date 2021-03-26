<?php
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
?>




  
    <!--FOOTER-->
  <footer class="footer">
    <div class="container">
      <div class="foot-flex mb-35">
        <div class="foot foot-add">
          <ul>
            <li><a href="/" class="logo"><img src="img/logo.svg" alt=""></a></li>
            <li><a href="tel:8 (7172) 916 333" class="tel">8 (7172) 916 333</a></li>
            <li><a href="mailto:info@gak.kz" class="email">info@gak.kz</a></li>
            <li><span><?php echo $list_elem[20]["TEXT_$lang"]; ?></span></li>
          </ul>
        </div>
        <div class="foot">
          <div class="title-f"><?php echo $list_ftr[0]["NAME_$lang"]; ?></div>
          <ul class="menu-f">
          <?php foreach($list_footer as $k=>$v) { ?>
            <li><a href="<?php echo $v['URL']; ?>"><?php echo $v["NAME_$lang"]; ?></a></li>            
            <?php } ?>
          </ul>
        </div>
        <div class="foot">
          <div class="title-f"><?php echo $list_ftr[6]["NAME_$lang"]; ?></div>
          <ul class="menu-f">
          <?php foreach($list_footer7 as $k=>$v) { ?>
            <li><a href="<?php echo $v['URL']; ?>"><?php echo $v["NAME_$lang"]; ?></a></li>  
            <?php } ?>         
          </ul>
        </div>
        <div class="foot">
          <div class="title-f"><?php echo $list_ftr[11]["NAME_$lang"]; ?></div>
          <ul class="menu-f">
          <?php foreach($list_footer2 as $k=>$v) { ?>
            <li><a href="<?php echo $v['URL'] ?>"><?php echo $v["NAME_$lang"]; ?></a></li>
           <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-2">
      <div class="container">
        <div class="foot-flex">
          <span>© 2004-2020 АО "КСЖ "ГАК" Все права защищены</span>
          
                   
          <div class="social">
           <div><span>Мы в социальных сетях!</span> </div>   
           <div class="social-item">
           <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
         <!--   <a href="https://wa.me/77081110311" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
            <a href="https://t.me/gak_kz" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a> 
           </div>                    
          </div>
        </div>
      </div>
      <div class="mobile-footer">
        <div class="language">
          <a href="?lang=KAZ" <?php if($lang == 'KAZ'){ ?> class="active"<?php } ?>>Kz</a>
            <a href="?lang=RU" <?php if($lang == 'RU'){ ?> class="active" <?php } ?>>Ru</a>        
        </div>
        <div class="social">
          <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://t.me/gak_kz" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a> 
        </div>
      </div>
    </div>
  </footer>
  <!--FOOTER END-->

  <div class="modal-window">
    <div id="Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <div class="modal-title"><?php echo $list_elem[51]["TEXT_$lang"]; ?></div>
            <!--  <div class="modal-title">Ваша заявка принята!</div> -->
          </div>
          <div class="modal-body">
            <form action="">
            <div class="form">
                <span><?php echo $list_elem[47]["TEXT_$lang"]; ?></span>
                <select style="height: 48px;" name="client_email_req" id="client_email_req" class="select2_demo_1 form-control pos_btn" required="">
                        <option value="0"></option>                                                   
                        <option value="1" selected="">Консультация по продуктам </option>
                        <option value="2">Выплата по НС</option>
                        <option value="3">Закупки</option>
                        <option value="4">Сотрудничество и маркетинг </option>
                        <option value="5">Прочие вопросы</option>
                    </select>
              </div>
              <div class="form">
                <span><?php echo $list_elem[48]["TEXT_$lang"]; ?></span>
                <input required="" id="name" name="name" type="text">
              </div>
              <div class="form">
                <span><?php echo $list_elem[88]["TEXT_$lang"]; ?></span>
                <select style="height: 48px;" name="city_from_client" id="city_from_client" class="select2_demo_1 form-control pos_btn" required="">
                        <option value="0"></option>
                        <?php foreach($list_city as $k=>$v) { ?>                                                   
                        <option value="<?php echo $v['ID']; ?>"><?php echo $v["CITY_$lang"]; ?></option>
                        <?php } ?>
                       
                </select>
              </div>
              <div class="form">
                <span><?php echo $list_elem[49]["TEXT_$lang"]; ?></span>
                <input id="tel" class="tel_obr" name="tel" type="tel" id="phone1" placeholder="+7" value="+7" maxlength="12" required="">
              </div>
              <button onclick="call_back_func();" class="button-blue"><?php echo $list_elem[50]["TEXT_$lang"]; ?></button>
            </form>
            <!-- <div class="text">Наш менеджер свяжется с вами в ближайшие время</div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  

  
  
  <script>

        function call_back_func()
        {
            var name = $('#name').val();
            var tel = $('#tel').val();
            var client_email_req = $('#client_email_req').val();
            var city_from_client = $('#city_from_client').val();

       if(tel != '' && name != '')
            {
                alert('Заявка отправлена! Наши сотрудники свяжутся с Вами в течение дня');  
                     $.post
            ('index',
                {"name": name,
                 "tel": tel,
                 "client_email_req":client_email_req,
                 "city_from_client": city_from_client               
                },
                function(d)
                {
                                 
                }
            ) 
            }
                     
                               
        }

        
        
    </script>
    
    

  
  <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'UUKfbKBEy3';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<?php  $url = $_SERVER['REQUEST_URI']; 
   $p = explode('/', $url);
   $auth = $p[1]; 
   if($auth != 'ecp') {
   ?>
  <script src="js/jquery-1.12.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script src="js/jquery-simple-mobilemenu.min.js"></script>
  <script src="js/common.js"></script>
  <script src="js/change.js"></script>
    <script src="js/sweetalert.min.js"></script>
  <script src="dropzone/dropzone.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
<script src="js/editor.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src='https://www.google.com/recaptcha/api.js'></script>  
  
<!-- <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script> -->
    

<?php
}
 if($auth == 'ecp') { ?>
  <script type="text/javascript" src="js/nclayer/jquery.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/nclayer/jquery.blockUI.js" charset="utf-8"></script>
   <script type="text/javascript" src="js/nclayer/ncalayer.js" charset="utf-8"></script> 
  <script type="text/javascript" src="js/nclayer/process-ncalayer-calls.js" charset="utf-8"></script> 
  
<?php
 }
?>


<!-- <script src="js/plugin/responsivevoice.min.js"></script> -->
<script src="js/plugin/js.cookie.js"></script>
<script src="js/plugin/bvi-init.js"></script>
<script src="js/plugin/bvi.min.js"></script>
<!--  <script src="http://finevision.ru/static/js/finevision_banner.js"></script> -->
<script>


$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {        
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
				

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});




$(".language a").click(function(e) {
  e.preventDefault();
  $(".language a").removeClass('active');  
  $(this).addClass('active');   
  window.location =  $(this).attr('href');
})

        $(".print_gr").click(function() {
            var fm = $(this).attr('data-id');
            console.log(fm);
            $.post(window.location.href, {"fm": fm}, function(d){
                
            })
        var head_of_doc = $('#head_of_doc').html();
        var table_with_data = $('#table_with_data').html();
        $('#area_for_print').html(head_of_doc + table_with_data);
        $('#table_form').submit();
    })
    
    $('#exit_acc').click(function(){
        var em = $(this).attr('data-id');
        console.log(em);
        $.post(window.location.href, {"em": em}, function(d){
            
        })
    })
    
    $('#registration').click(function(){
        alert('В данный момент регистрация недоступно! Попробуйте позже');
    })

  $('#send_to_chief').click(function(){
  //  console.log('captcha response: ' + grecaptcha.getResponse());
        $name = $('#name').val();
        $email = $('#email').val();
        $iin = $('#iin').val();
        $theme = $('#theme').val();
        $text_sms = $('#text_sms').val();
        $tel = $('#phone_client_blog').val();
        $grecaptcha = grecaptcha.getResponse();
        if($name == ''){
            $('#error_name').text('Не заполнено поле «Имя»');
        }
        if($email == ''){
            $('#error_email').text('Не заполнено поле «Почта»');
        }
        if($tel.length != '18' ){
            $('#error_tel').text('Не заполнено поле «Номер телефона»');
        }
         if($name != ''){
            $('#error_name').text('');
        }
        if($email != ''){
            $('#error_email').text('');
        }
        if($iin != ''){
            $('#error_iin').text('');
        }
        
        if($tel.length == '18'){
            $('#error_tel').text('');
        }
        
                
        // $email != '' && $iin != '' && $theme != '' && $text_sms != ''
        if($name != '' && $email != '' && $tel.length == '18'){
            $.post('blog', {"name": $name, "email": $email, "phone_client": $tel, "theme": $theme, "text_sms": $text_sms, "g-recaptcha-response": $grecaptcha}, function(d){
            //   console.log(d);
             if(d == 1){
                alert('Заполните капчу!');
             } 
             else{
                alert(d);                
                $('form[name=blog_form]').trigger('reset');

               // $('#blog_item').text(d);
               // alert('Ваша заявка принята и зарегистрировано под номером №ОБ0001');
             }          
            })                            
        }else{
          //  alert('Заполните форму!');
        }
    })
    

</script>





<script>


$(document).ready(function() {
  $('#summernote').summernote();
});

$(document).ready(function() {
  $('#summernote1').summernote();
});

$(document).ready(function() {
  $('#summernote2').summernote();
});

$(document).ready(function() {
  $('#summernote3').summernote();
});

$(document).ready(function() {
  $('#summernote4').summernote();
});

$(document).ready(function() {
  $('#summernote5').summernote();
});

$(document).ready(function() {
  $('#summernote6').summernote();
});


$(document).ready(function() {
  $('#summernote7').summernote();
});

$(document).ready(function() {
  $('#summernote8').summernote();
});

$(document).ready(function() {
  $('#summernote9').summernote();
});

$(document).ready(function() {
  $('#summernote10').summernote();
});


$(document).ready(function() {
  $('#summernote11').summernote();
});

$(document).ready(function() {
  $('#summernote12').summernote();
});


$(document).ready(function() {
  $('#summernote13').summernote();
});


$(document).ready(function() {
  $('#summernote14').summernote();
});


$(document).ready(function() {
  $('#summernote15').summernote();
});

$(document).ready(function() {
  $('#summernote117').summernote();
});

$(document).ready(function() {
  $('#summernote93').summernote();
});


$(document).ready(function() {
  $('#summernote95').summernote();
});
$(document).ready(function() {
  $('#summernote434').summernote();
});
$(document).ready(function() {
  $('#summernote435').summernote();
});
$(document).ready(function() {
  $('#summernote532').summernote();
});
$(document).ready(function() {
  $('#summernote534').summernote();
});

</script>


<script>


  $(document).ready(function() {
    for(var i=0;i<=1000;i++) {
  $('#summernote'+i).summernote();
    }
});


</script>





<script>

$('.btn1').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_main',
                {"id": id                                                 
                },
                function(d)
                {        
                        $('.form').html(d);             
                }
            )         
})


$('.btn_license').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_company',
                {"id": id                                                 
                },
                function(d)
                {        
                        $('.form_license').html(d);             
                }
            )         
})


$('.btn_goszakup').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_documentation',
                {"id": id                                                 
                },
                function(d)
                {        
                        $('.form_goszakup').html(d);             
                }
            )         
})


$('.btn_instarif').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_documentation',
                {"id": id                                                 
                },
                function(d)
                {        
                        $('.form_instarif').html(d);             
                }
            )         
})


$('.btn_agent').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_documentation',
                {"id_agent": id                                                 
                },
                function(d)
                {        
                        $('.form_agent').html(d);             
                }
            )         
})


$('.btn_org').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_documentation',
                {"id_org": id                                                 
                },
                function(d)
                {        
                        $('.form_org').html(d);             
                }
            )         
})


$('.btn_plan').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_documentation',
                {"id_plan": id                                                 
                },
                function(d)
                {        
                        $('.form_plan').html(d);             
                }
            )         
})

$('.btn_inie').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_documentation',
                {"id_inie": id                                                 
                },
                function(d)
                {        
                        $('.form_inie').html(d);             
                }
            )         
})


$('.btn_soprovod').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_clients_support',
                {"id_soprovod": id                                                 
                },
                function(d)
                {        
                        $('.form_soprovod').html(d);             
                }
            )         
})


$('.btn_sved').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_company',
                {"id_sved": id                                                 
                },
                function(d)
                {        
                        $('.form_sved').html(d);             
                }
            )         
})

$('.btn_agents').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_documentation',
                {"id_inie": id                                                 
                },
                function(d)
                {        
                        $('.form_agents2020').html(d);             
                }
            )         
})


$('.btn_fin_state').click(function(){   
    var id = $(this).attr('data-id');
    console.log(id);
    
       $.post
            ('admin_fin',
                {"id_fin": id                                                 
                },
                function(d)
                {        
                        $('.form_fin').html(d);             
                }
            )         
})



</script>



      <!-- Script -->
        <script type='text/javascript'>
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;

                $.ajax({
                    type: 'POST',
                    url: 'admin_upload_files',
                    data: {name: name,request: 2},
                    sucess: function(data){
                        console.log('success: ' + data);
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
        </script>



<!-- // Черно белый фильтр
<style>
 body{
     -webkit-filter: grayscale(100%); * Safari 6.0 - 9.0 */
    filter: grayscale(100%);
 }
  

</style>
-->
</body>

</html>
