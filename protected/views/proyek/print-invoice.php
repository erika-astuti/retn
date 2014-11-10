
<div class="container" style="margin:12px;">
   <div class="span-16">
      <table>
         <tr>
            <td style="width:520px;">&nbsp;</td>
            <td>
               <img alt="studio kasat mata" 
                  src="/images/<?php echo Yii::app()->params['headerImage']; ?>" width="90em;" height="90em;"/>
            </td>
         </tr>
      </table>
   </div>
   <div class="span-16">
      <table style="width: 100%;">
         <tr>
            <td>
               <font style="font-weight: bold;font-size:15px;">INVOICE</font>
               <br />
               Kepada Yth. <br />
               <?php echo $pelanggan->nama_pelanggan; ?> <br />
               <?php echo $pelanggan->nama_institusi_pelanggan; ?> <br />
               <?php echo $pelanggan->alamat_pelanggan ?> <br />
               
            </td>
            <td>
                  Invoice No <?php echo $detailproyek->no_detail_invoice; ?> <br />
                  Tanggal <?php echo date('d M Y', strtotime($detailproyek->waktu_terselesaikan)); ?> <br />
            </td>
         </tr>
      </table>
   </div>

   <div class="clear">&nbsp;</div>
   <div class="span-16">
    <div class="printTable">
      <table>
         <tr>
            <td>No</td>
            <td>Keterangan</td>
            <td>Harga Unit (IDR)</td>
            <td>Pembayaran</td>
            <td>Jumlah (IDR)</td>
         </tr>
         <tr>
            <td>1</td>
            <td>
               <?php echo $proyek->nama_proyek; ?> <br />
               <?php echo $detailproyek->getDetailStatus(); ?>
            </td>
            <td rowspan="2" style="text-align: right;"><?php echo number_format($detailproyek->harga_detail); ?></td>
            <td rowspan="2"><?php echo date('d M Y', strtotime($detailproyek->tanggal_jatuh_tempo)); ?></td>
            <td rowspan="2" style="text-align: right;"><?php echo number_format($detailproyek->harga_detail); ?></td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td style="border-right: 1px solid black;">
               PO no. <?php echo $proyek->no_po; ?>
            </td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td style="text-align: right;"><b>Total Invoice</b></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td  style="text-align: right;">
               <b><?php echo number_format($detailproyek->harga_detail); ?></b>
            </td>
         </tr>
      </table>
    </div>
   </div>
   <div class="clear">&nbsp;</div>
   <div style="padding-left:10%;">
      <table>
         <tr>
            <td style="width: 50px;">Terbilang:</td>
            <td>
               <?php 
                  $f = new NumberFormatter('id', NumberFormatter::SPELLOUT);
                  echo $f->format($detailproyek->harga_detail).' rupiah';
               ?>
            </td>
         </tr>
         <tr>
            <td colspan="2">
              <small> Pembayaran ditransfer ke : <br />
               Rimbar Diorisma <br />
               No. rekening 037.26.424.73<br />
               Bank Central Asia (BCA)<br />
               Kantor Cabang Sudirman, Yogyakarta
            </small>
            </td>
         </tr>
      </table>
   </div>
   <div class="span-16">
      <div style="padding-left:65%; margin-top: 7px;"> 
         <center>Yogyakarta, <?php echo date('d M Y'); ?></center>
         <br /><br /><br />
         <center>Rimbar Diorisma</center>
      </div>
   </div>

   <div class="clear">&nbsp;</div>
   <div class="span-16">
      <small>
      Demakan Baru TR III/764 RT 34 RW 09 Tegalrejo Yogyakarta 55244 <br />
      Telp : 0274.749.6288 <font class="ln-blue">Email : studio_kasatmata@yahoo.com</font> <br />
       <font class="ln-blue">Website : www.studiokasatmata.com</font>
      </small>
   </div>
</div>
