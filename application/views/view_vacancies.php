  <div class="header-secondary">
    <div class="head-c">
      <img src="img/2.jpg" alt="" class="img">
      <div class="title"></div>
    </div>
    <div class="menu-secondary">
      <div class="container">
        <ul>
            <li><a href="about"><?php echo $list_submenu2[0]["NAME_$lang"]; ?></a></li>
          <li><a href="documentation" ><?php echo $list_submenu2[1]["NAME_$lang"]; ?></a></li>
          <li><a href="vacancies" class="active"><?php echo $list_submenu2[2]["NAME_$lang"]; ?></a></li>
          <li><a href="financial-statements"><?php echo $list_submenu2[3]["NAME_$lang"]; ?></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!--CONTENT-->
  <main class="content">
    <div class="block6 clearfix">
      <div class="container padding-0">
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
          <div class="col-md-3 col-sm-4 col-xs-12 b6-menu">
            <ul class="nav nav-tabs tabs-left">
            <?php foreach($list_vacancy as $k=>$v) { if($v['ID'] == $id_min) { ?>
              <li class="active"><a href="#<?php echo $v['MENU']; ?>" data-toggle="tab"><?php echo $v["ITEM_NAME_$lang"]; ?></a></li>
              <?php } else{  ?>
              <li><a href="#<?php echo $v['MENU']; ?>" data-toggle="tab"><?php echo $v["ITEM_NAME_$lang"]; ?></a></li>            
              <?php }} ?>
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
            <?php foreach($list_vacancy as $t=>$y) { 
                if($y['ID'] == $id_min) {
                    $class = 'active';
                }
                else {
                    $class = '';
                }
                ?>
              <div class="tab-pane <?php echo $class; ?>" id="<?php echo $y['MENU']; ?>">  
                            
                <?php echo $y["CONTENT_$lang"]; ?>
                
              </div>
              <?php } ?>
              
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->
