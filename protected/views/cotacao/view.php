<?php
/* @var $this CotacaoController */
/* @var $model Cotacao */

$this->breadcrumbs=array(
	'Licitação '.$model->item->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->item->licitacao_id),
	'Item '.$model->item->nu_SequencialItem=>array('/item/view','id'=>$model->item_id),
	'Cotações'=>array('/cotacao/admin','item'=>$model->item_id),
	$model->cd_CicParticipante
);

$this->menu=array(
	array('label'=>'List Cotacao', 'url'=>array('index')),
	array('label'=>'Create Cotacao', 'url'=>array('create')),
	array('label'=>'Update Cotacao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cotacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cotacao', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipoValorText',
		'pessoa.descricao',
		'vl_TotalCotadoItem',
		'vencedorPerdedorText',
		'qt_ItemCotado',
		'dd_ItemLote',
	),
)); ?>
