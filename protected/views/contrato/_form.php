<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.price_format.1.8.min.js'); ?>

<script>
$(function() {
	$('.value').priceFormat({
		limit: 15,
	    prefix: '',
	    thousandsSeparator: ''
	});
});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_Contrato'); ?>
		<?php echo $form->textField($model,'nu_Contrato',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_Contrato'); ?>
		<?php echo $form->textField($model,'vl_Contrato',array('class'=>'value')); ?>
		<?php echo $form->error($model,'vl_Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_AssinaturaContrato'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_AssinaturaContrato'
		)); ?>
		<?php echo $form->error($model,'dt_AssinaturaContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'de_ObjetivoContrato'); ?>
		<?php echo $form->textArea($model,'de_ObjetivoContrato',array('size'=>100,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'de_ObjetivoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nu_ProcessoLicitatorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_Moeda'); ?>
		<?php echo $form->dropDownList($model,'cd_Moeda',TipoMoeda::model()->listAll()); ?>
		<?php echo $form->error($model,'cd_Moeda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_PessoaContratado'); ?>
		<?php echo $form->dropDownList($model,'tp_PessoaContratado',TipoPessoa::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_PessoaContratado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CicContratado'); ?>
		<?php echo $form->textField($model,'cd_CicContratado',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'cd_CicContratado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_Contratado'); ?>
		<?php echo $form->textField($model,'nm_Contratado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nm_Contratado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_VencimentoContrato'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_VencimentoContrato'
		)); ?>
		<?php echo $form->error($model,'dt_VencimentoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_Publicacao'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_Publicacao'
		)); ?>
		<?php echo $form->error($model,'dt_Publicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_RecebeValor'); ?>
		<?php echo $form->dropDownList($model,'st_RecebeValor',$model->simNaoOptions); ?>
		<?php echo $form->error($model,'st_RecebeValor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoINSS'); ?>
		<?php echo $form->textField($model,'nu_CertidaoINSS',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_CertidaoINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoINSS'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoINSS'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeINSS'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeINSS'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFGTS'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFGTS',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_CertidaoFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFGTS'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoFGTS'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFGTS'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeFGTS'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaEstadual'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaEstadual',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaEstadual'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaEstadual'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoFazendaEstadual'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaEstadual'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaEstadual'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeFazendaEstadual'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaEstadual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaMunicipal',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaMunicipal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoFazendaMunicipal'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaMunicipal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeFazendaMunicipal'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaFederal',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaFederal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoFazendaFederal'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaFederal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeFazendaFederal'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaFederal'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoCNDT'); ?>
		<?php echo $form->textField($model,'nu_CertidaoCNDT',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_CertidaoCNDT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoCNDT'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoCNDT'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoCNDT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidaoCNDT'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeCertidaoCNDT'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidaoCNDT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'nu_CertidaoOutras',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoOutras'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoOutras'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidaoOutras'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeCertidaoOutras'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Contrato'); ?>
		<?php echo $form->dropDownList($model,'tp_Contrato',TipoContrato::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Contrato'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->