<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */

$this->breadcrumbs=array(
	'Convênios'=>array('/convenio'),
	$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio_id),
	'Participantes'=>array('admin','convenio'=>$model->convenio_id),
	$model->nm_Participante,
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
		'cd_CicParticipante',
		'pessoa.descricao',
		'nm_Participante',
		'vl_Participacao',
		'vl_PercentualParticipacao',
		'nu_CertidaoCASAN',
		'dt_CertidaoCASAN',
		'dt_ValidadeCertidaoCASAN',
		'nu_CertidaoCELESC',
		'dt_CertidaoCELESC',
		'dt_ValidadeCertidaoCELESC',
		'nu_CertidaoIPESC',
		'dt_CertidaoIPESC',
		'dt_ValidadeCertidaoIPESC',
		'nu_CertidaoFazendaMunicipal',
		'dt_CertidaoFazendaMunicipal',
		'dt_ValidadeFazendaMunicipal',
		'nu_CertidaoFazendaFederal',
		'dt_CertidaoFazendaFederal',
		'dt_ValidadeFazendaFederal',
		'nu_CertidaoOutras',
		'dt_CertidaoOutras',
		'dt_ValidadeCertidaoOutras',
	),
)); ?>
