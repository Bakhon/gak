<!--CONTENT-->
  <main class="content">
    <div class="single-news">
      <div class="container">
        <a href="news_list" class="back"><img src="img/icon/back.svg" alt=""> Назад</a>
        <div class="container-776">
        <?php foreach($list_news as $k=>$v) { ?>
          <div class="title"><?php echo $v["NEWS_TITLE_$lang"]; ?></div>
          <div class="date"><?php echo $v['NEWS_DATE']; ?></div>
          <?php if($v['UPLOAD_FILE']) {
            
$image = "upload/".$v['UPLOAD_FILE'];
                                    
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
            
            ?>
          <img src='<?php echo $src; ?>'alt="" class="img">
          <?php } ?>
          <div class="text">
            <p><?php echo $v["NEWS_TEXT_$lang"]; ?></p>
          </div>       
          <?php } ?>
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->
  
  

>