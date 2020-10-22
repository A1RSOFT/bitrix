<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

//var_dump($arParams);
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <h1>Задать вопрос:</h1>


<?=bitrix_sessid_post()?>

    <div class="row">
        <div class="col-lg-8 col-md-8">
    <div class="form-group">
<!--        <label for="input-6" class="col-sm-4 col-xs-12 control-label --><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?><!--">Ваше имя:</label>-->
        <label for="input-6" class="col-sm-4 col-xs-12 control-label
            <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>">Ваше имя:</label>
        <div class="col-sm-8">
            <input id="input-6" type="text" class="form-control" placeholder="Иван Иванов" value="<?=$arResult["AUTHOR_NAME"]?>"
                <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
		</div>
	</div>

    <div class="form-group">
        <!--        <label for="input-6" class="col-sm-4 col-xs-12 control-label --><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?><!--">Ваше имя:</label>-->
        <label for="input-9" class="col-sm-4 col-xs-12 control-label
    <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>">Ваше email:</label>
        <div class="col-sm-8">
            <input id="input-9" type="text" class="form-control" placeholder="Иван Иванов" value="<?=$arResult["AUTHOR_EMAIL"]?>"
                <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
        </div>
    </div>

        <div class="form-group">
            <label for="input-10" class="col-sm-4 col-xs-12 control-label
            <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>">Ваше сообщение:</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="7" id="input-10" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>><?=$arResult["MESSAGE"]?></textarea>
            </div>
        </div>

          <?if($arParams["USE_CAPTCHA"] == "Y"):?>
              <div class="col-sm-8 col-xs-12">
                  <div class="input-group-captcha">
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="image">
                                  <img class="img-responsive" src="img/captcha2.jpg" alt=""/>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <input class="form-control" type="text" placeholder="Код с картинки"/>
                          </div>
                      </div>
                  </div>
              </div>
          <?endif;?>


        </div>
    </div>
</form>
</div>


<?if($arParams["USE_CAPTCHA"] == "Y"):?>
    <div class="form-group">
        <label for="input-5" class="col-sm-4 col-xs-12 control-label required">Защитный код:</label>

        <div class="col-sm-8 col-xs-12">
            <div class="input-group-captcha">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="image">
                            <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                            <img class="img-responsive" src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" name="captcha_word" type="text" placeholder="Код с картинки" maxlength="50" value=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?endif;?>


<!--<form action="/" class="form-horizontal form-style-dashed">-->
<!--    <h1>Задать вопрос:</h1>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-8 col-md-8">-->
<!---->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="input-6" class="col-sm-4 col-xs-12 control-label required">Ваше имя:</label>-->
<!---->
<!--                <div class="col-sm-8">-->
<!--                    <input id="input-6" type="text" class="form-control" placeholder="Иван Иванов" required>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="input-9" class="col-sm-4 col-xs-12 control-label required">E-mail:</label>-->
<!---->
<!--                <div class="col-sm-8">-->
<!--                    <input id="input-9" type="email" class="form-control" placeholder="info@intervolga.ru"-->
<!--                           required>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="input-10" class="col-sm-4 col-xs-12 control-label">Текст сообщения:</label>-->
<!---->
<!--                <div class="col-sm-8">-->
<!--                    <textarea class="form-control" rows="7" id="input-10"></textarea>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="input-5" class="col-sm-4 col-xs-12 control-label required">Защитный код:</label>-->
<!---->
<!--                <div class="col-sm-8 col-xs-12">-->
<!--                    <div class="input-group-captcha">-->
<!--                        <div class="row">-->
<!--                            <div class="col-sm-6">-->
<!--                                <div class="image">-->
<!--                                    <img class="img-responsive" src="img/captcha2.jpg" alt=""/>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6">-->
<!--                                <input class="form-control" type="text" placeholder="Код с картинки"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <div class="col-sm-8 col-sm-offset-4">-->
<!--                    <button class="btn btn-primary" type="submit">Отправить</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->