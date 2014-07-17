<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pelanggan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pelanggan'); ?>
		<?php echo $form->textField($model,'nama_pelanggan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_institusi_pelanggan'); ?>
		<?php echo $form->textField($model,'nama_institusi_pelanggan',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nama_institusi_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_pelanggan'); ?>
		<?php echo $form->textArea($model,'alamat_pelanggan',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'alamat_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe_pelanggan'); ?>
		<?php echo $form->dropDownList($model, 'tipe_pelanggan', 
			Pelanggan::model()->getAllTipePelanggan()
		); ?>
		<?php echo $form->error($model,'tipe_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_rekening'); ?>
		<?php echo $form->textField($model,'no_rekening',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'no_rekening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_bank'); ?>
		<?php echo $form->textField($model,'nama_bank',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nama_bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telp_pelanggan'); ?>
		<?php echo $form->textField($model,'no_telp_pelanggan',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'no_telp_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax_pelanggan'); ?>
		<?php echo $form->textField($model,'fax_pelanggan',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'fax_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_pelanggan'); ?>
		<?php echo $form->textField($model,'email_pelanggan',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email_pelanggan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
