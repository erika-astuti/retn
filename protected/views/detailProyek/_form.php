<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-proyek-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_jatuh_tempo'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'tanggal_jatuh_tempo',
			'options'=>array(
				'changeMonth'=>true,
				'changeYear'=>true,
				'dateFormat'=>'yy-mm-dd'
			),
			'htmlOptions'=>array(
				'value'=>date('Y-m-d'),
			)
		)); ?>
		<?php echo $form->error($model,'tanggal_jatuh_tempo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_terselesaikan'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'waktu_terselesaikan',
			'options'=>array(
				'changeMonth'=>true,
				'changeYear'=>true,
				'dateFormat'=>'yy-mm-dd'
			),
			'htmlOptions'=>array(
				'value'=>date('Y-m-d'),
			)
		)); ?>
		<?php echo $form->error($model,'waktu_terselesaikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_detail_invoice'); ?>
		<?php echo $form->textField($model,'no_detail_invoice',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'no_detail_invoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_detail'); ?>
		<?php echo $form->textField($model,'harga_detail',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'harga_detail'); ?>
	</div>

	<div class="row">

		<?php 
			$chkStatusPengerjaan = false;
			if($model !== null) {
				$chkStatusPengerjaan = explode(",", $model->status_pengerjaan);
			}
		?>

		<?php 
			$d = DetailProyek::model()->getAllDetailStatus(); 
			$myKategoriKey = array_keys($d);

			foreach($myKategoriKey as $key) {
				$checklist = "";

				foreach ($d[$key] as $dkey => $dval) {
					$ditandai = "";

					if($model !== null && in_array($dkey, $chkStatusPengerjaan)) {
						$ditandai = "checked=\"true\"";
					}
					
					$checklist .= "&nbsp;&nbsp;<input type=\"checkbox\" 
						name=\"DetailProyek[status_pengerjaan][]\" {$ditandai}
						value=\"{$dkey}\"/>&nbsp;{$dval}<br/>";
				}

				echo "<div>
					<b>{$key}</b></br>
					{$checklist}
				</div>";
			}
		?>
	</div>

	<?php /* ?>
	<div class="row">
		<?php echo $form->labelEx($model,'status_pengerjaan'); ?>
		<?php echo $form->dropDownList($model, 'status_pengerjaan', 
			DetailProyek::model()->getAllDetailStatus()
		); ?>
		<?php echo $form->error($model,'status_pengerjaan'); ?>
	</div>
	<?php */ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<input type="hidden" name="DetailProyek[id_proyek]" value="<?php echo $id_proyek; ?>" />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
