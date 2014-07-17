<?php
/* @var $this BankController */
/* @var $model Bank */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bank-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_bank'); ?>
		<?php echo $form->textField($model,'nama_bank',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nama_bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cabang'); ?>
		<?php echo $form->textField($model,'cabang',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cabang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_rek'); ?>
		<?php echo $form->textField($model,'no_rek',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'no_rek'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->