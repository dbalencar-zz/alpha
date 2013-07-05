<?php

/**
 * This is the model class for table "Certidao".
 *
 * The followings are the available columns in table 'Certidao':
 * @property string $id
 * @property string $nu_ProcessoLicitatorio
 * @property integer $cd_CicParticipante
 * @property integer $tp_Certidao
 * @property integer $tp_Pessoa
 * @property string $nu_Certidao
 * @property string $dt_EmissaoCertidao
 * @property string $dt_ValidadeCertidao
 */
class Certidao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Certidao the static model class
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
		return 'certidao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_ProcessoLicitatorio, cd_CicParticipante, tp_Certidao, tp_Pessoa, nu_Certidao, dt_EmissaoCertidao, dt_ValidadeCertidao', 'required'),
			array('cd_CicParticipante, tp_Certidao, tp_Pessoa', 'numerical', 'integerOnly'=>true),
			array('nu_ProcessoLicitatorio, nu_Certidao', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nu_ProcessoLicitatorio, cd_CicParticipante, tp_Certidao, tp_Pessoa, nu_Certidao, dt_EmissaoCertidao, dt_ValidadeCertidao', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nu_ProcessoLicitatorio' => 'Nu Processo Licitatorio',
			'cd_CicParticipante' => 'Cd Cic Participante',
			'tp_Certidao' => 'Tp Certidao',
			'tp_Pessoa' => 'Tp Pessoa',
			'nu_Certidao' => 'Nu Certidao',
			'dt_EmissaoCertidao' => 'Dt Emissao Certidao',
			'dt_ValidadeCertidao' => 'Dt Validade Certidao',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nu_ProcessoLicitatorio',$this->nu_ProcessoLicitatorio,true);
		$criteria->compare('cd_CicParticipante',$this->cd_CicParticipante);
		$criteria->compare('tp_Certidao',$this->tp_Certidao);
		$criteria->compare('tp_Pessoa',$this->tp_Pessoa);
		$criteria->compare('nu_Certidao',$this->nu_Certidao,true);
		$criteria->compare('dt_EmissaoCertidao',$this->dt_EmissaoCertidao,true);
		$criteria->compare('dt_ValidadeCertidao',$this->dt_ValidadeCertidao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}