<?php

/**
 * This is the model class for table "Cotacao".
 *
 * The followings are the available columns in table 'Cotacao':
 * @property string $id
 * @property string $tp_Valor
 * @property string $nu_ProcessoLicitatorio
 * @property integer $tp_Pessoa
 * @property integer $cd_CicParticipante
 * @property string $nu_SequencialItem
 * @property double $vl_TotalCotadoItem
 * @property string $cd_VencedorPerdedor
 * @property integer $qt_ItemCotado
 * @property string $dd_ItemLote
 */
class Cotacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cotacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cotacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tp_Valor, tp_Pessoa, cd_CicParticipante, vl_TotalCotadoItem, cd_VencedorPerdedor, qt_ItemCotado, dd_ItemLote', 'required'),
			array('tp_Pessoa, cd_CicParticipante, qt_ItemCotado', 'numerical', 'integerOnly'=>true),
			array('vl_TotalCotadoItem', 'numerical'),
			array('tp_Valor, cd_VencedorPerdedor', 'length', 'max'=>1),
			array('dd_ItemLote', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tp_Valor, nu_ProcessoLicitatorio, tp_Pessoa, cd_CicParticipante, nu_SequencialItem, vl_TotalCotadoItem, cd_VencedorPerdedor, qt_ItemCotado, dd_ItemLote', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'item'=>array(self::BELONGS_TO,'Item','item_id'),
			'pessoa'=>array(self::BELONGS_TO,'TipoPessoa','tp_Pessoa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tp_Valor' => 'Tipo Valor',
			'tipoValorText' => 'Tipo Valor',
			'nu_ProcessoLicitatorio' => 'Nu Processo Licitatorio',
			'tp_Pessoa' => 'Tipo Pessoa',
			'pessoa.descricao' => 'Tipo Pessoa',
			'cd_CicParticipante' => 'CPF/CNPJ',
			'vl_TotalCotadoItem' => 'Valor Cotado',
			'cd_VencedorPerdedor' => 'Vencedor',
			'vencedorPerdedorText' => 'Vencedor',
			'qt_ItemCotado' => 'Qt Oferecido',
			'dd_ItemLote' => 'Item/Lote',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($item)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('item_id',$item->id);
		$criteria->compare('tp_Valor',$this->tp_Valor,true);
		$criteria->compare('tp_Pessoa',$this->tp_Pessoa);
		$criteria->compare('cd_CicParticipante',$this->cd_CicParticipante);
		$criteria->compare('vl_TotalCotadoItem',$this->vl_TotalCotadoItem);
		$criteria->compare('cd_VencedorPerdedor',$this->cd_VencedorPerdedor,true);
		$criteria->compare('qt_ItemCotado',$this->qt_ItemCotado);
		$criteria->compare('dd_ItemLote',$this->dd_ItemLote,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function formataREM()
	{
		$formatado=$this->tp_Valor;
		$formatado.=str_pad($this->item->licitacao->nu_ProcessoLicitatorio, 16, chr(32), STR_PAD_RIGHT);
		$formatado.=$this->tp_Pessoa;
		$formatado.=str_pad($this->cd_CicParticipante, 14, '0', STR_PAD_LEFT);
		$formatado.=str_pad($this->item->nu_SequencialItem, 5, '0', STR_PAD_LEFT);
		$formatado.=str_pad($this->formataValor($this->vl_TotalCotadoItem), 16, '0', STR_PAD_LEFT);
		$formatado.=$this->cd_VencedorPerdedor;
		$formatado.=str_pad($this->qt_ItemCotado, 16, '0', STR_PAD_LEFT);
		$formatado.=str_pad($this->dd_ItemLote, 10, chr(32), STR_PAD_RIGHT);
		$formatado.=chr(13).chr(10);
	
		//iconv(mb_detect_encoding($formatado, mb_detect_order(), true), "UTF-8", $formatado);
	
		return $formatado;
	}
	
	public function tipoValorOptions()
	{
		return array(
			'E'=>'Espécie',
			'P'=>'Percentual',
		);
	}
	
	public function getTipoValorText()
	{
		$options=$this->tipoValorOptions();
		return $options[$this->tp_Valor];
	}
	
	public function vencedorPerdedorOptions()
	{
		return array(
				'V'=>'Vencedor',
				'P'=>'Perdedor',
		);
	}
	
	public function getVencedorPerdedorText()
	{
		$options=$this->vencedorPerdedorOptions();
		return $options[$this->cd_VencedorPerdedor];
	}
	
	private function formataValor($valor)
	{
		return str_replace('.', ',', $valor);
	}
	
	public function beforeSave()
	{
		if($this->isNewRecord)
		{
			$this->created_by=Yii::app()->user->UID;
			$this->created_at=new CDbExpression('NOW()');
		}
		else
		{
			$this->updated_by=Yii::app()->user->UID;
			$this->updated_at=new CDbExpression('NOW()');
		}
	}
}