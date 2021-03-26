  <!--CONTENT-->
  <main class="content">
    <div class="news-wrapper clearfix">
      <div class="container-776">
        <div class="news-list">
        <?php 
       
        foreach($list_news as $k=>$v) { ?>
          <div class="news">
            <a href="news?id=<?php echo $v['ID']; ?>"><?php echo $v["NEWS_TITLE_$lang"]; ?></a>
            <span><?php echo $v['NEWS_DATE']; ?></span>
          </div>
          <?php } ?>
         </div>
         
          
         
        <div class="pagination">
          <ul>
          <?php if($pagination != 1){ ?>
            <li class="bg-none"><a href="news_list?page=<?php echo $prev; ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <?php } ?>
            <?php for($i=1;$i<=$list_pagination;$i++) { 
                if($pagination == $i )
                {
                ?>
            
            <li class="active"><a href="news_list?page=<?php echo $i; ?>"><?php echo $i;?></a></li>
            <?php } 
            else{
                ?>
                
                
                 <li><a href="news_list?page=<?php echo $i;?>"><?php echo $i;?></a></li>
          <?php       
            } }
            ?>
           
           
        <!--    <li class="bg-none"><a href="">...</a></li> -->
            <?php if($pagination != $list_pagination) { ?> 
            <li class="bg-none"><a href="news_list?page=<?php echo $next; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <?php } ?>
          </ul>
        </div>
      
    </div>
    </div>
  </main>
  <!--CONTENT END-->