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
	array('label'=>'Adicionar', 'url'=>array('create','item'=>$model->item_id)),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
	array('label'=>'Gerar REM', 'url'=>array('geraREM', 'id'=>$model->id)),
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
