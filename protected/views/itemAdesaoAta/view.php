<?php
/* @var $this ItemAdesaoAtaController */
/* @var $model ItemAdesaoAta */

$this->breadcrumbs=array(
	'Ata '.$model->ata->nu_Ata=>array('/adesaoAtaLicitacao/view','id'=>$model->adesao_ata_licitacao_id),
	'Itens'=>array('admin','ata'=>$model->adesao_ata_licitacao_id),
	$model->sq_Item,
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','ata'=>$model->adesao_ata_licitacao_id)),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sq_Item',		
		'de_Item',
		'qt_Item',		
		'un_Medida',
		'vl_Item',
	),
)); ?>
