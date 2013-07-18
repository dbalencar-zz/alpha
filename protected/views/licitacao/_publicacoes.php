<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'publicacao-grid',
	'dataProvider'=>Publicacao::model()->search($model),
	'columns'=>array(
		'dt_PublicacaoEdital',
		'nu_SequencialPublicacao',
		'nm_VeiculoComunicacao',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/publicacao/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
