<style>
	.red-tempo {
		background-color: red;
		color: white;
		padding: 3px;
	}
</style>


<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	'Laporan Piutang Per Proyek',
);

?>
<h1>Data Laporan Piutang Untuk No PO: <?php echo $proyek->no_po; ?></h1>

<div class="grid-view">
	<div style="margin-bottom:5px;">
		<b>Nama Pelanggan</b>: <?php echo $proyek->pelanggan->nama_pelanggan; ?> <br />
		<b>Tanggal Proyek</b>: <?php echo date("d-m-Y", strtotime($proyek->tanggal_proyek)); ?> <br /> 
		<b>Biaya Proyek</b>: Rp <?php echo number_format($proyek->biaya_proyek); ?> <br />
	</div>
	<table class="items">
		<thead>
			<tr>
				<th>No</th>
				<th>No Detail Invoice/<br />Keterangan</th>
				<th>Tanggal Jatuh Tempo/ <br />Waktu Terselesaikan</th>
				<th>Harga Detail</th>
				<th>Detail Pembayaran</th>
				<th>Saldo</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$totalHargaDetail = 0;
				$totalJumlahTerbayar = 0;
				$grandBayar = 0;
				$totalSaldo = 0;
			?>

			<?php $detailProyek = $proyek->detailProyeks; ?>
			<?php $i = 1; foreach($detailProyek as $myDetail): ?>
			<tr class="<?php echo ( ($i % 2) == 0 ? 'even' : 'odd');?>">
				<td><?php echo $i; ?></td>
				<td>
					No Detail Invoice:<br /> 
					&nbsp;&nbsp; <b><?php echo $myDetail->no_detail_invoice; ?></b> <br />
					Keterangan: <br />
					&nbsp;&nbsp; <?php echo $myDetail->keterangan; ?>
				</td>
				<td>
					Jatuh Tempo: <br /> 
					&nbsp;&nbsp; <b><?php echo date("d-m-Y", strtotime($myDetail->tanggal_jatuh_tempo)); ?></b> <br />
					Waktu Selesai: <br />
					&nbsp;&nbsp; <?php echo date("d-m-Y", strtotime($myDetail->waktu_terselesaikan)); ?>
				</td>
				<td style="text-align:right;">
					Rp <?php 
						echo number_format($myDetail->harga_detail); 
						$totalHargaDetail += $myDetail->harga_detail;
					?>
				</td>
				<td style="text-align:right;">
					<?php 
						$pembayaran = $myDetail->pembayarans;
						$pmbTotal = 0;
						if(count($pembayaran) > 0) {
							?>
							<table>
								<thead>
									<tr>
										<th>Tgl Bayar</th>
										<th>Jumlah</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($pembayaran as $pmb): ?>
										<tr>
											<td><?php echo date("d-m-Y", strtotime($pmb->waktu_transfer)); ?></td>
											<td style="text-align: right;"> Rp <?php 
												echo number_format($pmb->jumlah_transfer); ?></td>
										</tr>
										<?php $pmbTotal += $pmb->jumlah_transfer; ?>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<td style="text-align: right;" colspan="2">
											Total: Rp <?php echo number_format($pmbTotal); ?>
											<?php $grandBayar += $pmbTotal; ?>
										</td>
									</tr>
								</tfoot>
							</table>
							<?php 
						} else {
							echo "-";
						}
					?>
				</td>
				<td style="text-align:right;">
					<?php 
						$saldo = $myDetail->harga_detail - $pmbTotal; 
						$totalSaldo += $saldo;
					?>
					<span class="<?php 
						if( strtotime($myDetail->tanggal_jatuh_tempo) 
									< strtotime(date('Y-m-d') ) 
								&& $saldo > 0 ) {
							echo "red-tempo";						
						}
					?>">
						Rp <?php echo number_format($saldo);?>
					</span>
				</td>
			</tr>
			<?php $i++; endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" style="text-align:right;">Total</td>
				<td style="text-align:right;">Rp <?php echo number_format($totalHargaDetail); ?></td>
				<td style="text-align:right;">Rp <?php echo number_format($grandBayar); ?></td>
				<td style="text-align:right;">Rp <?php echo number_format($totalSaldo); ?></td>
			</tr>
		</tfoot>
	</table>
</div>