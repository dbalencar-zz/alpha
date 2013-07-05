<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Licitação '.$model->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->licitacao->id),
	'Itens'=>array('admin','licitacao'=>$model->licitacao->id),
	'Adicionar',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>