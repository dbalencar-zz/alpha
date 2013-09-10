<?php

/**
 * This is the model class for table "adesao_ata_licitacao".
 *
 * The followings are the available columns in table 'adesao_ata_licitacao':
 * @property string $id
 * @property string $nu_ProcessoCompra
 * @property string $nu_Ata
 * @property string $nu_ProcessoLicitatorio
 * @property string $dt_Publicacao
 * @property string $dt_Validade
 * @property string $nu_DiarioOficial
 * @property string $dt_Adesao
 * @property string $tp_Adesao
 *
 * The followings are the available model relations:
 * @property TipoAdesaoAta $tpAdesao
 * @property ItemAdesaoAta[] $itemAdesaoAtas
 */
class AdesaoAtaLicitacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'adesao_ata_licitacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_ProcessoCompra, nu_Ata, dt_Validade, dt_Adesao, tp_Adesao', 'required'),
			array('nu_ProcessoCompra, nu_Ata, nu_ProcessoLicitatorio', 'length', 'max'=>18),
			array('nu_DiarioOficial', 'length', 'max'=>6),
			array('tp_Adesao', 'length', 'max'=>2),
			array(
				'dt_Validade, dt_Adesao, dt_Publicacao',
				'date',
				'format' => 'dd/MM/yyyy'
			),
			array(
				'nu_ProcessoLicitatorio, dt_Publicacao, nu_DiarioOficial',
				'default',
				'setOnEmpty' => true,
				'value' => null
			),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nu_ProcessoCompra, nu_Ata, nu_ProcessoLicitatorio, dt_Publicacao, dt_Validade, nu_DiarioOficial, dt_Adesao, tp_Adesao', 'safe', 'on'=>'search'),
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
			'tipo' => array(self::BELONGS_TO, 'TipoAdesaoAta', 'tp_Adesao'),
			'itens' => array(self::HAS_MANY, 'ItemAdesaoAta', 'adesao_ata_licitacao_id'),
		);
	}
	
	public function defaultScope()
	{
		return array(
				'condition'=>'competencia_id='.Yii::app()->user->competencia,
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_ProcessoCompra' => 'Número',
			'nu_Ata' => 'Ata',
			'nu_ProcessoLicitatorio' => 'Licitação',
			'dt_Publicacao' => 'Dt. Publicação',
			'dt_Validade' => 'Dt. Vencimento',
			'nu_DiarioOficial' => 'DOE',
			'dt_Adesao' => 'Dt. Adesão',
			'tp_Adesao' => 'Tipo Adesão',
			'tipo.descricao' => 'Tipo Adesão',
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
		$criteria->compare('nu_ProcessoCompra',$this->nu_ProcessoCompra,true);
		$criteria->compare('nu_Ata',$this->nu_Ata,true);
		$criteria->compare('nu_ProcessoLicitatorio',$this->nu_ProcessoLicitatorio,true);
		$criteria->compare('dt_Publicacao',$this->dt_Publicacao,true);
		$criteria->compare('dt_Validade',$this->dt_Validade,true);
		$criteria->compare('nu_DiarioOficial',$this->nu_DiarioOficial,true);
		$criteria->compare('dt_Adesao',$this->dt_Adesao,true);
		$criteria->compare('tp_Adesao',$this->tp_Adesao,true);

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
	
	private function formataData($data)
	{
		return date('Ymd', CDateTimeParser::parse($data, Yii::app()->locale->dateFormat));
	}
	
	public function formataREM()
	{
		$formatado = str_pad($this->nu_ProcessoCompra, 18, chr(32), STR_PAD_RIGHT);
		$formatado .= str_pad($this->nu_Ata, 18, chr(32), STR_PAD_RIGHT);
		$formatado .= str_pad($this->nu_ProcessoLicitatorio, 18, chr(32), STR_PAD_RIGHT);
		$formatado .= $this->formataData($this->dt_Publicacao);
		$formatado .= $this->formataData($this->dt_Validade);
		$formatado .= str_pad($this->nu_DiarioOficial, 6, '0', STR_PAD_LEFT);
		$formatado .= $this->formataData($this->dt_Adesao);
		$formatado .= str_pad( $this->tp_Adesao, 2, '0', STR_PAD_LEFT);
		$formatado .= chr ( 13 ) . chr ( 10 );
	
		return $formatado;
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AdesaoAtaLicitacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
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
		
		foreach ( $this->metadata->tableSchema->columns as $columnName => $column )
		{
			if ($column->dbType == 'date')
			{
				$this->$columnName = date ( 'Y-m-d', CDateTimeParser::parse ( $this->$columnName, Yii::app ()->locale->dateFormat ) );
			}
			elseif ($column->dbType == 'datetime')
			{
				$this->$columnName = date ( 'Y-m-d H:i:s', CDateTimeParser::parse ( $this->$columnName, Yii::app ()->locale->dateFormat ) );
			}
		}
	
		return parent::beforeSave();
	}
	
	protected function afterFind()
	{
		foreach ( $this->metadata->tableSchema->columns as $columnName => $column )
		{
			if (! strlen ( $this->$columnName ))
				continue;
				
			if ($column->dbType == 'date')
			{
				$this->$columnName = Yii::app ()->dateFormatter->formatDateTime ( CDateTimeParser::parse ( $this->$columnName, 'yyyy-MM-dd' ), 'medium', null );
			}
			elseif ($column->dbType == 'datetime')
			{
				$this->$columnName = Yii::app ()->dateFormatter->formatDateTime ( CDateTimeParser::parse ( $this->$columnName, 'yyyy-MM-dd hh:mm:ss' ) );
			}
		}
	
		return parent::afterFind();
	}
}