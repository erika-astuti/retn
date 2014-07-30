<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_detail_proyek'); ?>
		<?php echo $form->textField($model,'id_detail_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_jatuh_tempo'); ?>
		<?php echo $form->textField($model,'tanggal_jatuh_tempo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_detail_invoice'); ?>
		<?php echo $form->textField($model,'no_detail_invoice',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_terselesaikan'); ?>
		<?php echo $form->textField($model,'waktu_terselesaikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_pengerjaan'); ?>
		<?php echo $form->textField($model,'status_pengerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_detail'); ?>
		<?php echo $form->textField($model,'harga_detail',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proyek'); ?>
		<?php echo $form->textField($model,'id_proyek'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->