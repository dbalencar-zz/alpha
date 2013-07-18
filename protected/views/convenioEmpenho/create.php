<?php
/* @var $this ConvenioEmpenhoController */
/* @var $model ConvenioEmpenho */

$this->breadcrumbs=array(
	'Convênio '.$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio->id),
	'Empenhos'=>array('admin','convenio'=>$model->convenio->id),
	'Adicionar',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>