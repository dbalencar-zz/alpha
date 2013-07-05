<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_CicParticipante'); ?>
		<?php echo $form->textField($model,'cd_CicParticipante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_Pessoa'); ?>
		<?php echo $form->textField($model,'tp_Pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_Participante'); ?>
		<?php echo $form->textField($model,'nm_Participante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_Participacao'); ?>
		<?php echo $form->textField($model,'tp_Participacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_CGCConsorcio'); ?>
		<?php echo $form->textField($model,'cd_CGCConsorcio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->