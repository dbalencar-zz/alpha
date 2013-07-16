<?php

class CompetenciaSingleton extends CApplicationComponent
{
	private $_id=null;
	private $_descricao=null;
	
	public function init()
	{
		$model=Competencia::model()->findByAttributes(array('aberta'=>'S'));
		if(is_null($model))
		{
			$this->_id='0';
			$this->_descricao='Nenhuma';
		}
		else
		{
			$this->_id=$model->id;
			$this->_descricao=$model->descricao;
		}
			
		parent::init();
	}
	
	public function setCompetencia($id)
	{
		$model=Competencia::model()->findByPk($id);
		if(is_null($model))
		{
			$this->_id='0';
			$this->_descricao='Nenhuma';
		}
		else
		{
			$this->_id=$model->id;
			$this->_descricao=$model->descricao;
		}
	}
	
	public function getId()
	{
		return $this->_id;
	}
	
	public function getDescricao()
	{
		return $this->_descricao;
	}
}