<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tp_EsferaConvenio'); ?>
		<?php echo $form->dropDownList($model,'tp_EsferaConvenio',EsferaConveniado::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_PessoaParticipante'); ?>
		<?php echo $form->dropDownList($model,'tp_PessoaParticipante',TipoPessoa::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_Participante'); ?>
		<?php echo $form->textField($model,'nm_Participante',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'cd_CicParticipante'); ?>
		<?php echo $form->textField($model,'cd_CicParticipante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->