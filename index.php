<?php       

    //ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'] .'ses_path/');
    ini_set('session.gc_maxlifetime', 120960);
    ini_set('session.cookie_lifetime', 120960);
    ini_set('display_errors', 1);
   // error_reporting(E_ALL);
   error_reporting(0); 
  //  phpinfo();
    header("Cache-control: public");
    header("Expires: " . gmdate("D, d M Y H:i:s", time() + 60*60) . " GMT");
    require_once 'application/app.php';
?>