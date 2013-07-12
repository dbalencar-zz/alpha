<?php
/* @var $this CotacaoController */
/* @var $model Cotacao */

$this->breadcrumbs=array(
	'Licitação '.$model->item->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->item->licitacao_id),
	'Item '.$model->item->nu_SequencialItem=>array('/item/view','id'=>$model->item_id),
	'Cotações'=>array('admin','item'=>$model->item_id),
	$model->cd_CicParticipante=>array('view','id'=>$model->id),
	'Editar'
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','item'=>$model->item_id)),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>