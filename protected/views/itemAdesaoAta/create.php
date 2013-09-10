<?php
/* @var $this ItemAdesaoAtaController */
/* @var $model ItemAdesaoAta */

$this->breadcrumbs=array(
	'Ata '.$model->ata->nu_Ata=>array('/adesaoAtaLicitacao/view','id'=>$model->ata->id),
	'Itens'=>array('admin','ata'=>$model->ata->id),
	'Adicionar',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>