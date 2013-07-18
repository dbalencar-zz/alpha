<?php
/* @var $this ContratoEmpenhoController */
/* @var $model ContratoEmpenho */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_NotaEmpenho'); ?>
		<?php echo $form->textField($model,'nu_NotaEmpenho',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano_Empenho'); ?>
		<?php echo $form->textField($model,'ano_Empenho'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_UnidadeOrcamentaria'); ?>
		<?php echo $form->textField($model,'cd_UnidadeOrcamentaria',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->