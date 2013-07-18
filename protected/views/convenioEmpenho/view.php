<?php
/* @var $this ConvenioEmpenhoController */
/* @var $model ConvenioEmpenho */

$this->breadcrumbs=array(
	'Convênio '.$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio_id),
	'Empenhos'=>array('admin','convenio'=>$model->convenio_id),
	$model->nu_NotaEmpenho,
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','convenio'=>$model->convenio_id)),
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
