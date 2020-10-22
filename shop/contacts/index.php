<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

  <b>Адрес:</b> Москва, 2-я Хуторская ул., 38А</p>
  <iframe width="640" height="490" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
          src="https://maps.google.ru/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.+2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F,+%D0%B4.+38%D0%90&amp;aq=&amp;sll=55,103&amp;sspn=90.84699,270.527344&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+38,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127287&amp;ll=55.805478,37.569551&amp;spn=0.023154,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
  <br/>
  <small><a
        href="https://maps.google.ru/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.+2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F,+%D0%B4.+38%D0%90&amp;aq=&amp;sll=55,103&amp;sspn=90.84699,270.527344&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+38,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127287&amp;ll=55.805478,37.569551&amp;spn=0.023154,0.054932&amp;z=14&amp;iwloc=A"
        style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback_form", Array(
	"EMAIL_TO" => "killah19935@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?>

<!--  <form action="/" class="form-horizontal form-style-dashed">-->
<!--    <h1>Задать вопрос:</h1>-->
<!---->
<!--    <div class="row">-->
<!--      <div class="col-lg-8 col-md-8">-->
<!--        <div class="form-group">-->
<!--          <label for="input-6" class="col-sm-4 col-xs-12 control-label required">Ваше имя:</label>-->
<!---->
<!--          <div class="col-sm-8">-->
<!--            <input id="input-6" type="text" class="form-control" placeholder="Иван Иванов" required>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--          <label for="input-9" class="col-sm-4 col-xs-12 control-label required">E-mail:</label>-->
<!---->
<!--          <div class="col-sm-8">-->
<!--            <input id="input-9" type="email" class="form-control" placeholder="info@intervolga.ru"-->
<!--                   required>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--          <label for="input-10" class="col-sm-4 col-xs-12 control-label">Текст сообщения:</label>-->
<!---->
<!--          <div class="col-sm-8">-->
<!--            <textarea class="form-control" rows="7" id="input-10"></textarea>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--          <label for="input-5" class="col-sm-4 col-xs-12 control-label required">Защитный код:</label>-->
<!---->
<!--          <div class="col-sm-8 col-xs-12">-->
<!--            <div class="input-group-captcha">-->
<!--              <div class="row">-->
<!--                <div class="col-sm-6">-->
<!--                  <div class="image">-->
<!--                    <img class="img-responsive" src="img/captcha2.jpg" alt=""/>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="col-sm-6">-->
<!--                  <input class="form-control" type="text" placeholder="Код с картинки"/>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--          <div class="col-sm-8 col-sm-offset-4">-->
<!--            <button class="btn btn-primary" type="submit">Отправить</button>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </form>-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>