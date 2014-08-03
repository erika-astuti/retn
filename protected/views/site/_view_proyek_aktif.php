<div class="dashboard-list">
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan->nama_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->nama_proyek); ?>
	<br />
</div>
