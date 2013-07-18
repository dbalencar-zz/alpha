<?php
/* @var $this LicitacaoDotacaoController */
/* @var $model LicitacaoDotacao */

$this->breadcrumbs=array(
	'Licitação '.$model->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->licitacao->id),
	'Dotações'=>array('admin','licitacao'=>$model->licitacao->id),
	'Adicionar',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>