<?php
    require_once 'application/config.php'; 
   
    $msg = '';
    $msgAlert = '';
    $active_user_dan = array();
    $html = '';
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $POSTS = $_POST;
    }elseif($_SERVER['REQUEST_METHOD'] == "GET"){
        $GETS = $_GET;
    }        
   
    if($handle = opendir(UNITS)){
        while (false !== ($file = readdir($handle)))
        {                     
            if(($file !== '..')&&($file !== '.'))
            {
                $p = explode('.', $file);
                if($p[1] == 'php'){
                    require_once UNITS.$file;
                }                                        
            }            
        }
    }
     
    //при переносе на сайт убрать эту строку
    //$RQ = str_replace('insurance/', '', $_SERVER['REQUEST_URI']);
    $RQ = $_SERVER['REQUEST_URI']; 
    $server_name = $_SERVER['SERVER_NAME'];
  //  echo $RD;
               
    $piecesOfUrl = explode('/', $RQ);    
    if (!empty($piecesOfUrl[1])){        
       $page = $piecesOfUrl[1];
       $ps = explode("?", $page);
       $page = $ps[0]; 
	}


    if($page == 'exit'){
        unset($_SESSION[USER_SESSION]);
        Header("Location: /");
    }
    

if($server_name == '192.168.5.19') {
    if(empty($_SESSION[USER_SESSION])){
        unset($_SESSION[USER_SESSION]);

        $load_page_not_ses = array('printdog', 'calc_sait', 'rep_frx', 'loadpdf', 'get_sql', 'send_msg', 'timer');
        $b = false;

        foreach($load_page_not_ses as $k){
            if($page == $k){
                $b = true;
            }
        }
        if($b == false){
            $page = 'login_admin';
        }                        
    }

    }
 
     
    if($page == '')$page = 'index';  
    $load_all = true;         
    if($page == 'modal'){$load_all = false;}      
    if(count($GETS) > 0){        
        if(isset($GETS['ns'])){
            $load_all = false;
        }
    }
    
    
            
        //ACTION::ActiveUser(); /*Установка определенных параметров*/
        //ACTION::ProvUserPage();
 //       $autoload = new AUTOLOAD();
 //       $autoload->init_method(); 
      
    if(file_exists(CONTR.'contr_'.$page.'.php')){
        require_once CONTR.'contr_'.$page.'.php'; 
    }    
           
          
            require_once MODELS.'header.php'; 
            require_once VIEWS.'view_'.$page.'.php';
            require_once MODELS.'footer.php';
            
                     
           
?>