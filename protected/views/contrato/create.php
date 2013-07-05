<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('admin'),
	'Adicionar',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>