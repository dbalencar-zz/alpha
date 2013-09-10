<?php

/**
 * This is the model class for table "Item".
 *
 * The followings are the available columns in table 'Item':
 * @property string $id
 * @property string $nu_ProcessoLicitatorio
 * @property string $nu_SequencialItem
 * @property string $de_ItemLicitacao
 * @property integer $qt_ItemLicitado
 * @property string $dt_HomologacaoItem
 * @property string $dt_PublicacaoHomologacao
 * @property string $cd_ItemLote
 */
class Item extends CActiveRecord {
	/**
	 * Returns the static model of the specified AR class.
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Item the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
	
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'item';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
					'nu_SequencialItem, de_ItemLicitacao, qt_ItemLicitado',
					'required' 
				),
				array (
					'qt_ItemLicitado, nu_SequencialItem',
					'numerical'
				),
				array (
					'nu_SequencialItem',
					'length',
					'max' => 5 
				),
				array (
					'un_Medida',
					'length',
					'max' => 30
				),
				array (
					'de_ItemLicitacao',
					'length',
					'max' => 300 
				),
				array(
					'st_Item',
					'safe'
				),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array (
						'nu_SequencialItem, de_ItemLicitacao, qt_ItemLicitado, dt_HomologacaoItem, dt_PublicacaoHomologacao',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array (
			'licitacao' => array (
				self::BELONGS_TO,
				'Licitacao',
				'licitacao_id' 
			),
			'cotacoes' => array (
				self::HAS_MANY,
				'Cotacao',
				'item_id' 
			),
			'status' => array(
				self::BELONGS_TO,
				'StatusItemLicitacao',
				'st_Item'
			),
		);
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'nu_SequencialItem' => 'Número Seq',
				'de_ItemLicitacao' => 'Descrição',
				'qt_ItemLicitado' => 'Quantidade',
				'dt_HomologacaoItem' => 'Homologação',
				'dt_PublicacaoHomologacao' => 'Publicação',
				'un_Medida' => 'Unidade de Medida',
				'st_Item' => 'Status',
				'status.descricao' => 'Status'
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * 
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($licitacao) {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'licitacao_id', $licitacao->id );
		$criteria->compare ( 'nu_SequencialItem', $this->nu_SequencialItem, true );
		$criteria->compare ( 'de_ItemLicitacao', $this->de_ItemLicitacao, true );
		$criteria->compare ( 'qt_ItemLicitado', $this->qt_ItemLicitado, true );
		$criteria->compare ( 'dt_HomologacaoItem', $this->dt_HomologacaoItem, true );
		$criteria->compare ( 'dt_PublicacaoHomologacao', $this->dt_PublicacaoHomologacao, true );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	private function mb_str_pad($ps_input, $pn_pad_length, $ps_pad_string = " ", $pn_pad_type = STR_PAD_RIGHT, $ps_encoding = NULL) {
		mb_internal_encoding ( 'utf-8' );
		$ret = "";
		
		if (is_null ( $ps_encoding ))
			$ps_encoding = mb_internal_encoding ();
		
		$hn_length_of_padding = $pn_pad_length - mb_strlen ( $ps_input, $ps_encoding );
		$hn_psLength = mb_strlen ( $ps_pad_string, $ps_encoding ); // pad string length
		
		if ($hn_psLength <= 0 || $hn_length_of_padding <= 0) {
			// Padding string equal to 0:
			//
			$ret = $ps_input;
		} else {
			$hn_repeatCount = floor ( $hn_length_of_padding / $hn_psLength ); // how many times repeat
			
			if ($pn_pad_type == STR_PAD_BOTH) {
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
			} else {
				$hs_lastStr = mb_substr ( $ps_pad_string, 0, $hn_length_of_padding % $hn_psLength, $ps_encoding ); // last part of pad string
				
				if ($pn_pad_type == STR_PAD_LEFT)
					$ret = str_repeat ( $ps_pad_string, $hn_repeatCount ) . $hs_lastStr . $ps_input;
				else
					$ret = $ps_input . str_repeat ( $ps_pad_string, $hn_repeatCount ) . $hs_lastStr;
			}
		}
		
		return $ret;
	}
	public function formataREM() {
		$formatado = str_pad ( $this->licitacao->nu_ProcessoLicitatorio, 18, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= str_pad ( $this->nu_SequencialItem, 5, '0', STR_PAD_LEFT );
		$formatado .= $this->mb_str_pad ( $this->de_ItemLicitacao, 300, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= str_pad ( $this->formataValor($this->qt_ItemLicitado), 16, '0', STR_PAD_LEFT );
		$formatado .= $this->formataData ( $this->dt_HomologacaoItem );
		$formatado .= $this->formataData ( $this->dt_PublicacaoHomologacao );
		$formatado .= $this->mb_str_pad ( $this->un_Medida, 30, chr(32), STR_PAD_RIGHT);
		$formatado .= $this->mb_str_pad ( $this->st_Item, 2, '0', STR_PAD_LEFT );
		$formatado .= chr ( 13 ) . chr ( 10 );
		
		// iconv(mb_detect_encoding($formatado, mb_detect_order(), true), "UTF-8", $formatado);
		
		return $formatado;
	}
	private function formataValor($valor) {
		return str_replace ( '.', ',', $valor );
	}
	private function formataData($data) {
		return date ( 'Ymd', CDateTimeParser::parse ( $data, Yii::app ()->locale->dateFormat ) );
	}
	protected function beforeSave() {
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
		foreach ( $this->metadata->tableSchema->columns as $columnName => $column ) {
			if ($column->dbType == 'date') {
				$this->$columnName = date ( 'Y-m-d', CDateTimeParser::parse ( $this->$columnName, Yii::app ()->locale->dateFormat ) );
			} elseif ($column->dbType == 'datetime') {
				$this->$columnName = date ( 'Y-m-d H:i:s', CDateTimeParser::parse ( $this->$columnName, Yii::app ()->locale->dateFormat ) );
			}
		}
		
		return parent::beforeSave ();
	}
	protected function afterFind() {
		foreach ( $this->metadata->tableSchema->columns as $columnName => $column ) {
			if (! strlen ( $this->$columnName ))
				continue;
			
			if ($column->dbType == 'date') {
				$this->$columnName = Yii::app ()->dateFormatter->formatDateTime ( CDateTimeParser::parse ( $this->$columnName, 'yyyy-MM-dd' ), 'medium', null );
			} elseif ($column->dbType == 'datetime') {
				$this->$columnName = Yii::app ()->dateFormatter->formatDateTime ( CDateTimeParser::parse ( $this->$columnName, 'yyyy-MM-dd hh:mm:ss' ) );
			}
		}
		
		return parent::afterFind ();
	}
}