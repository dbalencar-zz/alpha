<?php
/* @var $this ContratoEmpenhoController */
/* @var $model ContratoEmpenho */

$this->breadcrumbs=array(
	'Contrato '.$model->contrato->nu_Contrato=>array('/contrato/view','id'=>$model->contrato->id),
	'Empenhos'=>array('admin','contrato'=>$model->contrato->id),
	'Adicionar',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>