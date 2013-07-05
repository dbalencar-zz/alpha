<?php
/* @var $this CotacaoController */
/* @var $model Cotacao */

$this->breadcrumbs=array(
	'Cotacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cotacao', 'url'=>array('index')),
	array('label'=>'Create Cotacao', 'url'=>array('create')),
	array('label'=>'View Cotacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cotacao', 'url'=>array('admin')),
);
?>

<h1>Update Cotacao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>