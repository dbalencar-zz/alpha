<?php
/* @var $this LicitacaoController */
/* @var $model Licitacao */

$this->breadcrumbs=array(
	'Licitações'=>array('admin'),
	'Adicionar',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>