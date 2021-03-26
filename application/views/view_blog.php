
<div class="header-secondary">
	<div class="head-c">
		<img src="img/picture/banner.jpg" alt="" class="img">
			<div class="title">Блог первого руководителя</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="padding-top: 40px;">
			<div class="col-lg-3">
				<img src="img/picture/chief.jpg" style="width: 100%;" />
			</div>
			<div class="col-lg-9">
				
					<p style="font-size: 16px; text-align: justify;">
                Рад приветствовать вас на своем блоге. Здесь вы можете задавать интересующие вас вопросы, направлять для рассмотрения свои предложения и оставлять комментарии касательно деятельности АО «КСЖ «ГАК». 
						<br />
					</p>
				
				<p style="font-size: 16px; text-align: justify;">Надеюсь, что данный интерактивный ресурс послужит эффективным каналом обратной связи с вами и будет весьма полезен всем. Любое ваше обращение не будет оставлено без внимания, <br /> а ваши предложения и замечания будут приняты к сведению и помогут нам усовершенствовать действующие бизнес-процессы.</p>
				<br />
				<p>    С уважением, 
					<br />
            Галым Амерходжаев, 
					<br />
            Председатель Правления АО «КСЖ «ГАК»
            
				</p>
				<br />
			
				
					<p style="font-size: 16px; text-align: justify;">
						<i>Пользователям сайта! 
							<br />       
            Компания оставляет за собой право направлять ответы на вопросы, содержащие сведения о личных данных, только на вашу электронную почту. В этой связи просим вас указывать действующий электронный адрес и корректно вводить данные.              
						</i>                        
					</p>
			
                <br /><br />
                <div class="text-trans" style="font-size: 16px;font-family: 'GOTHAM_MEDIUM';margin-bottom: 40px;">Виртуальная приемная</div>
                <div class="form-text">
                    <form name="blog_form" method="post" class="form-wrap">
                      <div class="form">
                        <p>ФИО <span>*</span></p>
                        <input id="name" placeholder="Имя" name="name" type="text" required="">
                        <span id="error_name"></span>
                      </div>
                       <div class="form">
                        <p>Эл. Почта  <span>*</span></p>
                        <input name="email" type="email" id="email" value="" placeholder="Введите ваш e-mail" required="">
                        <span id="error_email"></span>
                      </div>
                    <!--
                      <div class="form">
                        <p>ИИН <span>*</span></p>
                        <input placeholder="ИИН" name="tel" type="number" id="iin" value="" required="" maxlength="12">
                        <span id="error_iin"></span>
                      </div> 
                     --> 
                       <div class="form">
                        <p>Номер телефона <span>*</span></p>
                        <input placeholder="Номер телефона" name="phone_client_blog" type="text" id="phone_client_blog" value="" required="" >
                        <span id="error_tel"></span>
                      </div> 
                                          
                    <div class="form">
                        <p>Тема сообщения <span></span></p>
                        <input id="theme" placeholder="Тема сообщения" name="name" type="text" required="">
                      </div>
                                            
                      <div class="form-textarea">
                        <p>Текст сообщение </p>
                        <textarea placeholder="Ваше сообщение" name="text_jaloby" id="text_sms"></textarea>
                      </div>
                    <div class="g-recaptcha" data-sitekey="6LfH1tYZAAAAAAMnAs6HOE20BYHPm2BrxTwLdlW5"></div>
                      <div class="form-down">
                                              
                        <input type="button" id="send_to_chief" name="complaint" class="button-blue" value="Отправить" />
                      </div>                                           
                    </form>
                  </div>
			</div>
		</div>
	</div>
    
    
      <div class="modal inmodal fade" id="return_modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Результат расчета</h4>
            </div>
            <div id="blog_item">    
            
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Перезвоните</button>
                <a type="button" class="btn btn-white" data-dismiss="modal">Закрыть</a>
            </div>
        </div>
    </div>
</div>
    
    
    <style>
    .form-text .form{
        width: 70%;
    }
    
    .form-text .form-textarea textarea{
        width: 70%;
    }
    .text p {
    margin-top: 0px;
}
.form-text .form span {
    color: red;
}
    
    </style>