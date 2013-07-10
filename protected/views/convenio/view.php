<?php
/* @var $this ConvenioController */
/* @var $model Convenio */

$this->breadcrumbs=array(
	'Convênios'=>array('admin'),
	$model->nu_Convenio,
);

$this->menu=array(
	array('label'=>'Participantes', 'url'=>array('/participanteConvenio/admin','convenio'=>$model->id)),
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
	array('label'=>'Gerar REM', 'url'=>array('geraREM', 'id'=>$model->id)),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'esfera.descricao',
		'recebeValorText',
		'nu_Convenio',
		'vl_Convenio',
		'moeda.descricao',
		'dt_AssinaturaConvenio',
		'de_ObjetivoConvenio',
		'dt_VencimentoConvenio',
		'nu_LeiAutorizativa',
		'dt_LeiAutorizativa',
		'nu_DiarioOficial',
		'dt_PublicacaoConvenio',
		'tipo.descricao',
	),
)); ?>

<?php $this->widget('zii.widgets.jui.CJuiAccordion',array(
	'panels'=>array(
		'Participantes'=>$this->renderPartial('_participantes',array('model'=>$model),true),
	),
	'options'=>array(
		'animated'=>'bounceslide',
	),
)); ?>