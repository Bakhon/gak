<?php

    $now_url = $_SERVER['REQUEST_URI'];    
    $URL = explode("?", $now_url);   
    
     session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
    
       if(isset($_POST['em']))
    {
        $em = $_POST['em'];
        $sql = "INSERT INTO SITE_SESSION(IIN, DT, ACTION) VALUES('$em', sysdate, 'OUT')";
        $db->execute($sql);
    }
    
    
    if(isset($_GET['logout'])){
        if($_GET['logout'] == 1){
            unset($_SESSION['authcode']);
            unset($_SESSION['hashed_password']);
            header("Location: login");
        }
    }
     
    $data = date('d.m.Y');
       
    $db = new DB();
    $sql_menu = "select * from INSURANCE2.CORPSITE_MENU order by ID";
    $list_menu = $db -> Select($sql_menu);  
    
   
    
    $sql_submenu = "select * from INSURANCE2.CORPSUBMENU where MENU_ID = 2";
    $list_submenu = $db->select($sql_submenu);
    
    $sql_submenu3 = "select * from INSURANCE2.CORPSUBMENU where MENU_ID = 3";
    $list_submenu3 = $db->select($sql_submenu3);
    
    $sql_submenu4 = "select * from INSURANCE2.CORPSUBMENU where MENU_ID = 4";
    $list_submenu4 = $db->select($sql_submenu4);
    
    $sql_elem = "select * from INSURANCE2.CORP_SAIT_ELEMS order by ID";
    $list_elem = $db -> Select($sql_elem);
    
    $sql_footer = "select * from INSURANCE2.CORPSAIT_FOOTER where id_block = 1 order by ID";
    $list_footer = $db -> Select($sql_footer);  
    
    $sql_ftr = "select * from INSURANCE2.CORPSAIT_FOOTER order by ID";
    $list_ftr = $db -> Select($sql_ftr);     
    
    $sql_footer7 = "select * from INSURANCE2.CORPSAIT_FOOTER where id_block = 7 order by ID";
    $list_footer7 = $db -> Select($sql_footer7);    
    
    $sql_footer2 = "select * from INSURANCE2.CORPSAIT_FOOTER where id_block = 2 order by ID";
    $list_footer2 = $db -> Select($sql_footer2);  
    
    $sql_city = "select * from INSURANCE2.CORPSITE_CITY order by id desc";
    $list_city = $db->select($sql_city);
   
?>


<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="title" content ="Государственная аннуитетная компания по страхованию жизни" />    
	<meta name="description" content="Государственная компания по страхованию жизни. Гарантированные выплаты. Стабильность. Финансовая защищенность" />
	<meta name="keywords" content="страхование, страхование жизни, страхования, обязательное страхование, ОСНС, пенсионный аннуитет, страхование от несчастного случая, добровольное страхование работника от несчастных случаев, гак, государственная аннуитетная компания, ао гак" />
	<meta name="author" content="" />
    <meta name="robots" content="all" />
    <meta property="og:url" content="http://gak.kz/"/>    
    <meta property="og:type" content="website" />
	<meta property="og:title" content="ГАК"/>
    <meta property="og:description" content="страхование, страхование жизни, страхования, обязательное страхование, ОСНС, пенсионный аннуитет, страхование от несчастного случая, добровольное страхование работника от несчастных случаев, гак, государственная аннуитетная компания, ао гак"/>
    <meta property="og:image" content="http://www.gak.kz/img/logo.svg"/> 
	<meta property="og:site_name" content="ГАК"/>
  
  <title>АО "КСЖ "ГАК"</title>
  <link rel="shortcut icon" href="img/favicon.ico"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/jquery-simple-mobilemenu-slide.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/sweetalert.css">
 <link href="dropzone/dropzone.css" rel="stylesheet" type="text/css"> 
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bvi.min.css" type="text/css">
<link rel="stylesheet" href="css/bvi-font.min.css" type="text/css">

  
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(45679935, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        trackHash:true
   });
</script>
<!-- /Yandex.Metrika counter -->
  
  
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105142767-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105142767-2');
</script>  
  
</head>


<!--
 <div class="header-3">
  <div class="container" style="text-align: center;">
  Вы находитесь на обновленном сайте. Мы делаем его удобным для вас. Перейти на  <a style="text-decoration: underline;" target="_blank" href="http://old.gak.kz:8080/">старую версию сайта</a>
  </div>
  </div>
