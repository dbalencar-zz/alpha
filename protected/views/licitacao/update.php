<?php
/* @var $this LicitacaoController */
/* @var $model Licitacao */

$this->breadcrumbs=array(
	'Licitações'=>array('admin'),
	$model->nu_ProcessoLicitatorio=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Exibir', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>