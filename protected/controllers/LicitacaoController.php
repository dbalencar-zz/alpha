<?php

class LicitacaoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $defaultAction='admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','geraREM','arquivo','download'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Licitacao;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Licitacao']))
		{
			$model->attributes=$_POST['Licitacao'];
			$model->competencia_id=Yii::app()->competencia->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Licitacao']))
		{
			$model->attributes=$_POST['Licitacao'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(Yii::app()->competencia->id==='0')
		{
			$this->render('competencia');
			exit;
		}
		
		if(Yii::app()->competencia->id==='0')
			$this->render('competencia');
		
		$model=new Licitacao('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Licitacao']))
			$model->attributes=$_GET['Licitacao'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionGeraREM()
	{
		if(isset($_POST['licitacoes']))
		{	
			$handle = fopen("licitacao.rem", "w");
			$handle_item = fopen("item.rem", "w");
			$handle_cotacao = fopen("cotacao.rem", "w");
			$handle_participante = fopen("participantelicitacao.rem", "w");
			$handle_certidao = fopen("certidao.rem", "w");

			$licitacoes=Licitacao::model()->findAllByPk($_POST['licitacoes']);
			foreach ($licitacoes as $l=>$licitacao)
			{
				fwrite($handle, $licitacao->formataREM());
				
				$itens=$licitacao->itens;
				foreach ($itens as $i=>$item)
				{
					fwrite($handle_item, $item->formataREM());
					
					$cotacoes=$item->cotacoes;					
					foreach ($cotacoes as $c1=>$cotacao)
						fwrite($handle_cotacao, $cotacao->formataREM());
				}
				
				$participantes=$licitacao->participantes;
				foreach ($participantes as $p=>$participante)
				{
					fwrite($handle_participante, $participante->formataREM());
					
					$certidoes=$participante->certidoes;					
					foreach ($certidoes as $c2=>$certidao)
						fwrite($handle_certidao, $certidao->formataREM());
				}
			}
			fclose($handle_certidao);
			fclose($handle_participante);
			fclose($handle_cotacao);
			fclose($handle_item);
			fclose($handle);
	
			exit;
		}
		else exit('fail');
	}
	
	public function actionArquivo()
	{
		$this->render('arquivo');
	}

	public function actionDownload()
	{
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename('licitacao.rem'));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize('licitacao.rem'));
		readfile('licitacao.rem');
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Licitacao the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Licitacao::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Licitacao $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='licitacao-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
