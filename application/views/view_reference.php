<!--CONTENT-->
  <main class="content">
    <div class="container">
      <div class="reference">
        <div class="box_1">
          <p>АО "КСЖ "ГАК"</p>
          <span>наименование организации</span>
        </div>
        <div class="box_1">
          <p>г. Нур-Султан, пр. Мангилик ел, 20 <br> тел.:8 (7172)916-333</p>
          <span>полный почтовый адрес, № телефона</span>
        </div>
        <div class="box_2">
          <span>БИН налогоплательщика:</span>
          <p>050640002859</p>
        </div>
       <div id="head_of_doc"> 
        <div class="title">Справка об осуществленных страховых выплатах за <?php echo $date_begin; ?> - <?php echo $date_end; ?></div>
        <div class="box_3">
          <p><span>Аннуитент:</span> <span><?php echo $lastname.' '.$name.' '.$middlename; ?> , № уд.лич.:<?php echo $docnum; ?> , ИИН: <?php echo $iin; ?></span></p>
          <p><span>№ договора:</span> <span><?php echo $contract_num; ?> от <?php echo $contract_date; ?> г.</span></p>
          <p><span>Размер страховой суммы:</span> <span><?php echo NumberRas($pay_sum); ?> тенге</span></p>
        <!--  <p><span>Размер единовременной выплаты 10% :</span> <span></span></p> -->
          <p><span>Размер страховой выплаты:</span> <span><?php echo NumberRas($pay_sum_v); ?> тенге</span></p>
          <p><span>Периодичность:</span> <span><?php echo $periodich; ?></span></p>
          <p><span>Период выплат:</span> <span><?php echo $date_begin; ?> – <?php echo $date_end; ?></span></p>
        </div>
      </div>  
        <div class="box-table" >
          <div class="table-responsive" id="table_with_data">
          <table>
            <thead>
              <tr>
                <th>Период выплаты</th>
                <th>Размер страховой выплаты по договору</th>
                <th>Размер комиссионного вознаграждения банка (перечисляется за счет страховщика)</th>
                <th>Всего начислено</th>
                <th>Индивидуальный подоходный налог (ИПН)</th>
                <th>Итого к перечислению в БВУ (с учетом комиссии банка и ИПН)</th>
              </tr>
            </thead>
            <tbody>
            <?php $sum = 0; 
            $sum_kom = 0;
            $vsego_nach = 0;
            $sum_ipn = 0;
            $sum_bvu = 0;
            foreach($list_contracts as $k=>$v) {     
                ?>
              <tr>
                    <td><?php echo $v['PNCP_DATE']; ?></td>
                    <td><?php echo NumberRas($v['SUM_PAY']); $sum = $sum + $v['SUM_PAY']; ?></td>
                    <td><?php echo NumberRas($v['SUM_PAY_KOM']); $sum_kom = $sum_kom + $v['SUM_PAY_KOM']; ?></td>
                    <td><?php  $vsego_nach_itogo = $sum + $sum_kom; 
                    $vsego_nach = $v['SUM_PAY'] + $v['SUM_PAY_KOM']; 
                    echo NumberRas($vsego_nach); ?></td>
                    <td><?php $sum_ipn = $sum_ipn + $v['IPN']; echo $v['IPN']; ?></td>
                    <td><?php $sum_bvu = $sum_bvu + $v['SUM_NEW']; echo NumberRas($v['SUM_NEW']); ?></td>
              </tr>
              
              <?php } ?>
              <tr>
                  <td>Итого</td>
                  <td><?php echo NumberRas($sum); ?></td>
                  <td><?php echo NumberRas($sum_kom); ?></td>
                  <td><?php echo NumberRas($vsego_nach_itogo); ?></td>
                  <td><?php echo NumberRas($sum_ipn); ?></td>
                  <td><?php echo NumberRas($sum_bvu); ?></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="box_4">
          <div class="box_5"><p><span>Период выплат:</span> <?php  if(isset($_POST['date_start'])) {echo $_POST['date_start']; } else{ echo $date_begin;} ?> - <?php if(isset($_POST['date_end'])) {echo $_POST['date_end'];} else{ echo $date_end;} ?></p>
            <button data-toggle="modal" data-target="#exampleModal" class="button-blue-line sform">Сформировать</button></div>
             <form  target="_blank" id="table_form" method="post" action="print">
              <textarea hidden="" name="content" id="area_for_print">
                </textarea>
            <button data-id="<?php echo $_SESSION[IIN]; ?>" class="button-blue print_gr">Скачать</button>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!--CONTENT END-->
    
    
      <div class="modal-window-address">
    <div id="exampleModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <div class="title-m">Выберите период</div>
            <div class="form">
              <form method="POST">
                <input type="hidden" name="contracts_num" value="<?php echo $contract_num; ?>" />
                <div class="form-group">
                <label>Дата начала</label>
                <div class="input-group date" id="datetimepicker1">
                    <input placeholder="дд.мм.гггг" name="date_start" type="text" class="form-control" required="" />
                    <span class="input-group-addon"></span>
                    </span>
                </div>
            </div>
        
                  <div class="form-group">
                  <label>Дата окончания</label>
                    <div class="input-group date" id="datetimepicker1">
                    <input placeholder="дд.мм.гггг" name="date_end" type="text" class="form-control"  />
                    <span class="input-group-addon"></span>
                    </span>
                </div>
                  </div>
                </div>
                <button class="button-blue">Сохранить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
 

