<?php

/**
 * This is the model class for table "licitacao_dotacao".
 *
 * The followings are the available columns in table 'licitacao_dotacao':
 * @property string $id
 * @property integer $cd_CategoriaEconomica
 * @property integer $cd_GrupoNatureza
 * @property integer $cd_ModalidadeAplicacao
 * @property integer $cd_Elemento
 * @property integer $cd_UnidadeOrcamentaria
 * @property integer $cd_FonteRecurso
 * @property integer $nu_AcaoGoverno
 * @property integer $cd_SubFuncao
 * @property integer $cd_Funcao
 * @property integer $cd_Programa
 * @property string $licitacao_id
 *
 * The followings are the available model relations:
 * @property Licitacao $licitacao
 */
class LicitacaoDotacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'licitacao_dotacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('cd_CategoriaEconomica, cd_GrupoNatureza, cd_ModalidadeAplicacao, cd_Elemento, cd_UnidadeOrcamentaria, cd_FonteRecurso, nu_AcaoGoverno, cd_SubFuncao, cd_Funcao, cd_Programa, licitacao_id', 'required'),
				array('cd_CategoriaEconomica, cd_GrupoNatureza, cd_ModalidadeAplicacao, cd_Elemento, cd_UnidadeOrcamentaria, cd_FonteRecurso, nu_AcaoGoverno, cd_SubFuncao, cd_Funcao, cd_Programa', 'numerical', 'integerOnly'=>true),
				array('licitacao_id', 'length', 'max'=>10),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array('id, cd_CategoriaEconomica, cd_GrupoNatureza, cd_ModalidadeAplicacao, cd_Elemento, cd_UnidadeOrcamentaria, cd_FonteRecurso, nu_AcaoGoverno, cd_SubFuncao, cd_Funcao, cd_Programa, licitacao_id', 'safe', 'on'=>'search'),
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
				'licitacao' => array(self::BELONGS_TO, 'Licitacao', 'licitacao_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
				'cd_CategoriaEconomica' => 'Cat. Econ.',
				'cd_GrupoNatureza' => 'Grp. Nat.',
				'cd_ModalidadeAplicacao' => 'Modal. Aplic.',
				'cd_Elemento' => 'Elem.',
				'cd_UnidadeOrcamentaria' => 'Un. Orçam.',
				'cd_FonteRecurso' => 'Fnt. Recurso',
				'nu_AcaoGoverno' => 'Ação Governo',
				'cd_SubFuncao' => 'Subfunção',
				'cd_Funcao' => 'Função',
				'cd_Programa' => 'Programa',
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
	public function search($licitacao)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('licitacao_id',$licitacao->id);
		$criteria->compare('cd_CategoriaEconomica',$this->cd_CategoriaEconomica);
		$criteria->compare('cd_GrupoNatureza',$this->cd_GrupoNatureza);
		$criteria->compare('cd_ModalidadeAplicacao',$this->cd_ModalidadeAplicacao);
		$criteria->compare('cd_Elemento',$this->cd_Elemento);
		$criteria->compare('cd_UnidadeOrcamentaria',$this->cd_UnidadeOrcamentaria);
		$criteria->compare('cd_FonteRecurso',$this->cd_FonteRecurso);
		$criteria->compare('nu_AcaoGoverno',$this->nu_AcaoGoverno);
		$criteria->compare('cd_SubFuncao',$this->cd_SubFuncao);
		$criteria->compare('cd_Funcao',$this->cd_Funcao);
		$criteria->compare('cd_Programa',$this->cd_Programa);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
		));
	}

	public function formataREM() {
		$formatado = str_pad ( $this->licitacao->nu_ProcessoLicitatorio, 16, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= $this->cd_CategoriaEconomica;
		$formatado .= $this->cd_GrupoNatureza;
		$formatado .= str_pad ( $this->cd_ModalidadeAplicacao, 2, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->cd_Elemento, 2, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->cd_UnidadeOrcamentaria, 6, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->cd_FonteRecurso, 10, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->nu_AcaoGoverno, 7, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->cd_SubFuncao, 3, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->cd_Funcao, 2, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->cd_Programa, 4, '0', STR_PAD_LEFT );
		$formatado .= chr ( 13 ) . chr ( 10 );

		return $formatado;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LicitacaoDotacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
