<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'licitacao-dotacao-grid',
	'dataProvider'=>LicitacaoDotacao::model()->search($model),
	'columns'=>array(
		'cd_CategoriaEconomica',
		'cd_GrupoNatureza',
		'cd_ModalidadeAplicacao',
		'cd_Elemento',
		'cd_UnidadeOrcamentaria',
		'cd_FonteRecurso',
		'nu_AcaoGoverno',
		'cd_SubFuncao',
		'cd_Funcao',
		'cd_Programa',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/licitacaoDotacao/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
