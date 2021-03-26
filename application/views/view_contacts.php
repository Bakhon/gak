
    <div class="header-third">
      <div class="container">
    <div class="header-t">
<div class="title"><?php echo $list_elem[44]["TEXT_$lang"]; ?></div>
    </div>
    <div class="header-t1">
      <img src="img/6.png" alt="" class="img">
    </div>
  </div>
  </div>



    <!--CONTENT-->
  <main class="content">
    <div class="block10 clearfix">
      <div class="container-776">
        <ul class="nav nav-tabs" role="tablist">
          <li><a href="#menu1" role="tab" data-toggle="tab"><?php echo $list_elem[41]["TEXT_$lang"]; ?></a></li>
          <li class="active"><a href="#menu2" role="tab" data-toggle="tab"><?php echo $list_elem[42]["TEXT_$lang"]; ?></a></li>
          <li><a href="#menu3" role="tab" data-toggle="tab"><?php echo $list_elem[43]["TEXT_$lang"]; ?></a></li>
        </ul>
</div>
        <div class="tab-content">
          <div class="tab-pane fade " id="menu1">
            <div class="container-776 mb-40">   

                
                   <?php 
        if($lang == 'KAZ'){
                            $lang = "_$lang";
                        }else{
                            $lang = "";
                        }
        foreach($list_department as $k=>$v) {?>
            <div class="contacts">
              <div class="cont-1">
                 <p><?php echo $v["NAME$lang"]; ?></p>
                <span><?php echo $v["ADDRES$lang"]; ?></span>
              </div>
              <div class="cont-2">
                <span><?php echo $v["MOD_OPERATION$lang"]; ?></span>
              </div>
              <div class="cont-3">
                <a href="tel: <?php echo $v["TELEPHONE"]; ?> "> <?php echo $v["TELEPHONE"]; ?> </a>
                <?php if($v['ID'] == '16') {?><img src="https://img.icons8.com/ios/10/000000/important-mail.png"/> <a href="mailto:marketing@gak.kz">marketing@gak.kz</a><?php } ?> 
              </div>
            </div>
         <?php } ?>  
          </div>
          
          
          <div class="tab-pane container" id="">
          <!--
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1053.0282315190627!2d71.43484586621982!3d51.11699602775511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245841715491cad%3A0x9409380c6bff1314!2z0L_RgC3Rgi4g0JzQsNC90LPQuNC70LjQuiDQldC7LiAyMCwg0J3Rg9GALdCh0YPQu9GC0LDQvSAwMjAwMDA!5e0!3m2!1sru!2skz!4v1575872552648!5m2!1sru!2skz" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
-->
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aea28cff3169e834b29f76d73eba6af8ca7a94b75f4c1038fad1e7c42efe1c662&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
          </div>
          
          
        </div>
          <div class="tab-pane fade active in" id="menu2">
            <div class="container-776">
            <div class="tab-con">
<div class="form-select">

<select class="branch" name="branch" id="map_yandex">
  <option value=""></option>
  <?php
           session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
        
             
       if($lang == 'KAZ'){
                            $lang = "_KZ";
                        }else{
                            $lang = "";
                        }                                          
   foreach($list_branch as $kk=>$vv) { ?>
  <option class="a" value="<?php echo $vv['RFBN_ID']; ?>" data-id="<?php echo $vv['RFBN_ID']; ?>"><?php echo $vv["NAME$lang"]; ?></option>
  <?php } ?>
</select>

</div>
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#list" role="tab" data-toggle="tab"><i class="fa fa-list-ul" aria-hidden="true"></i> <?php if($lang == '_KZ') {?>Тізім  <?php }else { ?>Список<?php } ?></a></li>
          <li><a href="#map" role="tab" data-toggle="tab"><i class="fa fa-map-o" aria-hidden="true"></i><?php if($lang == '_KZ') {?>Картада<?php } else{?> На карте <?php } ?></a></li>
        </ul>
      </div>
    </div>
      <div class="tab-content">
      <div class="tab-pane fade active in" id="list">
        <div class="container-776 mb-40">
        <div id="contacts_branch2" class="contacts"></div>
            <?php

                          
                            
  ?>
  <div id="c2">
        <?php    
        
             session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
        
             
       if($lang == 'KAZ'){
                            $lang = "_KZ";
                        }else{
                            $lang = "";
                        }
        foreach($list_branch as $k => $v){ ?>    
            <div  id="contacts_branch" class="contacts">
          
              <div class="cont-1">
                <p><?php echo $v["NAME$lang"]; ?></p>
                <span><?php echo $v["ADDRESS$lang"]; ?></span>
              </div>
              <div class="cont-2">
                <span><?php echo $v["GR_JOB$lang"]; ?></span>
              </div>
              <div class="cont-3">
                <a href=" <?php echo $v['PHONE']; ?>"> <?php echo $v['PHONE']; ?></a>                
              </div>
            
            </div>
  <?php } ?>  
           
       </div>  
          
         
           
          </div>
        </div>
       
        <div class="tab-pane fade" id="maps">
        
        </div>
          <div class="tab-pane fade" id="map">
         <div class="container"> <div class="map_filial"></div></div>
<!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aba91088dc4e8d9f4e55703668184334c1b7927f5332587d808144aae473fd2b4&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe> -->
          </div>
          </div>
        </div>
        
          <div class="tab-pane fade" id="menu3">
            <div class="container-776 mb-40">
            
          <?php 
          
     session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
          
          echo $list_beneficiar[0]["NAME_$lang"]; ?>
            
          </div>
          </div>
        </div>
    </div>
  </main>
  <!--CONTENT END-->
  
 
  
   
  
  
  
  
  
  
  
  
  
  
