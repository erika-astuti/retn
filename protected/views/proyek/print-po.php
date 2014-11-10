
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
               <font style="font-weight: bold;font-size:15px;">PURCHASE ORDER</font>
               <br />
               <?php echo $pelanggan->nama_pelanggan; ?> <br />
               <?php echo $pelanggan->nama_institusi_pelanggan; ?> <br />
               <?php echo $pelanggan->alamat_pelanggan ?> <br />
               
            </td>
            <td>
                  PO No: <?php echo $proyek->no_po; ?> <br />
                  Tanggal: <?php echo date('d M Y', strtotime($proyek->tanggal_proyek)); ?>
            </td>
         </tr>
      </table>
   </div>

   <!-- <div class="clear">&nbsp;</div> -->
   <div class="span-16">
    <div class="printTable">
      <table>
         <tr>
            <td>No</td>
            <td>Keterangan</td>
            <td>Jumlah</td>
            <td>Harga Unit (IDR)</td>
            <td>Jumlah (IDR)</td>
         </tr>
         <tr>
            <td rowspan="2">1</td>
            <td rowspan="2"><?php echo $proyek->nama_proyek; ?></td>
            <td rowspan="2">1</td>
            <td rowspan="2" style="text-align: right;"><?php echo number_format($proyek->biaya_proyek); ?></td>
            <td style="text-align: right;"> 
               <?php echo number_format($proyek->biaya_proyek); ?>
            </td>
         </tr>
         <tr>
            <td style="text-align: right;">0</td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td>Quotation No. <?php echo $proyek->no_piutang; ?> </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td><b>Total Biaya Pesanan</b> </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align: right;">
               <?php echo number_format($proyek->biaya_proyek); ?>
            </td>
         </tr>
      </table>
    </div>
   </div>
   <div class="clear">&nbsp;</div>
   <div style="padding-left:5%;">
      <table style="width: 450px; font-size: 10px; margin: 0px; padding:0px;">
         <tr>
            <td>Terbilang: </td>
            <td>
               <?php 
                  $f = new NumberFormatter('id', NumberFormatter::SPELLOUT);
                  echo $f->format($proyek->biaya_proyek).' rupiah';
               ?>
            </td>
         </tr>
         <tr>
            <td>Pembayaran: </td>
            <td>40% saat PO/Kontrak ditandatangani <br />
               60% saat pesanan diterima
            </td>
         </tr>
         <tr>
            <td>Pembayaran an: </td>
            <td>
               Rimbar Diorisma
            </td>
         </tr>
         <tr>
            <td>Bank/No. Rekening: </td>
            <td>
               BCA/037.26.424.73
            </td>
         </tr>
<!--          <tr>
            <td>Tanggal Pengiriman: </td>
            <td>
               <?php echo date('d M Y'); ?>
            </td>
         </tr>
 -->         <tr>
            <td>Alamat Pengiriman: </td>
            <td>
               sda
            </td>
         </tr>
      </table>
   </div>
   <div class="span-16">
      <div style="padding-left:65%; margin-top: 7px;"> 
         <center>Yogyakarta,  <?php echo date('d M Y'); ?></center>
         <center>Disetujui:</center>
         <br /><br />
         <center><?php echo $pelanggan->nama_pelanggan; ?> 
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;
         Rimbar Diorisma</center>
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
