
  <div class="header-secondary">
    <div class="head-c">
      <img src="img/picture/Group 6966.jpg" alt="" class="img">
      <div class="title"><?php echo $list_elem[21]["TEXT_$lang"]; ?></div>
    </div>
  </div>

  <!--CONTENT-->
  <main class="content">
    <div class="block6 customer-support clearfix">
      <div class="container padding-0">
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
          <div class="col-md-3 col-sm-4 col-xs-12 b6-menu">
            <ul class="nav nav-tabs tabs-left">
              <li class="active"><a href="<?php echo $list_clients_supports1[0]['MENU'];?>" data-toggle="tab"><?php echo $list_clients_supports1[0]["ITEM_NAME_$lang"]; ?></a></li>
              <?php foreach($list_clients_supports as $k=>$v) { ?>
              <li><a href="<?php echo $v['MENU']; ?>" data-toggle="tab"><?php echo $v["ITEM_NAME_$lang"]; ?></a></li>
            
              <?php } ?>
            </ul>
            <div class="s-info">
            <?php if($lang == 'RU') { ?>
              <p>Сообщить о страховом случае можно следующими способами:</p>
              <div><a href="tel:8 (7172) 916-333"><img src="img/icon/tel.svg" alt=""> 8 (7172) 916-333</a></div>
              <div><a href="mailto:info@gak.kz"><img src="img/icon/mail.svg" alt=""> info@gak.kz</a></div>
              <?php } else { ?>
               <p>Сақтандыру жағдайы туралы келесі тәсілдермен хабарлау болады:</p>
              <div><a href="tel:8 (7172) 916-333"><img src="img/icon/tel.svg" alt=""> 8 (7172) 916-333</a></div>
              <div><a href="mailto:info@gak.kz"><img src="img/icon/mail.svg" alt=""> info@gak.kz</a></div>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 b6-content">
            <div class="tab-content">
              <div class="tab-pane active" id="menu1">
                  
                <div class="select">
                  <select id="selectTab">
              <?php foreach($list_case as $k=>$v) { ?>
                    <option value="<?php echo $v['MENU']; ?>"><?php echo $v["ITEM_NAME_$lang"]; ?></option>
                       <?php } ?>                
                  </select>
                </div>
                <?php foreach($list_case as $k=>$v) { ?>
                <div class="box" id="<?php echo $v['MENU']; ?>">
                  <div class="title"><?php echo $v["ITEM_NAME_$lang"]; ?></div>
                  
               <?php echo $v["CONTENT_$lang"]; ?>
                    
                  </div>
                 <?php } ?>  
                
                  
                  
                </div>
                <div class="tab-pane" id="menu2">
                <div class="tb-file">
              <?php foreach($list_sopr as $k=>$v) {
                if($v["ROOT_$lang"] != '') {
                ?>
                <a href="?file_id=<?php echo $v['ID']; ?>" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span><?php echo $v["NAME_$lang"] ?></span>
                </a>
              <?php } } ?>  
           
              </div>
                </div>
                <div class="tab-pane" id="menu3">
                <?php if($lang == 'RU') { ?>
                  <div class="title">Пожалуйста, оцените по шкале от 1 до 5, на сколько вы удовлетворены:</div>
                  <div id="res"></div>
                  <form method="POST" class="grade-list">
                   <?php foreach($list_service_q as $k=>$v) 
                  
                  { $ans = $v['ID']; 
                    $list_service_ans = $db->select("select * from insurance2.CORPSITE_SERVICE_ANS where id_question = $ans");                
                    ?>
                    <div class="grade">
                      <div class="question" id="question-<?php echo $v['ID']; ?>"><?php echo $v["QUESTION_$lang"]; ?></div>
                      
                      <div class="answer">
                      <?php foreach($list_service_ans as $y=>$z) { ?>
                      <input type="radio" id="<?php echo $z['ID']; ?>" name="<?php echo $z['ID_QUESTION']; ?>" value="<?php echo $z['ID']; ?>" required>
                      <label for="<?php echo $z['ID']; ?>"><?php echo $z['ANSWER']; ?></label>
                           
                          <?php } ?>                  
                      </div>
                    
                    </div>
                      <?php } ?>                                                          
                    <button name="end_opros" class="button-blue service_form">Отправить</button>
                  </form>
                 <?php } ?>
                </div>
                <div class="tab-pane" id="menu4">
                <?php if($lang == 'RU') { ?>
                  <div class="title">Жалобы и предложения</div>
                  <div class="text">
                    <p>Дорогие клиенты и гости нашего сайта, выскажите свое мнение о нашей работе. Заранее благодарим за конструктивную критику и рациональные предложения.</p>
                  </div>
                  <div class="ul-text">
                    <ul>
                      <li>Нам равноценно важны каждая благодарность и каждая жалоба; </li>
                      <li>На каждый Ваш вопрос будет дан ответ; </li>
                      <li>Каждое Ваше мнение обязательно будет принято во внимание; </li>
                      <li>Каждая Ваша оценка филиала, персонала, продуктов и обслуживания будет принята к анализу; </li>
                      <li>Каждая Ваша оригинальная идея будет внимательно рассмотрена и возможно реализована Компанией.</li>
                    </ul>
                  </div>
                  <div class="text-trans">Спасибо, что вы с нами!</div>
                  <div class="form-text">
                    <form method="post" class="form-wrap" enctype="multipart/form-data">
                      <div class="form">
                        <p>ФИО <span>*</span></p>
                        <input name="name" type="text" required>
                      </div>
                      <div class="form">
                        <p>Город <span>*</span></p>
                        <select name="city" id="">
                          <option value="">Выберите город</option>
                          <option value="Алматы">Алматы</option>
                          <option value="Астана">Астана</option>
                        </select>
                      </div>
                      <div class="form">
                        <p>Контактный номер <span>*</span></p>
                        <input name="tel" type="text" id="phone2" value="+7" required>
                      </div>
                      <div class="form">
                        <p>Эл. Почта  <span>*</span></p>
                        <input name="email" type="email" id="" value="" placeholder="Введите ваш e-mail" required>
                      </div>
                      <div class="form">
                        <p>Тип обращения</p>
                        <select name="type" id="">
                          <option value="">Выберите тип</option>
                          <option value="1">Жалоба</option>
                           <option value="2">Предложение</option>
                        </select>
                      </div>
                      <div class="form">
                        <p>Являетесь ли Вы клиентом АО «КСЖ «ГАК»?</p>
                        <select name="is_client" id="">
                          <option value="">Выберите ответ</option>
                          <option value="1">да</option>
                          <option value="2">нет</option>
                        </select>
                      </div>                      
                      <div class="form-textarea">
                        <p>Текст жалобы или предложения *</p>
                        <textarea name="text_jaloby" id=""></textarea>
                      </div>
                      <div class="form-file">
                        <div class="file">
                          <label for="file_t">Прикрепить файл</label>
                          <input name="file_client" type="file" id="file_t" accept=".jpg,.jpeg,.tiff,.tif,.png,.pdf,.xls,.xlsx,.doc,.docx,.ppt,.pptx,.bpm,.rtf">
                        </div>
                     <!--   <div>Разрешенные форматы: .jpg, .jpeg, .png, .pdf, .doc, .docx</div> -->
                         
                     
                        <div class="file-text">
                        <!--                        
                          <div class="fl">
                            <a href="#">Вся жалоба здесь.pdf</a>
                            <button class="delete"><img src="img/icon/delete.svg" alt=""></button>
                          </div>
                          -->
                          
                        </div>
                        
                      </div>
                      <div class="form-down">
                        <p><span>*</span> - Поля, обязательные к заполнению 
                       
                        </p>                        
                        <button name="complaint" class="button-blue">Отправить заявку</button>
                      </div>                                           
                    </form>
                  </div>
                  <?php } ?>
                </div>
                <div class="tab-pane" id="menu5">
                <?php if($lang == 'RU') { ?>
                  <div class="select">
                    <select name="" id="selectQA">
                      <option value="qa1">Опрос населения как потребителя страховых услуг</option>
                      <option value="qa2">Опрос населения как потребителя страховых услуг</option>
                      <option value="qa3">Опрос населения как потребителя страховых услуг</option>
                    </select>
                  </div>
                  <div class="quesAns" id="qa1">
                    <div class="title">Опрос населения как потребителя страховых услуг</div>
                    <form method="POST"  class="qa-wrapper">
                      <div class="item">
                        <div class="question">1. Укажите Ваш пол:</div>
                        <div class="answer">
                          <input type="radio" id="answer1" name="sex" value="1" required="">
                          <label for="answer1">Муж</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer2" name="sex" value="2" required="">
                          <label for="answer2">Жен</label>
                        </div>
                      </div>
                      <div class="item">
                        <div class="question">2. Ваш возраст:</div>
                        <div class="answer">
                          <input type="radio" id="answer3" name="age" value="18-25" required="">
                          <label for="answer3">18-25</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer4" name="age" value="26-36" required="">
                          <label for="answer4">26-36</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer5" name="age" value="37-50" required="">
                          <label for="answer5">37-50</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer5" name="age" value="50 и старше" required="">
                          <label for="answer5">50 и старше</label>
                        </div>
                      </div>
                      <div class="item">
                        <div class="question">3. Пользуетесь ли вы добровольными страховыми услугами (если да, то укажите какими именно)</div>
                        <div class="answer-wrapper">
                          <div class="answer">
                            <input type="radio" id="answer6" name="service" value="Да" required="">
                            <label for="answer6">Да</label>
                          </div>
                          <div class="answer-sub">
                            <div class="answer">
                              <input type="checkbox" id="answer7" name="service_type[]" value="Страхование жизни" >
                              <label for="answer7">Страхование жизни</label>
                            </div>
                            <div class="answer">
                              <input type="checkbox" id="answer8" name="service_type[]" value="Медицинское страхование" >
                              <label for="answer8">Медицинское страхование</label>
                            </div>
                            <div class="answer">
                              <input type="checkbox" id="answer9" name="service_type[]" value="Страхование ответствености" >
                              <label for="answer9">Страхование ответствености</label>
                            </div>
                          </div>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer10" name="service" value="Нет" required="">
                          <label for="answer10">Нет</label>
                        </div>
                      </div>
                      <div class="item">
                        <div class="question">4. Отметьте известные Вам страховые компании в Казахстане</div>
                        <div class="answer">
                          <input type="checkbox" id="answer11" name="insurance_company[]" value="АО “ДК Народн.Банка Каз-на по страхованию жизни “Халык-Life”" >
                          <label for="answer11">АО “ДК Народн.Банка Каз-на по страхованию жизни “Халык-Life”</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer12" name="insurance_company[]" value="АО “КСЖ “НОМАД LIFE”" >
                          <label for="answer12">АО “КСЖ “НОМАД LIFE”</label>
                        </div>                        
                        <div class="answer">
                          <input type="checkbox" id="answer13" name="insurance_company[]" value="АО «КСЖ «Freedom Finance»" >
                          <label for="answer13">АО «КСЖ «Freedom Finance»</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer15" name="insurance_company[]" value="АО «КСЖ «Государственная аннуитетная компания»" >
                          <label for="answer15">АО «КСЖ «Государственная аннуитетная компания»</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer16" name="insurance_company[]" value="АО «КСЖ «Standard Life»" >
                          <label for="answer16">АО «КСЖ «Standard Life»</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer17" name="insurance_company[]" value="АО «КСЖ «KM Life»">
                          <label for="answer17">АО «КСЖ «KM Life» </label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer18" name="insurance_company[]" value="АО «КСЖ «Европейская Страховая Компания»">
                          <label for="answer18">АО «КСЖ «Европейская Страховая Компания»</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer18" name="insurance_company[]" value="АО «КСЖ «Евразия»">
                          <label for="answer18"> АО «КСЖ «Евразия»</label>
                        </div>                        
                      </div>
                      <div class="item">
                        <div class="question">5. Почему Вы выбрали именно АО «КСЖ «Государственная аннуитетная компания»</div>
                        <div class="answer">
                          <input type="radio" id="answer19" name="recomendation" value="По рекомендациям работодателей, родных, знакомых, друзей" required="">
                          <label for="answer19">По рекомендациям работодателей, родных, знакомых, друзей</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer20" name="recomendation" value="Единственная 100% государственная компания по страхованию жизни" required="">
                          <label for="answer20">Единственная 100% государственная компания по страхованию жизни</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer21" name="recomendation" value="Надежность (активы, страховые резервы)" required="">
                          <label for="answer21">Надежность (активы, страховые резервы)</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer22" name="recomendation" value="Пролонгация договора" required="">
                          <label for="answer22">Пролонгация договора</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer23" name="recomendation" value="Другое (укажите)" required="">
                          <label for="answer23">Другое (укажите)</label>
                        </div>                       
                      </div>
                      
                      <div class="item">
                        <div class="question">6. Какие, на Ваш взгляд, улучшения необходимы АО "КСЖ "ГАК"?</div>
                        <div class="answer">
                          <input type="checkbox" id="answer24" name="uluch[]" value="Расширить объем предоставляемых услуг" >
                          <label for="answer24">Расширить объем предоставляемых услуг</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer25"  name="uluch[]" value="Усилить рекламную компанию" >
                          <label for="answer25">Усилить рекламную компанию</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer26"  name="uluch[]" value="Улучшать скорость и качество обслуживания после наступления страхового случая " >
                          <label for="answer26">Улучшать скорость и качество обслуживания после наступления страхового случая  </label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer27"  name="uluch[]" value="Возможность предоставления онлайн услуг (заключение договора)" >
                          <label for="answer27">Возможность предоставления онлайн услуг (заключение договора)</label>
                        </div>
                        <div class="answer">
                          <input type="checkbox" id="answer28"  name="uluch[]" value="Все устраивает" >
                          <label for="answer28"> Все устраивает</label>
                        </div>    
                        <div class="answer">
                          <input type="checkbox" id="answer29"  name="uluch[]" value="Другое (укажите)" >
                          <label for="answer29"> Другое (укажите)</label>
                        </div>                    
                      </div>
                      
                      
                         <div class="item">
                        <div class="question">7. По каким причинам возможен Ваш отказ от услуг АО "КСЖ "ГАК"?</div>
                        <div class="form-textarea">
                        <p></p>
                        <textarea name="text_otkaza" id=""></textarea>
                      </div>                                                                                                                                            
                      </div>
                      
                        <div class="item">
                        <div class="question">8. В случае отказа от услуг АО "КСЖ "ГАК" какую компанию будете рассматривать как альтернативный вариант?</div>
                        <div class="answer">
                          <input type="radio" id="answer30"  name="alternativa" value="АО «ДК Народного Банка Казахстана по страхованию жизни «Халык-Life»" required="">
                          <label for="answer30">АО «ДК Народного Банка Казахстана по страхованию жизни «Халык-Life»</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer31" name="alternativa" value="АО «КСЖ «Номад Life»" required="">
                          <label for="answer31">АО «КСЖ «Номад Life»</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer32" name="alternativa" value="АО «КСЖ «Freedom Finance»" required="">
                          <label for="answer32">АО «КСЖ «Freedom Finance» </label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer38" name="alternativa" value="АО «КСЖ «Государственная аннуитетная компания»)" required="">
                          <label for="answer38">АО «КСЖ «Государственная аннуитетная компания»)</label>
                        </div>
                        <div class="answer">
                          <input type="radio" id="answer33" name="alternativa" value="АО «КСЖ «Standard Life»" required="">
                          <label for="answer33"> АО «КСЖ «Standard Life»</label>
                        </div>    
                        <div class="answer">
                          <input type="radio" id="answer34" name="alternativa" value="АО «КСЖ «KM Life»" required="">
                          <label for="answer34"> АО «КСЖ «KM Life» </label>
                        </div>  
                         <div class="answer">
                          <input type="radio" id="answer35" name="alternativa" value="АО «КСЖ «Европейская Страховая Компания»" required="">
                          <label for="answer35"> АО «КСЖ «Европейская Страховая Компания»</label>
                        </div>
                         <div class="answer">
                          <input type="radio" id="answer36" name="alternativa" value="АО «КСЖ «Евразия»" required="">
                          <label for="answer36"> АО «КСЖ «Евразия» </label>
                        </div>
                         <div class="answer">
                          <input type="radio" id="answer37" name="alternativa" value="Не рассматриваю отказ" required="">
                          <label for="answer37"> Не рассматриваю отказ </label>
                        </div>                  
                      </div>
                      
                      
                      <button class="button-blue">Отправить</button>
                    </form>
                  </div>
                  <?php } ?>
                </div>
                <div class="tab-pane" id="menu6">
                  <div class="title"><?php echo $list_elem[56]["TEXT_$lang"]; ?></div>
                   <div class="select">
                  <select id="selectFAQ">
              <?php foreach($list_faq as $k=>$v) { ?>
                    <option value="<?php echo $v['MENU']; ?>"><?php echo $v["PRODUCT_NAME_$lang"]; ?></option>
                       <?php } ?>                
                  </select>
                </div>
                <div class="faq" id="accordion1">
                  <div class="panel-group" id="accordion1">
                  <?php foreach($list_ask as $k=>$v) { ?>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $v['TAB']; ?>"><?php echo $v["ITEM_NAME_$lang"]; ?> <div class="expand_caret"></div></a>
                      </div>
                      <div id="<?php echo $v['TAB']; ?>" class="panel-collapse collapse ">
                        <div class="panel-body">
                          <p><?php echo $v["CONTENT_$lang"]; ?></p>
                          
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  </div>
                  </div>
                  <div class="faq" id="accordion2">
                  <div class="panel-group" id="accordion2">
                  <?php foreach($list_ask2 as $k=>$v) { ?>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $v['TAB']; ?>"><?php echo $v["ITEM_NAME_$lang"]; ?> <div class="expand_caret"></div></a>
                      </div>
                      <div id="<?php echo $v['TAB']; ?>" class="panel-collapse collapse ">
                        <div class="panel-body">
                          <p><?php echo $v["CONTENT_$lang"]; ?></p>
                          
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  </div>
                  </div>
                </div>
                <div class="tab-pane" id="menu7">
                  <div class="title">Полезные ссылки</div>
                  <div class="useful-links">
                  <?php foreach($list_usefull_links as $k=>$v) { ?>
                    <div class="link">
                      <div class="img"><img style=" background-image: url('<?php echo $v['IMG_BASE']; ?>'); background-size: contain; background-repeat: no-repeat; background-position: center;"  alt=""></div>
                      <div class="title-l"><?php echo $v["NAME_$lang"]; ?></div>
                      <a href="<?php echo $v['URL']; ?>"><?php echo $v['URL']; ?></a>
                    </div>
                    <?php } ?>
                 
                    
                   
                    
                  </div>
                </div>
                <div class="tab-pane" id="menu8">
                  <div class="title"><?php echo $list_clients_supports[6]["ITEM_NAME_$lang"]; ?></div>
                  <div class="text text-termin">
                    <?php echo $list_clients_supports[6]["CONTENT_$lang"]; ?>
                  </div>
                </div>
                
                <div class="tab-pane" id="menu9">
                  <div class="title"><?php echo $list_clients_supports[7]["ITEM_NAME_$lang"]; ?></div>
                  <div class="dflex-prod">
                    <div class="product clearfix" style="width: 800px;">
                    <?php echo $list_clients_supports[7]["CONTENT_$lang"]; ?>  
                    </div>
                  
                  </div>
                   
                  
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--CONTENT END-->
