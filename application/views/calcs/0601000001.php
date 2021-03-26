     <div class="form">
                    <span><?php echo $list_elem[31]["TEXT_$lang"]; ?></span>
                    <input type="date">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[32]["TEXT_$lang"]; ?></span>
                    <select name="" id="">
                      <option value="1"><?php if($lang == 'RU') { ?>Муж <?php } else { ?>Ер<?php } ?></option>
                      <option value="2"><?php if($lang == 'RU') { ?>Женщина<?php } else { ?>Әйел<?php } ?></option>
                    </select>
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[33]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[34]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>
                  <div class="form">
                    <span><?php echo $list_elem[35]["TEXT_$lang"]; ?></span>
                    <input type="text">
                  </div>









<!--
<div class="col-lg-3">
    <label>Дата рождения</label>  
    <input type="date" class="form-control" id="bithday" />                                                                    
</div>

<div class="col-lg-3">
    <label>Пол</label>  
    <select id="sex" class="form-control">
        <option value="1">Мужской</option>
        <option value="2">Женский</option>        
    </select>                                                                    
</div>

<div class="col-lg-3">
    <label>Срок страхования (лет)</label>  
    <input type="number" class="form-control" id="srok_ins" />                                                                        
</div>

<div class="col-lg-3">
    <label>Годовой доход</label>  
    <input type="number" class="form-control" id="gfot" />                                                                    
</div>

<div class="col-lg-6">
    <label>Страховая сумма</label>  
    <input type="number" class="form-control" id="str_sum" />                                                                    
</div>

<div class="col-lg-6">
    <label>Дополнительное покрытие</label>  
    <select id="dop_pokr" class="form-control">
        <option value="0">Без дополнительного покрытия</option>
        <?php 
            foreach($list_dobr as $k=>$v){
                echo '<option value="'.$v->ID.'">'.$v->NAIMEN.'</option>';
            }
        ?>
    </select>                                                                        
</div>

-->