<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pelanggan'); ?>
		<?php echo $form->textField($model,'id_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pelanggan'); ?>
		<?php echo $form->textField($model,'nama_pelanggan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_institusi_pelanggan'); ?>
		<?php echo $form->textField($model,'nama_institusi_pelanggan',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_pelanggan'); ?>
		<?php echo $form->textField($model,'alamat_pelanggan',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipe_pelanggan'); ?>
		<?php echo $form->textField($model,'tipe_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rekening'); ?>
		<?php echo $form->textField($model,'no_rekening',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_bank'); ?>
		<?php echo $form->textField($model,'nama_bank',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_telp_pelanggan'); ?>
		<?php echo $form->textField($model,'no_telp_pelanggan',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fax_pelanggan'); ?>
		<?php echo $form->textField($model,'fax_pelanggan',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_pelanggan'); ?>
		<?php echo $form->textField($model,'email_pelanggan',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->