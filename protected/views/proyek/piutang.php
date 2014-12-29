<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	'Laporan Piutang',
);

?>
<h1>Data Laporan Piutang Per Proyek</h1>

<div class="grid-view">
	<table class="items">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>No PO</th>
				<th>Harga Proyek</th>
				<th>Jumlah Terbayar</th>
				<th>Saldo</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$totalHargaProyek = 0;
				$totalJumlahTerbayar = 0;
				$totalSaldo = 0;
			?>
			<?php $i = 1; foreach($model as $proyek): ?>
			<tr class="<?php echo ( ($i % 2) == 0 ? 'even' : 'odd');?>">
				<td><?php echo $i; ?></td>
				<td><?php echo $proyek->pelanggan->nama_pelanggan; ?></td>
				<td>
					<a href="/index.php/proyek/<?php echo $proyek->id_proyek; ?>"><?php echo $proyek->no_po; ?></a>
				</td>
				<td style="text-align:right;">
					Rp <?php 
						echo number_format($proyek->biaya_proyek); 
						$totalHargaProyek += $proyek->biaya_proyek;
					?>
				</td>
				<td style="text-align:right;">
					Rp <?php 
						$jtBuffer = $proyek->getJumlahTerbayar();
						echo number_format($jtBuffer);
						$totalJumlahTerbayar += $jtBuffer;
					?>
				</td>
				<td style="text-align:right;">Rp <?php
					$saldoBuffer = $proyek->biaya_proyek - $jtBuffer;
					echo number_format($saldoBuffer);
					$totalSaldo += $saldoBuffer;
				 ?></td>
				 <td>
				 	<a href="/index.php/proyek/piutangdetail/<?php 
				 		echo $proyek->id_proyek; ?>">Detail Piutang</a>
				 </td>
			</tr>
			<?php $i++; endforeach;?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" style="text-align:right;">Total</td>
				<td style="text-align:right;">Rp <?php echo number_format($totalHargaProyek); ?></td>
				<td style="text-align:right;">Rp <?php echo number_format($totalJumlahTerbayar); ?></td>
				<td style="text-align:right;">Rp <?php echo number_format($totalSaldo); ?></td>
				<td>&nbsp;</td>
			</tr>
		</tfoot>
	</table>
</div>