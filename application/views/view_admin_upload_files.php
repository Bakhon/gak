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
                <li><a href="admin_news">Новости</a></li>
                <li><a href="admin_vacancy">Вакансия</a></li>
                <li><a href="admin_upload_files" class="active">Файлы</a></li>
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
<div class="admin_vac" >
<h2>Редактировать файлы</h2>

<!-- <button style="margin-top: 20px; height: 35px;"  data-toggle="modal" data-target="#add_slide" type="submit" class="btn btn-md btn-primary"><i class="fa fa-plus-square"></i> Добавить файлы </button> -->
</div>
</div>


<div class="modal inmodal fade" id="add_slide" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg" style="float: left; left: 18%;">
        <div class="modal-content modal-lg">
            <div class="modal-header">
               <form name="file" action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone"></form>
            </div>
                                 
        </div>        
    </div>
</div> 




<div class="container" >
            <div class=''>
            <form name="file" action="admin_upload_files" class="dropzone" id="myAwesomeDropzone">            
            </form>
            </div>
        </div>

<?php } else { ?>

<?php require_once Error404; } ?>   