<?php
/* @var $this PublicacaoController */
/* @var $model Publicacao */

$this->breadcrumbs=array(
	'Licitação '.$model->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->licitacao->id),
	'Publicações'=>array('admin','licitacao'=>$model->licitacao->id),
	'Adicionar',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>