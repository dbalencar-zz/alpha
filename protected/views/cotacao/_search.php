<?php
/* @var $this CotacaoController */
/* @var $model Cotacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tp_Valor'); ?>
		<?php echo $form->textField($model,'tp_Valor',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_Pessoa'); ?>
		<?php echo $form->textField($model,'tp_Pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_CicParticipante'); ?>
		<?php echo $form->textField($model,'cd_CicParticipante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vl_TotalCotadoItem'); ?>
		<?php echo $form->textField($model,'vl_TotalCotadoItem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_VencedorPerdedor'); ?>
		<?php echo $form->textField($model,'cd_VencedorPerdedor',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qt_ItemCotado'); ?>
		<?php echo $form->textField($model,'qt_ItemCotado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->