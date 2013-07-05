<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Certidaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Certidao', 'url'=>array('index')),
	array('label'=>'Create Certidao', 'url'=>array('create')),
	array('label'=>'View Certidao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Certidao', 'url'=>array('admin')),
);
?>

<h1>Update Certidao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>