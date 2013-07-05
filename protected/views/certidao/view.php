<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Certidaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Certidao', 'url'=>array('index')),
	array('label'=>'Create Certidao', 'url'=>array('create')),
	array('label'=>'Update Certidao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Certidao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Certidao', 'url'=>array('admin')),
);
?>

<h1>View Certidao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nu_ProcessoLicitatorio',
		'cd_CicParticipante',
		'tp_Certidao',
		'tp_Pessoa',
		'nu_Certidao',
		'dt_EmissaoCertidao',
		'dt_ValidadeCertidao',
	),
)); ?>
