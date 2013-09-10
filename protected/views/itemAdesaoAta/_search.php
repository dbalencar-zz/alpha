<?php
/* @var $this ItemAdesaoAtaController */
/* @var $model ItemAdesaoAta */
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
		<?php echo $form->label($model,'adesao_ata_licitacao_id'); ?>
		<?php echo $form->textField($model,'adesao_ata_licitacao_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qt_Item'); ?>
		<?php echo $form->textField($model,'qt_Item',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sq_Item'); ?>
		<?php echo $form->textField($model,'sq_Item'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vl_Item'); ?>
		<?php echo $form->textField($model,'vl_Item',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'un_Medida'); ?>
		<?php echo $form->textField($model,'un_Medida',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'de_Item'); ?>
		<?php echo $form->textField($model,'de_Item',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->