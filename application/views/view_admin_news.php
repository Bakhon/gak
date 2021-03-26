<?php if($_SESSION[USER_SESSION]) { ?>
<div class="header-secondary">
    <div class="head-c">
        <img src="img/2.jpg" alt="" class="img">
        <div class="title" style="color: #fff;"></div>
    </div>
    <div class="menu-secondary">
        <div class="" style="margin-left: 10px;">
            <ul>
                <li><a href="admin_main" >Главная</a></li>
                <li><a href="admin_contacts?contact_id=1617">Контакты сайта</a></li>
                <li><a href="admin_news" class="active">Новости</a></li>
                <li><a href="admin_vacancy">Вакансия</a></li>
                <li><a href="admin_upload_files">Файлы</a></li>
                <li><a href="admin_clients_support">Клиентская поддержка</a></li>
                <li><a href="admin_insurance_products">Страховые продукты</a></li>
                <li><a href="admin_company">О компании</a></li>
                <li><a href="admin_documentation">Документы</a></li>
                <li><a href="admin_fin">Фин отчетность</a></li>
            </ul>
        </div>
    </div>
</div>



<div class="container">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox">
                <div class="ibox-content">                
                <div class="rwd" style="display: flex; justify-content: space-between;">  
                  <div>
                      <h2>
                            Редактировать новости
                      </h2>                        
                  </div>                     
                     <div style="margin-top: 25px;">
                     <button data-toggle="modal" data-target="#add_slide" type="submit" class="btn btn-md btn-primary" ><i class="fa fa-plus-square"></i> Добавить новость </button>
                     </div>
                 </div>    
              <br />
                    <div class="project-list">
                   
                       
                 <!--       <span class="pull-right">
                            <a target="_blank" href="site_news_arc" class="btn btn-warning btn-xs"><i class="">История изменений</i></a>
                        </span> -->
                        <table class="table table-hover">
                            <tbody>
                            <?php
                                foreach($list_slider as $k => $v){
                            ?>
                            <tr>
                                <td class="col-sm-4">
                                   <!-- <div class="text-center">
                                        <img alt="image" class="img-responsive" src="<?php echo $v['IMG_BASE64']; ?>" style="width: 100%; height: 100%; max-width: 300px;"/>
                                    </div> -->
                                </td>
                                <td class="project-title">
                                    <a href="project_detail.html"><?php echo $v['NEWS_TITLE_KAZ']; ?></a>
                                    <br>
                                    <small><?php echo $v['NEWS_TEXT_KAZ']; ?></small><br /><br />
                                    <a href="project_detail.html"><?php echo $v['NEWS_TITLE_RU']; ?></a>
                                    <br>
                                    <small><?php echo $v['NEWS_TEXT_RU']; ?></small><br /><br />
                                    <a href="project_detail.html"><?php echo $v['NEWS_TITLE_ENG']; ?></a>
                                    <br>
                                    <small><?php echo $v['NEWS_TEXT_ENG']; ?></small><br />
                                </td>
                                <td class="project-actions">
                                    <form method="post" id="form">
                                    <input hidden="" name="delete_slide" value="<?php echo $v['ID']; ?>"/>
                                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Удалить </button>
                                    <a data-toggle="modal" data-target="#edit_slide<?php echo $v['ID']; ?>" href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Редактировать </a>                                                                    
                           <!--         <label>                                    
                                    <input type="checkbox" name="is_main" id="is_main" value="<?php echo $v['ID']; ?>"/>
                                    <small>Опубликовать на главную страницу</small>                                  
                                    </label>   -->                                                          
                                    </form>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal inmodal fade" id="add_slide" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма добавления слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда (Каз):</label>
                        <input name="SLIDE_HEAD_KAZ" placeholder="" class="form-control" id="SLIDE_HEAD_KAZ" type="text"/>
                    </div>                                                                                                          
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда (Каз):</label>
                        <textarea name="SLIDE_TEXT_KAZ" class="form-control" id="SLIDE_TEXT_KAZ"></textarea>
                    </div>
                    <hr />
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда (Рус):</label>
                        <input name="SLIDE_HEAD_RU" placeholder="" class="form-control" id="SLIDE_HEAD_RU" type="text"/>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда (Рус):</label>
                        <textarea name="SLIDE_TEXT_RU" class="form-control" id="SLIDE_TEXT_RU"></textarea>
                    </div>
                    <hr />                                  
                    <div class="form-group" id="data_1">
                    <label class="font-noraml">Изображение:</label>
                      <input type="file" name="file_adm" accept=".jpg, .png, .jpeg">  
                    </div>
                                                                 
                    <input name="CREATE_MAIL" value="test" style="display: none;"/>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button name="add_news" type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>                        
        </div>        
    </div>
</div>
<?php
    foreach($list_slider as $k => $v){
?>
<div class="modal inmodal fade" id="edit_slide<?php echo $v['ID']; ?>" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                <div id="closeModal"><h4 class="modal-title">Форма редактирования слайда</h4></div>
                <small class="font-bold"></small>
            </div>
            <form method="post">                           
                <div class="modal-body">                                   
                    <div class="form-group" id="data_1" style="display: none;">
                        <label class="font-noraml">ID</label>
                        <input name="ID_UPD" placeholder="" class="form-control" id="ID_UPD" value="<?php echo $v['ID']; ?>" type="text">
                    </div>               
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда каз</label>
                        <input name="SLIDE_HEAD_KAZ_UPD" placeholder="" class="form-control" id="SLIDE_HEAD_KAZ_UPD" value="<?php echo $v['NEWS_TITLE_KAZ']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда каз</label>
                        <textarea id="summernote<?php echo $v['ID']-2; ?>" style="height: 100px;" name="SLIDE_TEXT_KAZ_UPD" class="form-control" id="SLIDE_TEXT_KAZ_UPD"><?php echo $v['NEWS_TEXT_KAZ']; ?></textarea>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Заголовок слайда рус</label>
                        <input name="SLIDE_HEAD_RU_UPD" placeholder="" class="form-control" id="SLIDE_HEAD_RU_UPD" value="<?php echo $v['NEWS_TITLE_RU']; ?>" type="text">
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-noraml">Текст слайда рус</label>
                        <textarea id="summernote<?php echo $v['ID']; ?>" style="height: 100px;" name="SLIDE_TEXT_RU_UPD" class="form-control" id="SLIDE_TEXT_RU_UPD"><?php echo $v['NEWS_TEXT_RU']; ?></textarea>
                    </div>                                                                                                  
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Сохранить</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    }
?>

<script>
    $('#zona-drop').click(
        function(){
            $('#openimage').click();
        }
    )
</script>



<script>
    function delete_doc(class_name)
    {
        //console.log('classname ');
        $(".altay4").remove();
    }

    function add_doc(name, type, format)
    {
        var img = $('#getbase64').val();
        console.log(name);      
        $('#text_areas_in_base64').append('<textarea hidden="" name="doc_b64" class="altay4">'+img+'</textarea>');
        var format = '';
        alert('Загружено');
    }
    
    function check_file_size(size_int, size_form)
    {
        if(size_int > 10 && size_form == 'MB')
        {
            alert('Файл '+name+'слишком большой');
            return false;
        }
    }
    
    (function() {
  
          var zonaDrop = document.getElementById('zona-drop');
          zonaDrop.addEventListener("dragover", function(e){
          e.preventDefault();
            
            zonaDrop.setAttribute("class", "over");
            
          
          }, false);
        
          zonaDrop.addEventListener("drop", function(e){
              e.preventDefault();
            var files = e.dataTransfer.files;
            var fileCount = files.length;
            var i;
            
            if(fileCount > 0) {
              for (i = 0; i < fileCount; i = i + 1) {
                var file = files[i];
                var name = file.name;
                var class_name = name.slice(0, -4);
                
                var name_split = name.split('.');
                var format = name_split[name_split.length-1];
                
                var size = bytesToSize(file.size);
                var size_int_split = size.split(' ');
                console.log(size_int_split[0]);
                console.log(size_int_split[1]);
                var checker = check_file_size(size_int_split[0], size_int_split[1]);
                if(checker == false){
                    return false;
                }
                var type = file.type;
                var reader = new FileReader();
                
                zonaDrop.removeAttribute("class");
                
                reader.onload = function(e) {
                document.getElementById("getbase64").value = e.target.result;
                var img_source = e.target.result;
                if(format != 'jpg' && format != 'png'){
                    img_source = 'styles/img/1487344174_blank.png';
                }
                zonaDrop.innerHTML+= "<div class='altay4'><img src='" + img_source + "'/></br> Название " + name +", Тип: " + type +", Размер: " + size +" <a onclick='delete_doc(altay4);'>Delete</a></div>";
                add_doc(class_name, type, format);
                };        
                reader.readAsDataURL(file);
              }
             
            }
            
          }, false);
        
        })();
        
        function simulateclick(){
            document.getElementById("readimg").click();    
        }
        
        var zonaDrop = document.getElementById('zona-drop');
        document.getElementById("readimg").style.visibility = "collapse";
        document.getElementById("readimg").style.width = "0px";
        document.getElementById("openimage").addEventListener("click", simulateclick, false);
        
        function readImage() {
            var fileToLoad = document.getElementById("readimg").files[0];
            var name = fileToLoad.name;
            var class_name = name.slice(0, -4);
            
            var name_split = name.split('.');
            var format = name_split[name_split.length-1];
            
            var size = bytesToSize(fileToLoad.size);
            var size_int_split = size.split(' ');
            var checker = check_file_size(size_int_split[0], size_int_split[1]);
            if(checker == false){
                return false;
            }
            var type = fileToLoad.type;
                                        
        	var fileReader = new FileReader();
        	fileReader.onload = function(fileLoadedEvent) {
        		var textFromFileLoaded = fileLoadedEvent.target.result;
        		var previewimage = new Image();
                // previewimage.src = textFromFileLoaded;
                document.getElementById("getimage").appendChild(previewimage) ;   
                document.getElementById("getbase64").value = textFromFileLoaded;
                img_source = 'styles/img/1487344174_blank.png';
                zonaDrop.innerHTML+="<div class='altay4'><img src='" + img_source + "'/></br> Название "+ name +", Тип: " + type +", Размер: " + size +" <a onclick='delete_doc(altay4);'>Delete</a></div>";
                add_doc(class_name, type, format);
        	};
        	fileReader.readAsDataURL(fileToLoad);
        }
        function bytesToSize(bytes) {
           var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
           if (bytes == 0) return '0 Bytes';
           var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
           return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
        };
        document.getElementById("readimg").addEventListener("change", readImage, false);
        

</script>





<style>
    textarea {width:320px; height:100px; border: 1px solid #000;}
    #zona-drop 
    {
      min-height: 300px;
      max-width: 100%;
      padding: 15px;
      border: 4px dashed #d3d3d3;
    }
    
    #zona-drop img 
    {
      max-width: 50px;
      display: block;
      
    }
    
    .over 
    {
      border-color:#333;
      background: #ddd;
    }
    
    p {font-family: calibri}
</style>

<?php } else { ?>


<?php require_once Error404; } ?>

