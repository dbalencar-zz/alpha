<?php

class ConvenioController extends Controller
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
				'actions'=>array('create','update','geraREM','arquivo','download','admin','delete'),
				'users'=>array('@'),
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
		$model=new Convenio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Convenio']))
		{
			$model->attributes=$_POST['Convenio'];
			$model->competencia_id=Yii::app()->user->competencia;
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

		if(isset($_POST['Convenio']))
		{
			$model->attributes=$_POST['Convenio'];
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
		if(Yii::app()->user->competencia==='0')
		{
			$this->render('competencia');
			exit;
		}
		
		$model=new Convenio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Convenio']))
			$model->attributes=$_GET['Convenio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionGeraREM()
	{
		if(isset($_POST['convenios']))
		{
			$convenios=Convenio::model()->findAllByPk($_POST['convenios']);

			$handle = fopen("convenio.rem", "w");
			$handle_participante = fopen("participanteconvenio.rem", "w");
			$handle_empenho = fopen("convenioempenho.rem", "w");
			foreach ($convenios as $c=>$convenio)
			{
				fwrite($handle, $convenio->formataREM());
				
				$participantes=$convenio->participantes;
				foreach ($participantes as $p=>$participante)
				{
					fwrite($handle_participante, $participante->formataREM());
				}
				
				$empenhos=$convenio->empenhos;
				foreach ($empenhos as $e=>$empenho)
				{
					fwrite($handle_empenho, $empenho->formataREM());
				}
			}
			fclose($handle_empenho);
			fclose($handle_participante);
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
		header('Content-Disposition: attachment; filename='.basename('convenio.rem'));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize('convenio.rem'));
		readfile('convenio.rem');
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Convenio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Convenio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Convenio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='convenio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
