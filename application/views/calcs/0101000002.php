       
                <div class="form">
                  <span><?php echo $list_elem[32]["TEXT_$lang"]; ?></span>
                  <select name="sex" id="sex">
                    <option value="1"><?php if($lang == 'RU') { ?>Муж <?php } else { ?>Ер<?php } ?></option>
                      <option value="2"><?php if($lang == 'RU') { ?>Женщина<?php } else { ?>Әйел<?php } ?></option>
                  </select>
                </div>
                <div class="form">
                  <span><?php echo $list_elem[31]["TEXT_$lang"]; ?></span>
                  <input name="birthday" id="birthday" value="1960-01-01" type="date">
                </div>
                <div class="form">
                  <span><?php echo $list_elem[37]["TEXT_$lang"]; ?></span>
                  <input name="concept" id="pay_sum_gfss" value="10000000" type="text">
                </div>
                <div class="form">
                  <span><?php echo $list_elem[38]["TEXT_$lang"]; ?></span>
                  <select name="" id="periodich">
                    <option value=""></option>
                    <option selected="" value="Ежемесячно"><?php if($lang == 'RU') { ?>Ежемесячно <?php } else { ?>ай сайын<?php } ?></option>
                  </select>
                </div>
                <div class="form">
                  <span><?php echo $list_elem[39]["TEXT_$lang"]; ?></span>
                  <input name="gp_year" id="gp_year" value="10" type="text">
                </div>
                <div class="form">
                  <span><?php echo $list_elem[40]["TEXT_$lang"]; ?></span>
                  <input  value="<?php echo date('Y-m-d'); ?>" id="pa_date" type="date">
                </div>
           










