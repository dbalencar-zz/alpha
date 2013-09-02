<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'empenho-convenio-grid',
	'dataProvider'=>ConvenioEmpenho::model()->search($model),
	'columns'=>array(
		'nu_NotaEmpenho',
		'ano_Empenho',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/convenioEmpenho/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
