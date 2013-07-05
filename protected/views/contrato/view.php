<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contrato', 'url'=>array('index')),
	array('label'=>'Create Contrato', 'url'=>array('create')),
	array('label'=>'Update Contrato', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contrato', 'url'=>array('admin')),
	array('label'=>'Gerar REM', 'url'=>array('geraREM', 'id'=>$model->id)),
);
?>

<h1>View Contrato #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nu_Contrato',
		'vl_Contrato',
		'dt_AssinaturaContrato',
		'de_ObjetivoContrato',
		'nu_ProcessoLicitatorio',
		'cd_Moeda',
		'tp_PessoaContratado',
		'cd_CicContratado',
		'nm_Contratado',
		'dt_VencimentoContrato',
		'nu_DiarioOficial',
		'dt_Publicacao',
		'st_RecebeValor',
		'nu_CertidaoINSS',
		'dt_CertidaoINSS',
		'dt_ValidadeINSS',
		'nu_CertidaoFGTS',
		'dt_CertidaoFGTS',
		'dt_ValidadeFGTS',
		'nu_CertidaoFazendaEstadual',
		'dt_CertidaoFazendaEstadual',
		'dt_ValidadeFazendaEstadual',
		'nu_CertidaoFazendaMunicipal',
		'dt_CertidaoFazendaMunicipal',
		'dt_ValidadeFazendaMunicipal',
		'nu_CertidaoFazendaFederal',
		'dt_CertidaoFazendaFederal',
		'dt_ValidadeFazendaFederal',
		'nu_CertidaoOutras',
		'dt_CertidaoOutras',
		'dt_ValidadeCertidaoOutras',
		'tp_Contrato',
	),
)); ?>
