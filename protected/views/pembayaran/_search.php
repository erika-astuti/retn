<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pembayaran'); ?>
		<?php echo $form->textField($model,'id_pembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_detail_proyek'); ?>
		<?php echo $form->textField($model,'id_detail_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_transfer'); ?>
		<?php echo $form->textField($model,'jumlah_transfer',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_transfer'); ?>
		<?php echo $form->textField($model,'waktu_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bank'); ?>
		<?php echo $form->textField($model,'id_bank'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->