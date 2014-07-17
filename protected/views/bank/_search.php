<?php
/* @var $this BankController */
/* @var $model Bank */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bank'); ?>
		<?php echo $form->textField($model,'id_bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_bank'); ?>
		<?php echo $form->textField($model,'nama_bank',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cabang'); ?>
		<?php echo $form->textField($model,'cabang',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rek'); ?>
		<?php echo $form->textField($model,'no_rek',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->