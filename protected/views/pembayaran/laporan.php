<?php

$this->breadcrumbs=array(
    'Pembayaran'=>array('index'),
    'Laporan',
);

$this->menu=array(
    array('label'=>'Daftar Pembayaran', 'url'=>array('index')),
    array('label'=>'Buat Pembayaran', 'url'=>array('create')),
    array('label'=>'Laporan Pembayaran', 'url'=>array('laporan')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#proyek-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1>Laporan Pembayaran</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'proyek-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        // 'id_proyek',
        'tanggal_proyek',
        'no_po',
        'nama_proyek',
        array(
            'name'=>'id_pelanggan',
            'header'=>'Nama Pelanggan',
            'value'=>function($data) {
                return $data->pelanggan->nama_pelanggan;
            }   
        ),
        array(
            'header'=>'Kas (Debet)',
            'htmlOptions'=>array(
                'style'=>'text-align: right;'
            ),
            'value'=>function($data) {
                return 'Rp '.number_format($data->getKas());
            }
        ),
        array(
            'header'=>'Piutang (Kredit)',
            'htmlOptions'=>array(
                'style'=>'text-align: right;'
            ),
            'value'=>function($data) {
                return 'Rp '.number_format($data->getPiutang());
            }
        )
        /*
        'biaya_proyek',
        */
    ),
)); ?>
