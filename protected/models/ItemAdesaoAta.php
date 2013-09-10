<?php

/**
 * This is the model class for table "item_adesao_ata".
 *
 * The followings are the available columns in table 'item_adesao_ata':
 * @property string $id
 * @property string $adesao_ata_licitacao_id
 * @property string $qt_Item
 * @property integer $sq_Item
 * @property string $vl_Item
 * @property string $un_Medida
 * @property string $de_Item
 *
 * The followings are the available model relations:
 * @property AdesaoAtaLicitacao $adesaoAtaLicitacao
 */
class ItemAdesaoAta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item_adesao_ata';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adesao_ata_licitacao_id, qt_Item, vl_Item, un_Medida, de_Item', 'required'),
			array('sq_Item', 'numerical', 'integerOnly'=>true),
			array('adesao_ata_licitacao_id', 'length', 'max'=>10),
			array('qt_Item, vl_Item', 'length', 'max'=>15),
			array('un_Medida', 'length', 'max'=>30),
			array('de_Item', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, adesao_ata_licitacao_id, qt_Item, sq_Item, vl_Item, un_Medida, de_Item', 'safe', 'on'=>'search'),
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
			'ata' => array(self::BELONGS_TO, 'AdesaoAtaLicitacao', 'adesao_ata_licitacao_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'qt_Item' => 'Quantidade',
			'sq_Item' => 'Sequencial',
			'vl_Item' => 'Vl. Item',
			'un_Medida' => 'Un. Medida',
			'de_Item' => 'Descrição',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('adesao_ata_licitacao_id',$this->adesao_ata_licitacao_id,true);
		$criteria->compare('qt_Item',$this->qt_Item,true);
		$criteria->compare('sq_Item',$this->sq_Item);
		$criteria->compare('vl_Item',$this->vl_Item,true);
		$criteria->compare('un_Medida',$this->un_Medida,true);
		$criteria->compare('de_Item',$this->de_Item,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	private function mb_str_pad($ps_input, $pn_pad_length, $ps_pad_string = " ", $pn_pad_type = STR_PAD_RIGHT, $ps_encoding = NULL)
	{
		mb_internal_encoding ( 'utf-8' );
		$ret = "";
	
		if (is_null ( $ps_encoding ))
			$ps_encoding = mb_internal_encoding ();
	
		$hn_length_of_padding = $pn_pad_length - mb_strlen ( $ps_input, $ps_encoding );
		$hn_psLength = mb_strlen ( $ps_pad_string, $ps_encoding ); // pad string length
	
		if ($hn_psLength <= 0 || $hn_length_of_padding <= 0)
		{
			// Padding string equal to 0:
			//
			$ret = $ps_input;
		}
		else
		{
			$hn_repeatCount = floor ( $hn_length_of_padding / $hn_psLength ); // how many times repeat
			
			if ($pn_pad_type == STR_PAD_BOTH)
			{
				$hs_lastStrLeft = "";
				$hs_lastStrRight = "";
				$hn_repeatCountLeft = $hn_repeatCountRight = ($hn_repeatCount - $hn_repeatCount % 2) / 2;
	
				$hs_lastStrLength = $hn_length_of_padding - 2 * $hn_repeatCountLeft * $hn_psLength; // the rest length to pad
				$hs_lastStrLeftLength = $hs_lastStrRightLength = floor ( $hs_lastStrLength / 2 ); // the rest length divide to 2 parts
				$hs_lastStrRightLength += $hs_lastStrLength % 2; // the last char add to right side
	
				$hs_lastStrLeft = mb_substr ( $ps_pad_string, 0, $hs_lastStrLeftLength, $ps_encoding );
				$hs_lastStrRight = mb_substr ( $ps_pad_string, 0, $hs_lastStrRightLength, $ps_encoding );
	
				$ret = str_repeat ( $ps_pad_string, $hn_repeatCountLeft ) . $hs_lastStrLeft;
				$ret .= $ps_input;
				$ret .= str_repeat ( $ps_pad_string, $hn_repeatCountRight ) . $hs_lastStrRight;
			}
			else
			{
				$hs_lastStr = mb_substr ( $ps_pad_string, 0, $hn_length_of_padding % $hn_psLength, $ps_encoding ); // last part of pad string
	
				if ($pn_pad_type == STR_PAD_LEFT)
					$ret = str_repeat ( $ps_pad_string, $hn_repeatCount ) . $hs_lastStr . $ps_input;
				else
					$ret = $ps_input . str_repeat ( $ps_pad_string, $hn_repeatCount ) . $hs_lastStr;
			}
		}
	
		return $ret;
	}
	
	private function formataValor($valor)
	{
		return str_replace('.', ',', $valor);
	}
	
	public function formataREM()
	{
		$formatado = str_pad($this->ata->nu_ProcessoCompra, 18, chr(32), STR_PAD_RIGHT);
		$formatado .= str_pad($this->ata->nu_Ata, 18, chr(32), STR_PAD_RIGHT);
		$formatado .= str_pad($this->formataValor($this->qt_Item), 16, '0', STR_PAD_LEFT);
		$formatado .= str_pad($this->sq_Item, 5, '0', STR_PAD_LEFT);
		$formatado .= str_pad($this->formataValor($this->vl_Item), 16, '0', STR_PAD_LEFT);
		$formatado .= str_pad($this->un_Medida, 30, chr(32), STR_PAD_RIGHT);
		$formatado .= str_pad($this->de_Item, 300, chr(32), STR_PAD_RIGHT);
		$formatado .= chr ( 13 ) . chr ( 10 );
	
		return $formatado;
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ItemAdesaoAta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function listAll()
	{
		$criteria=new CDbCriteria();
		$criteria->order='descricao';
		return CHtml::listData($this->findAll($criteria), 'codigo', 'descricao');
	}
	
	protected function beforeSave()
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
	
		return parent::beforeSave();
	}
}
