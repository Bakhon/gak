  
  <!--CONTENT-->
  
  <main class="content">
    <div class="block1 clearfix">
      <div class="slider">
      <?php foreach($list_slider as $k=>$v) {
         $image = "upload/".$v['ROOT'];
                                    
      // Read image path, convert to base64 encoding
      $imageData = base64_encode(file_get_contents($image));

      // Format the image SRC:  data:{mime};base64,{data};
    $src = 'data: '.mime_content_type($image).';base64,'.$imageData;
        ?>
        <div class="slide-item">
          <img src="<?php echo $src; ?>"  alt="">
          <div class="slide-text">
            <div class="container">
              <div class="sl-text">
                <div class="title-s"><?php echo $v["SLIDE_HEAD_$lang"]; ?></div>
                <div class="text"><?php echo $v["SLIDE_TEXT_$lang"]; ?></div>
           <?php if($v["BTN_TEXT_$lang"]) { ?>   <a href="<?php echo $v['BTN_URL_RU']; ?>" class="button-blue"><?php echo $v["BTN_TEXT_$lang"]; ?></a> <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
       
        
      </div>
    </div>
    
    
        <div class="block3 clearfix blog-chief" >
        <div class="container">
               <div class="blog">
                  <div class="blog-ibox"><img src="img/close.png" /></div>                  
                  <div class="blog2">                     
                        <div id="blog-ibox2" class="text">
                            <p style=""><b><i><?php echo $list_elem[90]["TEXT_$lang"]; ?></i></b></p>
                            <br />
                            <p style="margin-top: 10px"><b><?php echo $list_elem[91]["TEXT_$lang"]; ?></b></p>
                        </div> 
                        <a href="http://gak.kz/blog" class="btn btn-primary" style=""><?php echo $list_elem[92]["TEXT_$lang"]; ?>
                        </a>                  
                  </div>
                  <div>
                        <img class="img_pred img_media" src="img/pred_ban.jpg"/>
                  </div> 
               </div>
        </div>        
    </div>
    

    <div class="block2 clearfix">
      <div class="container">
        <div class="calculator">
          <div class="calculator-title">
            <div class="title-c"><?php echo $list_elem[23]["TEXT_$lang"]; ?></div>
            <div class="select-c">
              <select id="selectMe">
                <option value="option1"><?php echo $list_elem[83]["TEXT_$lang"]; ?></option>
                <option value="option3"><?php echo $list_elem[84]["TEXT_$lang"]; ?></option>
                <option value="option2">«Премиум»</option>
                <option value="option4">Добровольное страхование</option>
                <option value="option5"><?php echo $list_elem[87]["TEXT_$lang"]; ?></option>
              </select>
            </div>
          </div>
          <div class="calculator-body">
            <div class="calc-1 group" id="option1">
              <div class="rows-1 dflex" id="pr_0701000001">
               <?php require_once 'application/views/calcs/0701000001.php'; ?>
               </div>
                <div class="rows-2 dflex">
                  <div class="form">
                    <span><?php echo $list_elem[27]["TEXT_$lang"]; ?></span>
                    <input id="concept" name="concept" type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[28]["TEXT_$lang"]; ?></span>
                    <input type="tel" id="phone" placeholder="+7" value="+7">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[29]["TEXT_$lang"]; ?></span>
                    <input type="email" id="description" name="description">
                  </div>
                </div>
                <div class="rows-bottom">
                  <div class="form-link">
                    <input type="checkbox" id="link">
                    <label for="link"><?php if($lang == 'RU') { ?>Согласен с <a href="#">правилами предоставления информации</a><?php } else { ?> ақпаратты <a href="#">ұсыну ережелерімен келісемін</a><?php } ?></label>
                  </div>
                  <button id="0701000001" data="#pr_0701000001" class="button-blue calculate"><?php echo $list_elem[30]["TEXT_$lang"]; ?></button>
                </div>
              
            </div>

            <div class="calc-2 group" id="option2">
              
              <form action="">
              <div class="rows-2 dflex">
                  <div class="form">
                    <span><?php echo $list_elem[27]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[28]["TEXT_$lang"]; ?></span>
                    <input type="tel" id="phone" placeholder="+7" value="+7">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[29]["TEXT_$lang"]; ?></span>
                    <input type="email">
                  </div>
                </div>
                <div class="rows-bottom">
                  <div class="form-link">
                    <input type="checkbox" id="link">
                    <label for="link"><?php if($lang == 'RU') { ?>Согласен с <a href="#">правилами предоставления информации</a><?php } else { ?> ақпаратты <a href="#">ұсыну ережелерімен келісемін</a><?php } ?></label>
                  </div>
                  <button class="button-blue"><?php echo $list_elem[30]["TEXT_$lang"]; ?></button>
                </div>
              </form>
            
            </div>

            <div class="calc-3 group" id="option3">
            
                <div id="pr_0601000001" class="rows-3 dflex">
                <?php require_once 'application/views/calcs/0601000001.php'; ?>
                </div>
                <div class="rows-4 dflex">
                  <div class="form">
                    <span><?php echo $list_elem[36]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[37]["TEXT_$lang"]; ?></span>
                    <select name="" id="">
                      <option value=""><?php if($lang == 'RU') { ?>Без допонительного покрытия<?php } else { ?> қосымша төлемсіз<?php } ?></option>                      
                    </select>
                  </div>
                </div>
                <div class="rows-2 dflex">
                  <div class="form">
                    <span><?php echo $list_elem[27]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[28]["TEXT_$lang"]; ?></span>
                    <input type="tel" id="phone" placeholder="+7" value="+7">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[29]["TEXT_$lang"]; ?></span>
                    <input type="email">
                  </div>
                </div>
                <div class="rows-bottom">
                  <div class="form-link">
                    <input type="checkbox" id="link">
                    <label for="link"><?php if($lang == 'RU') { ?>Согласен с <a href="#">правилами предоставления информации</a><?php } else { ?> ақпаратты <a href="#">ұсыну ережелерімен келісемін</a><?php } ?></label>
                  </div>
                  <button id="0601000001" data="#pr_0601000001" class="button-blue calculate"><?php echo $list_elem[30]["TEXT_$lang"]; ?></button>
                </div>
              
            </div>
            <div class="calc-4 group" id="option4">
              <form action="">
              <div class="rows-2 dflex">
                  <div class="form">
                    <span><?php echo $list_elem[27]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[28]["TEXT_$lang"]; ?></span>
                    <input type="tel" id="phone" placeholder="+7" value="+7">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[29]["TEXT_$lang"]; ?></span>
                    <input type="email">
                  </div>
                </div>
                <div class="rows-bottom">
                  <div class="form-link">
                    <input type="checkbox" id="link">
                    <label for="link"><?php if($lang == 'RU') { ?>Согласен с <a href="#">правилами предоставления информации</a><?php } else { ?> ақпаратты <a href="#">ұсыну ережелерімен келісемін</a><?php } ?></label>
                  </div>
                  <button class="button-blue"><?php echo $list_elem[30]["TEXT_$lang"]; ?></button>
                </div>
              </form>
            </div>
            <div class="calc-5 group" id="option5">            
              <div id="pr_0101000002" class="rows-5 dflex">
               <?php require_once 'application/views/calcs/0101000002.php'; ?>
               </div>
               <div class="rows-2 dflex">
                  <div class="form">
                    <span><?php echo $list_elem[27]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[28]["TEXT_$lang"]; ?></span>
                    <input type="tel" id="phone" placeholder="+7" value="+7">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[29]["TEXT_$lang"]; ?></span>
                    <input type="email">
                  </div>
                </div>
              <div class="rows-bottom">
                <div class="form-link">
                  <input type="checkbox" id="link">
                  <label for="link"><?php if($lang == 'RU') { ?>Согласен с <a href="#">правилами предоставления информации</a><?php } else { ?> ақпаратты <a href="#">ұсыну ережелерімен келісемін</a><?php } ?></label>
                </div>
                <button id="0101000002" data="#pr_0101000002" class="button-blue calculate"><?php echo $list_elem[30]["TEXT_$lang"]; ?></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block3 clearfix">
      <div class="container">
        <div class="title"><?php echo $list_elem[53]["TEXT_$lang"]; ?> <span><?php echo $list_findate[0]['DATE_FIN']; ?></span></div>
        <div class="block3-flex">
        <?php foreach($list_fin as $kk=>$vv) { ?>
          <div class="b3" style="display: flex; justify-content: space-around;align-items: center;">
          <div class="img-icon">
            <img src="<?php echo $vv['IMG_ROOT']; ?>" style="width: 70px;"  />
          </div>
            <div class="name">
            <?php echo $vv["NAME_$lang"]; ?>
            <p><?php echo $vv['TEXT_RU']; ?></p>
            <span><?php echo $list_elem[54]["TEXT_$lang"]; ?></span></div>
          </div>
          <?php } ?>
         
        </div>
      </div>
    </div>

    <div class="block4 clearfix">
      <div class="container">
        <div class="title"><?php echo $list_elem[21]["TEXT_$lang"]; ?></div>
        <ul class="list">
          <li><a href="customer-support"><?php echo $list_elem[55]["TEXT_$lang"]; ?></a></li>
          <li><a href="customer-support"><?php echo $list_elem[59]["TEXT_$lang"]; ?></a></li>
          <li><a href="customer-support"><?php echo $list_elem[56]["TEXT_$lang"]; ?></a></li>
          <li><a href="customer-support"><?php echo $list_elem[60]["TEXT_$lang"]; ?></a></li>
          <li><a href="customer-support"><?php echo $list_elem[57]["TEXT_$lang"]; ?></a></li>
          <li><a href="customer-support"><?php echo $list_elem[61]["TEXT_$lang"]; ?></a></li>
          <li><a href="customer-support"><?php echo $list_elem[58]["TEXT_$lang"]; ?></a></li>
          <li><a href="customer-support"><?php echo $list_elem[62]["TEXT_$lang"]; ?></a></li>
        </ul>
      </div>
    </div>

    <div class="block5">
      <div class="container">
        <div class="title"><a style="color: #333;" href="news_list"><?php echo $list_elem[22]["TEXT_$lang"]; ?></a></div>
        <div class="block5-list">
        <?php foreach($list_news_head as $k=>$v) { 
      
            $image = "upload/".$v['UPLOAD_FILE'];
                        
                           
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));
echo $imageData;

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
            
            ?>
          <div class="b5">
          <img src="img/news/for_news.jpg" style="height: 115px;" />
            <a href="news?id=<?php echo $v['ID']; ?>">
              <span><?php echo $v['NEWS_DATE']; ?></span>
              <?php echo $v["NEWS_TITLE_$lang"]; ?>
            </a>
          </div>
          <?php } ?>
          
          
        </div>
      </div>
    </div>
    
        <div class="block3">
        <div class="container">   
          <div class="title" style="text-align: center;
    font-size: 32px;
    font-family: 'GOTHAM_BOLD';
    margin-bottom: 60px;"><a style="color: #333;" href="news_list">Опрос и клиентская поддержка</a></div>      
         <div style="display: flex;
    justify-content: space-between">
            <div >
               <img style="    height: 200px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;" src="img/head/опрос.png" width="95%" />
            </div>
            <div></div>            
            <div>
               <img style="    height: 200px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;" src="img/head/оценка.png" width="95%" />
            </div>
         </div>
        </div>      
    </div>
    
    <div class="block5">
        <div class="container">
        <div class="title"><a style="color: #333;" href="news_list">Полезные ссылки</a></div> 
          <div class="block5-list responsive">          
          <div><a target="_blank" href="https://www.akorda.kz/ru"><img src="img/head_slider/сайт Президента.png" /></a></div>
           <div><a target="_blank" href="https://www.gov.kz/memleket/entities/enbek"><img src="img/head_slider/МТСЗН.png" /></a></div>
            <div><a target="_blank" href="https://nationalbank.kz/kz"><img src="img/head_slider/НБ РК.png" /></a></div>
           <div><a target="_blank" href="https://www.enpf.kz/ru/"><img  src="img/head_slider/ЕНПФ.png" /></a></div>
           <div><a target="_blank" href="https://kase.kz/ru/"><img src="img/head_slider/KASE.png" /></a></div>          
           <div><a target="_blank" href="https://www.londonstockexchange.com/"><img src="img/head_slider/London.png" /></a></div>
           <div><a target="_blank"  href="https://www.nasdaq.com/"><img src="img/head_slider/NASDAQ.png" /></a></div>                      
           <div><a href="https://www.moex.com/" target="_blank"><img src="img/head_slider/Мос.png" /></a></div>         
          </div>
    </div>
    </div>
    
    <div class="block5 cash">
        <div class="container">
         <div class="title"><a style="color: #333;" href="news_list">Курс валют по состоянию на <?php echo $pubdate; ?> <br /> по Национальному банка</a></div> 
         <div class="cash-item">
             <div>
                <img class="img_cash" src="img/icon_cash.png" />
             </div>
             <div class="cash-item-val">
               <div class="cash-item-val_usd">
                  <img src="img/usd.png" style="height: 15px; margin-left: 1px;"/>             
               </div>
               <div>
                   <h4><?php echo $usd; ?></h4>
               </div>              
             </div>
             <div class="cash-item-val">
               <div class="cash-item-val_usd">
                  <img src="img/EUR.png" style="height: 15px; margin-left: 1px;" />             
               </div>
               <div>
                   <h4><?php echo $eur; ?></h4>
               </div>              
             </div>
             <div class="cash-item-val">
               <div class="cash-item-val_usd">
                  <img src="img/RUB.png" style="height: 15px; margin-left: 1px;" />             
               </div>
               <div>
                   <h4><?php echo $rub; ?></h4>
               </div>              
             </div>
             <div class="cash-item-val">
               <div class="cash-item-val_usd">
                  <img src="img/usd.png" style="height: 15px; margin-left: 1px;" />             
               </div>
               <div>
                   <h4>426</h4>
               </div>              
             </div>
              <div class="cash-item-val">
               <div class="cash-item-val_usd">
                  <img src="img/usd.png" style="height: 15px; margin-left: 1px;" />             
               </div>
               <div>
                   <h4>42.47</h4>
               </div>              
             </div>
         </div>        
        </div>    
    </div>
    

    
    <!--
    <div class="block3 clearfix">
      <div class="container">
     <div class="title">Курс валют на <span><?php  echo $dataObj->channel->item->pubDate; ?> по Национальному банку</span></div>
       <div class="inform">
           <div class="inform-item">
           <div class="table-responsive">
              <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Валюта</th>
                          <th scope="col">Цена</th>                                                                               
                        </tr>
                      </thead>
                      <tbody>
                      <?php  foreach ($dataObj->channel->item as $item){
                        if($item->title == 'USD' or $item->title == 'EUR' or $item->title == 'RUB')
                        {
                        ?>
                        <tr>
                          <th scope="row"><?php echo $item->title; ?></th>
                          <td><?php echo $item->description; ?></td>                                                                           
                        </tr>  
                       <?php } } ?>  
                                                                     
                      </tbody>
            </table>
           </div>
           
           </div>
           <div class="inform-item">
           <div class="table-responsive">
            <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Валюта</th>
                          <th scope="col">Цена</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                        
                        </tr>  
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                         
                        </tr>  
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                         
                        </tr>                                               
                      </tbody>
            </table>
           
           </div>
            
           </div>                                 
       </div>
      
    </div>
    </div>
   -->
    
    <a id="button"></a>
    
  </main>
  
  
  <div class="modal inmodal fade" id="return_modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Результат расчета</h4>
            </div>
            <div id="first_item">    <div class="row"><label class="col-md-4">ОКЭД: </label><code class="col-md-8">01111</code><br></div><div class="row" style="margin-bottom: 5px;"><label class="col-md-4">Наименование ОКЭД: </label><code class="col-md-8">Выращивание зерновых, технических и прочих сельскохозяйственных культур, не включенных в другие группировки </code><br></div><div class="row"><label class="col-md-4">Класс риска: </label><code class="col-md-8">6</code><br></div><div class="row"><label class="col-md-4">Тариф: </label><code class="col-md-8">0 %</code><br></div><div class="row"><label class="col-md-4">Страховая сумма: </label><code class="col-md-8">2 000 000</code><br></div><div class="row"><label class="col-md-4">Страховая премия: </label><code class="col-md-8">0</code></div></div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Перезвоните</button>
                <a type="button" class="btn btn-white" data-dismiss="modal">Закрыть</a>
            </div>
        </div>
    </div>
</div>
  

  
  <!--CONTENT END-->
  