<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Certidaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Certidao', 'url'=>array('index')),
	array('label'=>'Manage Certidao', 'url'=>array('admin')),
);
?>

<h1>Create Certidao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>