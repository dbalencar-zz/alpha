<?php
/* @var $this CompetenciaController */

$this->breadcrumbs=array(
	'Competências',
);
?>

<script>
function abrir() {
	if(!confirm("Deseja realmente ABRIR este Competência? Qualquer outra Competência será automaticamente FECHADA!")) return false;
}
function fechar() {
	if(!confirm("Deseja realmente FECHAR este Competência?")) return false;
}
</script>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'competencia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'descricao',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
			'buttons'=>array(
				'update'=>array(
					'label'=>'Abrir',
					'click'=>'abrir',
					'url'=>'Yii::app()->createUrl("competencia/abrir", array("id"=>$data->id))',
             		'options'=>array(
             			'onClick'=>'if(confirm("Deseja realmente ABRIR este Competência? Qualquer outra Competência ABERTA será automaticamente FECHADA!")) return false;',
             			'ajax'=>array(
             				'type'=>'get',
             				'url'=>'js:$(this).attr("href")',
             				'success'=>'js:function(data) { $.fn.yiiGridView.update("competencia-grid")}'
             			)
             		),
					'visible'=>'$data->aberta=="N"',
				),
				'delete'=>array(
					'label'=>'Fechar',
					'click'=>'fechar',
					'url'=>'Yii::app()->createUrl("competencia/fechar", array("id"=>$data->id))',
             		'options'=>array(
             			'onClick'=>'if(confirm("Deseja realmente FECHAR este Competência?")) return false;',
             				'ajax'=>array(
             				'type'=>'get',
             				'url'=>'js:$(this).attr("href")',
             				'success'=>'js:function(data) { $.fn.yiiGridView.update("competencia-grid")}'
             			)
             		),
					'visible'=>'$data->aberta=="S"',
				),
			),
		),
	),
)); ?>
