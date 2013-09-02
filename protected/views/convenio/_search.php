<?php
/* @var $this ConvenioController */
/* @var $model Convenio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_Convenio'); ?>
		<?php echo $form->textField($model,'nu_Convenio',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'de_ObjetivoConvenio'); ?>
		<?php echo $form->textArea($model,'de_ObjetivoConvenio',array('size'=>100,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vl_Convenio'); ?>
		<?php echo $form->textField($model,'vl_Convenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_PublicacaoConvenio'); ?>
		<?php echo $form->textField($model,'dt_PublicacaoConvenio'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'dt_VencimentoConvenio'); ?>
		<?php echo $form->textField($model,'dt_VencimentoConvenio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->