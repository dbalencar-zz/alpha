<?php
/* @var $this ConvenioEmpenhoController */
/* @var $model ConvenioEmpenho */

$this->breadcrumbs=array(
	'Convênio '.$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio_id),
	'Empenhos'=>array('admin','convenio'=>$model->convenio_id),
	$model->nu_NotaEmpenho=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','convenio'=>$model->convenio_id)),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>