<?php    
    if(count($POSTS) > 0){
        if(isset($POSTS['login'])){
            $login = SqlInject(trim($POSTS['login']));
            $password = trim($POSTS['password']);          
            $user_dan = ACTION::LdapUserDan($login, $password);            
            if($user_dan == false){
                require_once NotLogin;
                exit;
            }
            
            $_SESSION[USER_SESSION] = $user_dan;          
            
            $url = 'admin_main';
            
            
            if(isset($_POST['url_request'])){
                $url = $_POST['url_request'];
            }
            
            if($url == '/')
            {
                $url = 'admin_main';
            }
            
            
            header("Location: $url");
        }        
    }
?>

