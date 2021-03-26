 
 <?php if($_SESSION[USER_SESSION]) { ?>
  <div class="header-secondary">
    <div class="head-c">
      <img src="img/2.jpg" alt="" class="img">    
    </div>
    <div class="menu-secondary">
      <div class="container">
        <ul>
          <li><a href="admin_main" >Главная</a></li>
          <li><a href="documentation" class="active">Новости</a></li>
          <li><a href="vacancies">Фин показатель</a></li>
          <li><a href="financial-statements"></a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php } 
  else {
  ?>
  
  
  
  <?php require_once Error404;  }?>
  