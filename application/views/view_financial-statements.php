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
          <li><a href="vacancies" ><?php echo $list_submenu2[2]["NAME_$lang"]; ?></a></li>
          <li><a href="financial-statements" class="active"><?php echo $list_submenu2[3]["NAME_$lang"]; ?></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!--CONTENT-->
  <main class="content">
    <div class="block8 clearfix">
      <div class="container-776">
        <div class="date">
          <span> <?php if($lang == 'RU') { ?>Выберите год: <?php } else { ?>Жылды таңданыз:<?php } ?></span>
          <div class="select">
            <select name="" id="fin_indicators_state_change_sait">   
            <option value="2020">2020 г.</option>        
              <option value="2019" >2019 г.</option>
              <option value="2018">2018 г.</option>
              <option value="2017">2017 г.</option>
            </select>
          </div>
        </div>
        <div class="b8-block">
      <?php
      $y = 2020;
           foreach($quarter as $a => $b)
                          {
                            if($b == 1) {
                                if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                }                                                                  
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.01.$y' and '31.03.$y' order by id";
                            $list_report = $db -> Select($sql_report); }
                            if($b == 2) {
                                 if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.04.$y' and '30.06.$y' order by id";
                            $list_report = $db -> Select($sql_report);  }
                            if($b == 3) {
                                 if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.07.$y' and '30.09.$y' order by id";
                            $list_report = $db -> Select($sql_report);
                            }
                            if($b == 4) {
                                 if($lang == 'RU') 
                                {
                                  $text = 'квартал';  
                                }
                                else {
                                   $text = 'тоқсан'; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '01.10.$y' and '29.12.$y' order by id";
                            $list_report = $db -> Select($sql_report);
                            }
                            if($b == "Годовой отчет"){
                                if($lang == 'RU') 
                                {
                                  $text = '';  
                                }
                                else {
                                    $b = 'Жылдық қорытынды';
                                    $text = ''; 
                                } 
                            $sql_report = "select * from INSURANCE2.CORPSITE_FILES where FIN_DATE between '30.12.$y' and '31.12.$y' order by id";
                            $list_report = $db -> Select($sql_report);
                            }
                           
                 //     print_r($list_report);
                 if($list_report) {
          $html = '<div class="b8">';  
          $html .= '<div class="b8-flex">';                
          $html .= '<p>'.$b.' '.$text.'</p><span>'.$list_elem[76]["TEXT_$lang"].': '.$list_report[0]['POST_DATE'].'</span>
            </div>';
        foreach($list_report as $k => $v)
                                           {
                                            if($v["NAME_$lang"] != '') {
       $html .= '              
              ';                                         
        $html .= '<div style="display: flex;justify-content: space-between;"><a href="?file_id='.$v['ID'].'" class="file">
              <img src="img/icon/pdf.svg" alt="">
              <span>'.$v["NAME_$lang"].'</span>
            </a>';
       $html .= '  
                                                                                                             
                        </div>';
                             
      
    } }
      $html .= '</div>';
            echo $html; } }
       ?>
        
          </div>
        
          
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->
