<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-grid',
	'dataProvider'=>Item::model()->search($model),
	'columns'=>array(
		'nu_SequencialItem',
		'de_ItemLicitacao',
		'qt_ItemLicitado',
		'dt_HomologacaoItem',
		'dt_PublicacaoHomologacao',		
		'cd_ItemLote',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/item/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
