<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-grid',
	'dataProvider'=>ItemAdesaoAta::model()->search($model),
	'columns'=>array(
		'sq_Item',
		'de_Item',
		'qt_Item',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/itemAdesaoAta/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>