<?php
/* @var $this ItemAdesaoAtaController */
/* @var $model ItemAdesaoAta */

$this->breadcrumbs=array(
	'Ata '.$model->ata->nu_Ata=>array('/adesaoAtaLicitacao/view','id'=>$model->adesao_ata_licitacao_id),
	'Itens'=>array('admin','ata'=>$model->adesao_ata_licitacao_id),
	$model->sq_Item=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','ata'=>$model->adesao_ata_licitacao_id)),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>