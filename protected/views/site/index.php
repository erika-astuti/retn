

<?php if(Yii::app()->user->isGuest): ?>
	<h2>Selamat datang, silahkan masuk untuk menggunakan aplikasi</h2>
	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'action'=>Yii::app()->baseUrl.'/index.php/site/login',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<p class="note">Textbox dengan tanda <span class="required">*</span> wajib diisi.</p>

		<div class="row">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>

		
		<div class="row rememberMe">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Login'); ?>
		</div>

	<?php $this->endWidget(); ?>
	</div><!-- form -->
<?php else: //end if user is guest ?> 
	<?php $this->renderPartial('_authlanding', array(
		'proyekAktif'=>$proyekAktif,
		'pembayaranJatuhTempo'=>$pembayaranJatuhTempo
	)); ?>
<?php endif;?>
