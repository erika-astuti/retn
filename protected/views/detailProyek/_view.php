<?php
/* @var $this DetailProyekController */
/* @var $data DetailProyek */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detail_proyek')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_detail_proyek), array('view', 'id'=>$data->id_detail_proyek)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_jatuh_tempo')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_jatuh_tempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_detail_invoice')); ?>:</b>
	<?php echo CHtml::encode($data->no_detail_invoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_terselesaikan')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_terselesaikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pengerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->status_pengerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_detail')); ?>:</b>
	<?php echo CHtml::encode($data->harga_detail); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->id_proyek); ?>
	<br />

	*/ ?>

</div>