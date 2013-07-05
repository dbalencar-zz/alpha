<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_SequencialItem'); ?>
		<?php echo $form->textField($model,'nu_SequencialItem',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'de_ItemLicitacao'); ?>
		<?php echo $form->textField($model,'de_ItemLicitacao',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qt_ItemLicitado'); ?>
		<?php echo $form->textField($model,'qt_ItemLicitado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_HomologacaoItem'); ?>
		<?php echo $form->textField($model,'dt_HomologacaoItem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_PublicacaoHomologacao'); ?>
		<?php echo $form->textField($model,'dt_PublicacaoHomologacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_ItemLote'); ?>
		<?php echo $form->textField($model,'cd_ItemLote',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->