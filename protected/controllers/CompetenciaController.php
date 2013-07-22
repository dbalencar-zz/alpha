<?php

class CompetenciaController extends Controller
{
	public $defaultAction='admin';
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','abrir','fechar'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionAdmin()
	{
		$model=new Competencia('search');
		if(isset($_GET['Competencia']))
			$model->attributes=$_GET['Competencia'];
		
		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionAbrir($id)
	{
		$model=Usuario::model()->findByAttributes(array('login'=>Yii::app()->user->id));
		$model->competencia_id = $id;
		$model->save(); 
		
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	
	public function actionFechar()
	{
		$model=Usuario::model()->findByAttributes(array('login'=>Yii::app()->user->id));
		$model->competencia_id = 0;
		$model->save();
		
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function loadModel($id)
	{
		$model=Competencia::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}