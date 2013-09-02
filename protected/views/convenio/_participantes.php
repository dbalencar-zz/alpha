<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participante-convenio-grid',
	'dataProvider'=>ParticipanteConvenio::model()->search($model),
	'columns'=>array(
		array(
			'name'=>'tp_PessoaParticipante',
			'filter'=>TipoPessoa::model()->listAll(),
			'value'=>'$data->pessoa->descricao',
		),
		'nm_Participante',
		'cd_CicParticipante',
		'esfera.nome',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("/participanteConvenio/view", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
