<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('admin'),
	$model->nu_Contrato,
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
	array('label'=>'Gerar REM', 'url'=>array('geraREM', 'id'=>$model->id)),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_Contrato',
		'vl_Contrato',
		'dt_AssinaturaContrato',
		'de_ObjetivoContrato',
		'nu_ProcessoLicitatorio',
		'moeda.descricao',
		'pessoa.descricao',
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
		'tipo.descricao',
	),
)); ?>
