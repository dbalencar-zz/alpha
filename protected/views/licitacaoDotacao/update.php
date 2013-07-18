<?php
/* @var $this LicitacaoDotacaoController */
/* @var $model LicitacaoDotacao */

$this->breadcrumbs=array(
	'Licitação '.$model->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->licitacao->id),
	'Dotações'=>array('admin','licitacao'=>$model->licitacao->id),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','licitacao'=>$model->licitacao_id)),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>