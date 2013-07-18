<?php
/* @var $this ContratoEmpenhoController */
/* @var $model ContratoEmpenho */

$this->breadcrumbs=array(
	'Contrato '.$model->contrato->nu_Contrato=>array('/contrato/view','id'=>$model->contrato_id),
	'Empenhos'=>array('admin','contrato'=>$model->contrato_id),
	$model->nu_NotaEmpenho,
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','contrato'=>$model->contrato_id)),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_NotaEmpenho',
		'ano_Empenho',
		'cd_UnidadeOrcamentaria',
	),
)); ?>
