<?php
/* @var $this ProyekController */
/* @var $model Proyek */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyek-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_proyek'); ?>
		<?php echo $form->textField($model,'nama_proyek',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_proyek'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'tanggal_proyek',
			'options'=>array(
				'changeMonth'=>true,
				'changeYear'=>true,
				'dateFormat'=>'yy-mm-dd'
			),
			'htmlOptions'=>array(
				'value'=>date('Y-m-d'),
			)
		)); ?>
		<?php echo $form->error($model,'tanggal_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_po'); ?>
		<?php echo $form->textField($model,'no_po',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'no_po'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_piutang'); ?>
		<?php echo $form->textField($model,'no_piutang',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'no_piutang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pelanggan'); ?>
		<?php echo $form->dropDownList($model, 'id_pelanggan', 
			Pelanggan::model()->getAllPelanggan()
		); ?>
		<?php echo $form->error($model,'id_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aktif'); ?>
		<?php echo $form->dropDownList($model, 'aktif', 
			Proyek::model()->getAllAktif()
		); ?>
		<?php echo $form->error($model,'aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biaya_proyek'); ?>
		<?php echo $form->textField($model,'biaya_proyek',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'biaya_proyek'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
