<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cotacao-grid',
	'dataProvider'=>Cotacao::model()->search($model),
	'columns'=>array(
		'cd_CicParticipante',
		array(
			'name'=>'tp_Valor',
			'filter'=>Cotacao::model()->tipoValorOptions(),
			'value'=>'$data->tipoValorText',
		),
		'vl_TotalCotadoItem',
		array(
			'name'=>'cd_VencedorPerdedor',
			'filter'=>Cotacao::model()->vencedorPerdedorOptions(),
			'value'=>'$data->vencedorPerdedorText',
		),
		'qt_ItemCotado',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/cotacao/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
