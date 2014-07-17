<?php
/* @var $this ProyekController */
/* @var $data Proyek */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyek')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proyek), array('view', 'id'=>$data->id_proyek)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->nama_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_po')); ?>:</b>
	<?php echo CHtml::encode($data->no_po); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_piutang')); ?>:</b>
	<?php echo CHtml::encode($data->no_piutang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->id_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_proyek); ?>
	<br />


</div>