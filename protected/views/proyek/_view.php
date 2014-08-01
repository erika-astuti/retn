<?php
/* @var $this ProyekController */
/* @var $data Proyek */
?>

<div class="container">
	
	<div class="span-18">
		<b><?php echo CHtml::encode($data->getAttributeLabel('nama_proyek')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->nama_proyek), array('view', 'id'=>$data->id_proyek)); ?>
		<br />
		<br />

	</div>
	
	<div class="span-7">
		<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_proyek')); ?>:</b>
		<?php echo CHtml::encode($data->tanggal_proyek); ?>
		<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelanggan')); ?>:</b>
		<?php echo CHtml::encode($data->pelanggan->nama_pelanggan); ?>
		<br />
	</div>

	<div class="span-7">
		<b><?php echo CHtml::encode($data->getAttributeLabel('no_po')); ?>:</b>
		<?php echo CHtml::encode($data->no_po); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('no_piutang')); ?>:</b>
		<?php echo CHtml::encode($data->no_piutang); ?>
		<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_proyek')); ?>:</b>
		<?php echo CHtml::encode($data->biaya_proyek); ?>
		<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('aktif')); ?>:</b>
		<?php echo CHtml::encode($data->getAktifFlag()); ?>
		<br />
	</div>


</div>