-->
  <!--HEADER-->
  

  <header class="header">   
    <div class="header-1">
      <div class="container">
        <div class="logo-mobile"> <a href="/"><img src="img/logo.svg" alt="" class="img-responsive"></a></div>
        <div class="head-1">
          <div class="language">
          <a href="?lang=KAZ" <?php if($lang == 'KAZ'){ ?> class="active"<?php } ?>>Kz</a>
            <a href="?lang=RU" <?php if($lang == 'RU'){ ?> class="active" <?php } ?>>Ru</a>
            <a href="#" class="bvi-open" title="Версия сайта для слабовидящих"><img src="img/icon-slabovid.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
           <!-- <a href="?lang=ENG"<?php if($lang == 'ENG'){ ?> class="active" <?php } ?>>En</a> -->
          </div>
          <div class="slogan">
                <p>Надежное страхование жизни!</p>
          </div>
          <div class="head1-1">
            <div class="social">
            
              <a href="https://www.facebook.com/GAK.KZ/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/gakinsurance/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <!--    <a href="https://wa.me/77081110311" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
              <a href="https://t.me/gak_kz" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a> 
           <!--   <div id="finevision_banner" onclick="finevision.activate_navbar()" style="cursor: pointer; z-index: 9999;  float: right; top: 0px;"><img src="img/icon-slabovid.png"></div> -->                                  
            </div>
            
            
            <!--  <a style="margin-right: 15px;" id="specialButton" href="#"><img src="img/icon-slabovid.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a> -->
            <a href="tel:+7 7172 916 333" class="tel">+7 7172 916 333</a>
            <a href="#Modal" data-toggle="modal" class="call-back"><?php echo $list_elem[0]["TEXT_$lang"]; ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-2">
      <div class="navbar navbar-default navbar-static-top">
        <div class="container header2-2">
          <div class="navbar-header">
          <!-- img/logo.svg -->
            <a href="/" class="logo"><img alt="Logo" src="img/logo.svg" class="img-responsive"></a>
          </div>
          <div class="navbar-collapse collapse menu">
            <ul class="nav navbar-nav">
            
              <li><a href="about"><span><?php echo $list_menu[0]["NAME_$lang"]; ?></span></a></li>
              <li class="dropdown menu-large">
              
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span><?php echo $list_menu[1]["NAME_$lang"]; ?></span></a>
                <ul class="dropdown-menu megamenu">
                  <div class="container">
                      <?php foreach($list_submenu as $k=>$v) { ?>
            <li><a href="<?php echo $v['URL']; ?>"><?php echo $v["NAME_$lang"]; ?></a></li>            
            <?php } ?>
                  </div>
                </ul>
              </li>
              <li class="dropdown menu-large">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span><?php echo $list_menu[2]["NAME_$lang"]; ?></span></a>
                <ul class="dropdown-menu megamenu">
                  <div class="container">
                  <?php foreach($list_submenu3 as $k=>$v) {?>
                    <li><a href="<?php echo $v['URL']; ?>"><?php echo $v["NAME_$lang"]; ?></a></li>
                    <?php } ?>
                  </div>
                </ul>
              </li>
              
                     <?php  if($server_name == '192.168.5.19')
    {
        if($_SESSION[USER_SESSION]) {  ?>
              <li><a href="admin_main"><span>Админка</span></a></li>
              
              <?php }} else { ?>
              
              <li><a href="customer-support"><span><?php echo $list_menu[3]["NAME_$lang"]; ?></span></a></li>
              <li><a href="contacts"><span><?php echo $list_menu[4]["NAME_$lang"]; ?></span></a></li>              
       <?php } ?>
            </ul>
          </div>
         
          <div class="header-button">
         <?php  if($server_name == '192.168.5.19')
    {
        if($_SESSION[USER_SESSION]) {
     ?>   
         
         <a href="exit" class="button-blue"><img src="img/icon/user.svg" alt="">Выйти</a> 
         <?php } } if(!$_SESSION[IIN]) { ?>
          <a href="authorization" class="button-blue"><img src="img/icon/user.svg" alt=""> <?php echo $list_elem[1]["TEXT_$lang"]; ?></a> 
          <?php } else { ?>
          <a href="profile" class="button-blue"><img src="img/icon/user.svg" alt=""> <?php echo $list_elem[1]["TEXT_$lang"]; ?></a>  
          <?php } ?>
          </div>
         
        </div>
      </div>
    </div>
    <div class="menu-mobile">
      <ul class="mobile_menu" >
        <li>
          <a href="#"><?php echo $list_menu[1]["NAME_$lang"]; ?></a>
          <ul class="submenu">
             <?php foreach($list_submenu as $k=>$v) { ?>
            <li><a href="<?php echo $v['URL']; ?>"><?php echo $v["NAME_$lang"]; ?></a></li>            
            <?php } ?>
          </ul>
        </li>
        <li>
          <a href="#"><?php echo $list_menu[2]["NAME_$lang"]; ?></a>
          <ul class="submenu">
              <?php foreach($list_submenu3 as $k=>$v) {?>
                    <li><a href="<?php echo $v['URL']; ?>"><?php echo $v["NAME_$lang"]; ?></a></li>
                    <?php } ?>
          </ul>
        </li>
        <li>
          <a href="#"><?php echo $list_menu[0]["NAME_$lang"]; ?></a>
          <ul class="submenu">
          <?php foreach($list_submenu4 as $k=>$v) { ?>
            <li><a href="<?php echo $v['URL']; ?>" class="active"><?php echo $v["NAME_$lang"]; ?></a></li>
          
            <?php } ?>
          </ul>
        </li>
     <!--    <a id="specialButton" href="#"><img src="img/icon-slabovid.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" />  ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ</a> -->
        <li><a href="customer-support"><?php echo $list_menu[3]["NAME_$lang"]; ?></a> </li>
        <li><a href="contacts"><?php echo $list_menu[4]["NAME_$lang"]; ?></a></li>
      </ul>
    </div>
  </header>
  <!--HEADER END-->

<body>