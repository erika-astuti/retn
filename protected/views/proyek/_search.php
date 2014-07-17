<?php
/* @var $this ProyekController */
/* @var $model Proyek */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_proyek'); ?>
		<?php echo $form->textField($model,'id_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_proyek'); ?>
		<?php echo $form->textField($model,'nama_proyek',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_proyek'); ?>
		<?php echo $form->textField($model,'tanggal_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_po'); ?>
		<?php echo $form->textField($model,'no_po',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_piutang'); ?>
		<?php echo $form->textField($model,'no_piutang',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pelanggan'); ?>
		<?php echo $form->textField($model,'id_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_proyek'); ?>
		<?php echo $form->textField($model,'biaya_proyek',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->