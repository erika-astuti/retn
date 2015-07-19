<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" 
		href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" 
		href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" 
		href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

   <style>
   .printTable {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.printTable table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.printTable tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.printTable table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.printTable table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.printTable tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.printTable tr:hover td{
	background-color:#ffffff;
		

}
.printTable td{
	vertical-align:middle;
	
	background-color:#ffffff;

	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.printTable tr:last-child td{
	border-width:0px 1px 0px 0px;
}.printTable tr td:last-child{
	border-width:0px 0px 1px 0px;
}.printTable tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.printTable tr:first-child td{
	background:-o-linear-gradient(bottom, #cccccc 5%, #cccccc 100%);	
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #cccccc) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #cccccc 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#cccccc");	
	background: -o-linear-gradient(top,#cccccc,cccccc);

	background-color:#cccccc;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:12px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}
.printTable tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #cccccc 5%, #cccccc 100%);	
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #cccccc) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #cccccc 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#cccccc");	
	background: -o-linear-gradient(top,#cccccc,cccccc);

	background-color:#cccccc;
}
.printTable tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.printTable tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

#print-page {
	margin: 6px;
	padding-bottom: 3px;
	border-bottom: 1px solid #eeeeee;
	background-color: #f8f8f8;
}

.ln-blue {
	color: blue;
}

@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

   </style>

	<link rel="stylesheet" type="text/css" 
		href="<?php echo Yii::app()->request->baseUrl; ?>/css/fontawesome/css/font-awesome.min.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div id="print-page" class="no-print">
		<button id="window-print">Cetak</button> &nbsp;
		<button id="window-close">Tutup</button>
	</div>
   <?php echo $content; ?>
</body>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#window-print').click(function(ev) {
			ev.preventDefault();

			window.print();
		}); 
		$('#window-close').click(function(ev) {
			ev.preventDefault();
			window.close();
		}); 
	});
</script>

</html>
