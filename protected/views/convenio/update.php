<?php
/* @var $this ConvenioController */
/* @var $model Convenio */

$this->breadcrumbs=array(
	'Convênios'=>array('admin'),
	$model->nu_Convenio=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>