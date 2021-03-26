

<div class="container">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
         
            <h3>АО КСЖ ГАК</h3>
            <p>Для входа в административную панель, необходимо ввести Логин и Пароль от Вашей учетной записи
               
            </p>            
            
            <?php 
                $s = 'readonly onfocus="$(this).removeAttr('."'readonly'".');"';
                if($_SERVER['REMOTE_ADDR'] == '192.168.5.24'){
                    $s = '';
                }                
            ?>
            <form style="margin-left: 25%; width: 50%" class="m-t" role="form" method="post">
                <div class="form-group">      
                    <input type="text" <?php //echo $s; ?> class="form-control" placeholder="Ваш Логин" name="login"/>
                </div>                
                <div class="form-group">
                    <input type="password" style="background-color: #fff;" <?php echo $s; ?> class="form-control" name="password" placeholder="Пароль">
                </div>
                <input type="hidden" name="url_request" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
                <input type="submit" class="btn btn-primary block full-width m-b" value="Войти"/>
            </form>            
        </div>
    </div>
   </div> 
    <script src="styles/js/jquery-2.1.1.js"></script>
    <script src="styles/js/bootstrap.min.js"></script>

