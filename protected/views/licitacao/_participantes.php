<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participante-licitacao-grid',
	'dataProvider'=>ParticipanteLicitacao::model()->search($model),
	'columns'=>array(
		'cd_CicParticipante',
		'nm_Participante',
		array(
			'name'=>'tp_Pessoa',
			'filter'=>TipoPessoa::model()->listAll(),
			'value'=>'$data->pessoa->descricao',
		),
		array(
			'name'=>'tp_Participacao',
			'filter'=>TipoParticipante::model()->listAll(),
			'value'=>'$data->participacao->descricao',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/participanteLicitacao/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
