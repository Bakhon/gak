<div class="header-secondary">
    <div class="head-c">
        <img src="img/2.jpg" alt="" class="img">
        
    </div>
    <div class="menu-secondary">
        <div class="container">
            <ul>
                <li><a href="about" class="active"><?php echo $list_submenu2[0]["NAME_$lang"]; ?></a></li>
                <li><a href="documentation"><?php echo $list_submenu2[1]["NAME_$lang"]; ?></a></li>
                <li><a href="vacancies"><?php echo $list_submenu2[2]["NAME_$lang"]; ?></a></li>
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
              <li class="active"><a href="#menu1" data-toggle="tab"><?php echo $list_about[0]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu2" data-toggle="tab"><?php echo $list_about[1]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu3" data-toggle="tab"><?php echo $list_about[2]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu4" data-toggle="tab"><?php echo $list_about[3]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu5" data-toggle="tab"><?php echo $list_about[4]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu6" data-toggle="tab"><?php echo $list_about[5]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu7" data-toggle="tab"><?php echo $list_about[6]["ITEM_NAME_$lang"];?></a></li>
              <li><a href="#menu8" data-toggle="tab"><?php echo $list_about[7]["ITEM_NAME_$lang"];?></a></li>
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
              <div class="tab-pane active" id="menu1">
               <?php echo $list_about[0]["CONTENT_$lang"]; ?>
              </div>
              <div class="tab-pane" id="menu2">
             <?php echo $list_about[1]["CONTENT_$lang"]; ?>
            </div>
            <div class="tab-pane" id="menu3">
             <?php echo $list_about[2]["CONTENT_$lang"]; ?>
            </div>
            <div class="tab-pane" id="menu4">
            <div class="block-flex">
            <?php foreach($list_managament as $x=>$z) { ?>
                <div class="tb">
                <a style="color: #333;" href="#<?php echo $z['MENU'];?>" data-toggle="modal">
                  <img src="<?php echo $z['IMAGE_ROOT']; ?>" alt="">
        
                  <p><?php echo $z["NAME_$lang"]; ?></p>
                  <span><?php echo $z["POSITION_$lang"]; ?></span>  </a>
                </div>
           <?php } ?>
            </div>
            </div>
            <div class="tab-pane" id="menu5">
            <div class="title"><?php echo $list_elem[63]["TEXT_$lang"] ?></div>
              <div class="tb-file">
              <?php foreach($list_sertificate as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>
                      
            </div>
            <div class="tab-pane" id="menu6">
              <div class="title"><?php echo $list_elem[70]["TEXT_$lang"] ?></div>
              
               <div class="box-tab">
                  <div class="text"><?php echo $list_elem[67]["TEXT_$lang"]; ?> </div>              
               <div class="tb-file">
              <?php foreach($list_korp as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>              
             </div> 
             
               <div class="box-tab">
                  <div class="text"><?php echo $list_elem[68]["TEXT_$lang"]; ?> </div>
               <div class="tb-file">
              <?php foreach($list_k2 as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>
             </div>
             
               <div class="box-tab">
                  <div class="text"><?php echo $list_elem[69]["TEXT_$lang"]; ?> </div>
               <div class="tb-file">
              <?php foreach($list_k3 as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>
             </div>                                                                                                                                                                           
            </div>
            
            <div class="tab-pane" id="menu7">
            <?php echo $list_about[6]["CONTENT_$lang"]; ?>
            </div>
            <div class="tab-pane" id="menu8">
           <?php echo $list_about[7]["CONTENT_$lang"]; ?>    
              <div class="tb-file">
              <?php foreach($list_sved as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--CONTENT END-->

<?php foreach($list_managament as $a=>$b) { ?>
  <div class="modal-user">
    <div id="<?php echo $b['MENU']; ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          
            <div class="user-img"><img src="<?php echo $b['IMAGE_ROOT']; ?>" alt=""></div>
            <div class="user-text">
              <div class="name"><?php echo $b["NAME_$lang"]; ?></div>
              <div class="position"><?php echo $b["POSITION_$lang"]; ?></div>
              <div class="text">
                <?php echo $b["CONTENT_$lang"]; ?>
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>


