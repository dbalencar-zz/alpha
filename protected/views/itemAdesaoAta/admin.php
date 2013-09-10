<?php
/* @var $this ItemAdesaoAtaController */
/* @var $model ItemAdesaoAta */

$this->breadcrumbs=array(
	'Atas'=>array('/adesaoAtaLicitacao'),
	$model->ata->nu_Ata=>array('/adesaoAtaLicitacao/view','id'=>$model->ata->id),
	'Itens',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','ata'=>$model->ata->id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#item-adesao-ata-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar</h1>

<p>
Você pode opcionalmente usar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no início de cada um de seus valores para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-grid',
	'dataProvider'=>$model->search($model->ata),
	'filter'=>$model,
	'columns'=>array(
		'sq_Item',
		'de_Item',
		'qt_Item',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
