<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'certidao-grid',
	'dataProvider'=>Certidao::model()->search($model),
	'columns'=>array(
		'nu_Certidao',
		array(
			'name'=>'tp_Certidao',
			'filter'=>TipoCertidao::model()->listAll(),
			'value'=>'$data->tipo->descricao',
		),
		'dt_EmissaoCertidao',
		'dt_ValidadeCertidao',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/certidao/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
