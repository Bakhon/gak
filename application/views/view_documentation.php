
  <div class="header-secondary">
    <div class="head-c">
      <img src="img/2.jpg" alt="" class="img">
      
    </div>
    <div class="menu-secondary">
      <div class="container">
        <ul>
          <li><a href="about"><?php echo $list_submenu2[0]["NAME_$lang"]; ?></a></li>
          <li><a href="documentation" class="active"><?php echo $list_submenu2[1]["NAME_$lang"]; ?></a></li>
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
            <?php foreach($list_doc as $k=>$v) {
                if($v['ID'] ==1) {
                ?>
              <li class="active"><a href="<?php echo $v['MENU']; ?>" data-toggle="tab"><?php echo $v["ITEM_NAME_$lang"]; ?></a></li>
              <?php } 
              else{
              
              ?>
              <li><a href="<?php echo $v['MENU']; ?>" data-toggle="tab"><?php echo $v["ITEM_NAME_$lang"]; ?></a></li>
              <?php }?>
              
              <?php } ?>
            
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
              <div class="tab-pane active" id="menu1">
                <div class="title"><?php echo $list_doc_corp[0]["ITEM_NAME_$lang"]; ?></div>
                
                <div class="box-tab">
                  <div class="title-d"><?php echo $list_about_us[0]["ITEM_NAME_$lang"]; ?> </div>
                   <div class="tb-file">
              <?php foreach($list_org as $k=>$v) {
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
                  <div class="title-d"><?php echo $list_elem[65]["TEXT_$lang"]; ?></div>
                  <div class="tb-file">
                  <p style="text-align: justify;"><font color="#333"><?php echo $list_about_strateg[0]["CONTENT_$lang"]; ?></font></p>
              <?php foreach($list_plan as $k=>$v) {
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
                  <div class="title-d"><?php echo $list_elem[66]["TEXT_$lang"]; ?></div> 
                   <div class="tb-file">
              <?php foreach($list_inie as $k=>$v) {
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
              <div class="tab-pane" id="menu3">
              
                <div class="title"><?php echo $list_elem[72]["TEXT_$lang"] ?></div>
                                
              <div class="tb-file">
              <?php foreach($list_goszakup as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>
                
                          
              </div>
              <div class="tab-pane" id="menu4">
               
                <div class="title"><?php echo $list_elem[73]["TEXT_$lang"] ?></div>
                
                
                <div class="tb-file">
              <?php foreach($list_instarif as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>
                
                
                
               
              </div>
              
              
              <div class="tab-pane" id="menu5">
                <div class="title-flex">
                  <div class="title"><?php echo $list_elem[74]["TEXT_$lang"] ?></div>
                  <div class="date">
                    <span><?php echo $list_elem[75]["TEXT_$lang"] ?></span>
                    <div class="select" >
                    <select name="" id="insurance_agent">
                      <option value="2021">2021 г.</option>
                      <option value="2020">2020 г.</option>
                      <option value="2019">2019 г.</option>
                      <option value="2018">2018 г.</option>                      
                    </select>
                    </div>
                  </div>
                </div>
             <?php ?>   
                <div class="tb-file" id="content-insurance">
                  <?php foreach($list_agents21 as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
             <div style="display: flex;">            
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>                  
                </a>
                <span><?php if($lang == 'RU') { ?>Дата размещение: <?php } else { echo 'Жариялау күні'; echo '<br/>'; } echo $v['POST_DATE']; ?></span>                         
              </div>  
               <?php } } ?>  
              </div>
              <?php  ?>
              </div>
              <div class="tab-pane" id="menu6">
               <div class="title-flex">
                 <div class="title"><?php echo $list_elem[71]["TEXT_$lang"] ?></div> 
                <div class="date">
                    <span><?php echo $list_elem[75]["TEXT_$lang"] ?></span>
                    <div class="select" >
                    <select name="" id="current_otrasl">
                      <option value="2021">2021 г.</option>
                      <option value="2020">2020 г.</option>
                      <option value="2019">2019 г.</option>
                      <option value="2018">2018 г.</option>                      
                    </select>
                    </div>
                  </div> 
               </div>              
                        
                        <div id="content-branch">
                              <div class="tb-file">
                      <?php foreach($list_current_state_otrasl as $k=>$v) {
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
            <?php foreach($list7 as $k=>$v) { ?>
                <div class="title"><?php echo $v["ITEM_NAME_$lang"]; ?> </div>
                <div class="tb-file">
               <?php echo $v["CONTENT_$lang"]; ?>
                </div>
                <?php } ?>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->
