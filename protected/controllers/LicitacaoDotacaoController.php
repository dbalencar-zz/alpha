<?php

class LicitacaoDotacaoController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','download'),
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
	public function actionCreate($licitacao)
	{
		$model=new LicitacaoDotacao;
		$model->licitacao=Licitacao::model()->findByPk($licitacao);
		$model->licitacao_id=$model->licitacao->id;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['LicitacaoDotacao']))
		{
			$model->attributes=$_POST['LicitacaoDotacao'];
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

		if(isset($_POST['LicitacaoDotacao']))
		{
			$model->attributes=$_POST['LicitacaoDotacao'];
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
		$dotacao=$this->loadModel($id);
		$licitacao=$dotacao->licitacao_id;
		$dotacao->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin','licitacao'=>$licitacao));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($licitacao)
	{
		$model=new LicitacaoDotacao('search');
		$model->unsetAttributes();  // clear any default values
		$model->licitacao=Licitacao::model()->findByPk($licitacao);
		if(isset($_GET['LicitacaoDotacao']))
			$model->attributes=$_GET['LicitacaoDotacao'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDownload()
	{
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename('licitacaodotacao.rem'));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize('licitacaodotacao.rem'));
		readfile('licitacaodotacao.rem');
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return LicitacaoDotacao the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=LicitacaoDotacao::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param LicitacaoDotacao $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='licitacao-dotacao-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}