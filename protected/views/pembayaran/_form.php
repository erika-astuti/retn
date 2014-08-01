<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_detail_proyek'); ?>
		<?php echo $form->dropDownList($model, 'id_detail_proyek', 
			CHtml::listData(DetailProyek::model()->findAll(), 'id_detail_proyek', 'keterangan')
		); ?>
		<?php echo $form->error($model,'id_detail_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bank'); ?>
		<?php echo $form->dropDownList($model, 'id_bank', 
			CHtml::listData(Bank::model()->findAll(), 'id_bank', 'nama_bank')
		); ?>
		<?php echo $form->error($model,'id_bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_transfer'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'waktu_transfer',
			'options'=>array(
				'changeMonth'=>true,
				'changeYear'=>true,
				'dateFormat'=>'yy-mm-dd'
			),
			'htmlOptions'=>array(
				'value'=>date('Y-m-d'),
			)
		)); ?>
		<?php echo $form->error($model,'waktu_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_transfer'); ?>
		<?php echo $form->textField($model,'jumlah_transfer',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'jumlah_transfer'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
