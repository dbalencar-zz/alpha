<?php
/* @var $this AdesaoAtaLicitacaoController */
/* @var $model AdesaoAtaLicitacao */

$this->breadcrumbs=array(
	'Atas'=>array('admin'),
	$model->nu_Ata=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>