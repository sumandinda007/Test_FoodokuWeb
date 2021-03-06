<div class="body">
  <div class="login_wrap">
<div class="login_logo"></div>
<div class="uk-panel login-box uk-panel-box uk-width-medium-1-3">

   <?php $name=Yii::app()->functions->getOptionAdmin('website_title');?>
   <h3 class="uk-h3"><?php echo !empty($name)?$name:"Foodoku";?> <?php echo Yii::t("default","Empire")?></h3>   
     
   <form id="forms" class="uk-form forms" onsubmit="return false;" method="POST">   
   <?php echo CHtml::hiddenField("action",'login')?>
   <?php echo CHtml::hiddenField("redirect",Yii::app()->request->baseUrl."/admin")?>
   <?php FunctionsV3::addCsrfToken();?>
   
   <?php if (isset($_GET['message'])):?>
   <p class="uk-text-danger"><?php echo $_GET['message']?></p>
   <?php endif;?>
   
   <div class="uk-form-row form-control">
      <div class="uk-form-icon uk-width-1">
        <i class="uk-icon-user"></i>
       <?php echo CHtml::textField('username','',array('class'=>"uk-width-1",'placeholder'=>Yii::t("default","Username"),
       'data-validation'=>"required"
       ));?>
      </div>
   </div>   
   <div class="uk-form-row form-control">     
       <div class="uk-form-icon uk-width-1">
        <i class="uk-icon-lock"></i>
        <?php echo CHtml::passwordField('password','',array('class'=>"uk-width-1",'placeholder'=>Yii::t("default","Password"),
        'data-validation'=>"required"
        ));?>
       </div>     
   </div>   
   
   <?php if (getOptionA('captcha_admin_login')==2):?>
   <?php GoogleCaptcha::displayCaptcha()?>
   <?php endif;?>
   
   <div class="uk-form-row">   
   <button id="signin_btn" class="uk-button uk-width-1"><?php echo Yii::t("default","Signin")?> <i class="uk-icon-chevron-circle-right"></i></button>
   </div>
   
   <p><a href="javascript:;" style="text-transform: uppercase;" class="mt-fp-link fpasswd-btn"><?php echo Yii::t("default","Forgot Password")?>?</a></p>
   </form>
   
   
    <form id="mt-frm" class="uk-form mt-frm" onsubmit="return false;" method="POST">   
   <?php echo CHtml::hiddenField("action",'adminForgotPass')?>
   <h4><?php echo Yii::t("default","Forgot Password")?></h4>
   
   <div class="uk-form-row form-control">
      <div class="uk-form-icon uk-width-1">
        <i class="uk-icon-envelope"></i>
       <?php echo CHtml::textField('email_address','',array('class'=>"uk-width-1",'placeholder'=>Yii::t("default","Email address"),
       'data-validation'=>"required"
       ));?>
      </div>
   </div>   
      
   <div class="uk-form-row">   
   <button id="signin_btn" class="uk-button uk-width-1"><?php echo Yii::t("default","Submit")?> <i class="uk-icon-chevron-circle-right"></i></button>
   </div>
   
   <p><a href="javascript:;" class="mt-login-link"><?php echo Yii::t("default","LOGIN")?></a></p>
   
   </form>
   
</div>
</div> <!--END login_wrap-->
</div>

