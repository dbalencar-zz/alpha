<?php
/* @var $this PublicacaoController */
/* @var $model Publicacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dt_PublicacaoEdital'); ?>
		<?php echo $form->textField($model,'dt_PublicacaoEdital'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_VeiculoComunicacao'); ?>
		<?php echo $form->textField($model,'nm_VeiculoComunicacao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->