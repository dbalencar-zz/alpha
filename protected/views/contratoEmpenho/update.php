<?php
/* @var $this ContratoEmpenhoController */
/* @var $model ContratoEmpenho */

$this->breadcrumbs=array(
	'Contrato '.$model->contrato->nu_Contrato=>array('/contrato/view','id'=>$model->contrato->id),
	'Empenhos'=>array('admin','contrato'=>$model->contrato->id),
	$model->nu_NotaEmpenho=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','contrato'=>$model->contrato_id)),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>