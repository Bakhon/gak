

  <div class="header-secondary">
    <div class="head-c">
      <img src="img/picture/2.jpg" alt="" class="img">
      <div class="title"><?php echo $list_keeper[0]["ITEM_NAME_$lang"]; ?></div>
    </div>
  </div>

<!--CONTENT-->
  <main class="content">
    <div class="container padding-0">
      <div class="dflex-prod">
        <div class="product clearfix">
        <?php echo $list_keeper[0]["CONTENT_$lang"]; ?>
  
            
          </div>
          <div class="prod-form" data-spy="affix" data-offset-top="457">
          <div class="form-product">
            <div class="title-f"><?php echo $list_elem[52]["TEXT_$lang"]; ?></div>
            <form action="" class="form">
            <input type="hidden" name="name_product" id="name_product" value="<?php echo $list_keeper[0]['ITEM_NAME_RU']; ?>" />
              <input required="" id="name_calback" name="name_calback" type="text" placeholder="<?php echo $list_elem[48]["TEXT_$lang"]; ?>">
              <input required="" id="tel" name="tel" type="tel" placeholder="<?php echo $list_elem[49]["TEXT_$lang"]; ?>">
              <input id="mail" name="mail" type="email" placeholder="E-mail">
              <select name="city_from" id="city_from" class="select2_demo_1 form-control pos_btn" required="" >
                        <option selected="" value="0"><?php echo $list_elem[89]["TEXT_$lang"]; ?></option>
                        <?php foreach($list_city as $k=>$v) { ?>                                                   
                        <option value="<?php echo $v['ID']; ?>"><?php echo $v["CITY_$lang"]; ?></option>
                        <?php } ?>    
                </select>
                <br />
              <button onclick="callback_smiso()" class="button-blue"><?php echo $list_elem[52]["TEXT_$lang"]; ?></button>
            </form>
          </div>
        </div>
        </div>
      </div>
    </main>
    <!--CONTENT END-->




 

  