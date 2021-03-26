<!--CONTENT-->
  <main class="content">
    <div class="single-news">
      <div class="container">
        <a href="news_list" class="back"><img src="img/icon/back.svg" alt=""> Назад</a>
        <div class="container-776">
        <?php foreach($list_news as $k=>$v) { ?>
          <div class="title"><?php echo $v["NEWS_TITLE_$lang"]; ?></div>
          <div class="date"><?php echo $v['NEWS_DATE']; ?></div>
          
          
          <div style="text-align: justify;" class="text">
            <p ><?php echo $v["NEWS_TEXT_$lang"]; ?></p>            
            <div class="tb-file">
                <a href="upload/завление на вычет 2020 посл.docx" target="_blank" class="file">
                  <img src="img/icon/pdf.svg" alt="">
                  <span style="margin-left: 10px;">Заявление на вычет</span>
                </a>                           
              </div>                       
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </main>
  <!--CONTENT END-->
  
  <style>
  

  .tb-file a {
    width: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-webkit-box-pack: start;
-ms-flex-pack: start;
justify-content: flex-start;
height: 56px;
border: 1px solid
#E8E8E8;
border-radius: 4px;
padding: 0 20px;
margin-bottom: 15px;
  }
  
  
  </style>
