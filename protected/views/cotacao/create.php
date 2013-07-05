<?php
/* @var $this CotacaoController */
/* @var $model Cotacao */

$this->breadcrumbs=array(
	'Licitação '.$model->item->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->item->licitacao_id),
	'Item '.$model->item->nu_SequencialItem=>array('/item/view','id'=>$model->item_id),
	'Cotações'=>array('/cotacao/admin','item'=>$model->item_id),
	'Adicionar'
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>