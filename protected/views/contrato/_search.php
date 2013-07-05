<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_Contrato'); ?>
		<?php echo $form->textField($model,'nu_Contrato',array('size'=>16,'maxlength'=>16)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'de_ObjetivoContrato'); ?>
		<?php echo $form->textField($model,'de_ObjetivoContrato',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'vl_Contrato'); ?>
		<?php echo $form->textField($model,'vl_Contrato'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'dt_Publicacao'); ?>
		<?php echo $form->textField($model,'dt_Publicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_AssinaturaContrato'); ?>
		<?php echo $form->textField($model,'dt_AssinaturaContrato'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_Moeda'); ?>
		<?php echo $form->dropDownList($model, 'cd_Moeda', TipoMoeda::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_PessoaContratado'); ?>
		<?php echo $form->dropDownList($model,'tp_PessoaContratado',TipoPessoa::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_CicContratado'); ?>
		<?php echo $form->textField($model,'cd_CicContratado',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_Contratado'); ?>
		<?php echo $form->textField($model,'nm_Contratado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_VencimentoContrato'); ?>
		<?php echo $form->textField($model,'dt_VencimentoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_RecebeValor'); ?>
		<?php echo $form->dropDownList($model,'st_RecebeValor',$model->simNaoOptions,array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoINSS'); ?>
		<?php echo $form->textField($model,'nu_CertidaoINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoINSS'); ?>
		<?php echo $form->textField($model,'dt_CertidaoINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeINSS'); ?>
		<?php echo $form->textField($model,'dt_ValidadeINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoFGTS'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoFGTS'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeFGTS'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoFazendaEstadual'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaEstadual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'dt_CertidaoFazendaEstadual'); ?>
		<?php echo $form->textField($model, 'dt_CertidaoFazendaEstadual'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model, 'dt_ValidadeFazendaEstadual'); ?>
		<?php echo $form->textField($model, 'dt_ValidadeFazendaEstadual'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeFazendaFederal'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'nu_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'dt_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeCertidaoOutras'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_Contrato'); ?>
		<?php echo $form->dropDownList($model,'tp_Contrato', TipoContrato::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->