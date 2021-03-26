<?php

$db = new DB();

     session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];
    

$list_products = $db->select("select * from insurance2.CORP_SITE_PRODUCTS order by id");

$list_hranitel = $db->select("select * from insurance2.CORP_SITE_PRODUCTS where id = 1");

$list_premium = $db->select("select * from insurance2.CORP_SITE_PRODUCTS where id = 2");

$list_osns = $db->select("select * from insurance2.CORP_SITE_PRODUCTS where id = 3");

$list_pensionka = $db->select("select * from insurance2.CORP_SITE_PRODUCTS where id = 4");

$list_529 = $db->select("select * from insurance2.CORP_SITE_PRODUCTS where id = 5");

$premium_corporate = $db->select("select * from insurance2.CORP_SITE_PRODUCTS where id = 6");

$hranitel_corporate = $db->select("select * from insurance2.CORP_SITE_PRODUCTS where id = 7");




if(isset($_POST['save_termin'])){
        $id  = $_POST['id_upd'];
        $p['CONTENT'] = $_POST['content'];
       
        $sql_to_slide = "UPDATE insurance2.CORP_SITE_PRODUCTS SET CONTENT_$lang = EMPTY_CLOB() WHERE ID = $id
                        RETURNING CONTENT_$lang INTO :CONTENT";
              
        $t = $db->AddClob($sql_to_slide, $p);
        header('location: admin_insurance_products');
        //echo $sql_to_slide;
    }

?>