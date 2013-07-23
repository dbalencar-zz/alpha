<?php

class UsuarioWeb extends CWebUser
{
	private $_model;
	
	public function getCompetencia()
	{
		$user = $this->loadModel(Yii::app()->user->id);
		return $user->competencia_id;
	}
	
	public function getCompetenciaText()
	{
		$user = $this->loadModel(Yii::app()->user->id);
		return $user->competencia->descricao;
	}
	
	public function getUID()
	{
		$user = $this->loadModel(Yii::app()->user->id);
		return $user->id;
	}
	
	protected function loadModel($id=null)
	{
		if($this->_model===null)
		{
			if($id!==null)
				$this->_model=Usuario::model()->findByAttributes(array('login'=>$id));
		}
		
		return $this->_model;
	} 
}