<?php

/**
 * This is the model class for table "tbl_spmessage".
 *
 * The followings are the available columns in table 'tbl_spmessage':
 * @property integer $id
 * @property string $title_ru
 * @property string $title_et
 * @property string $title_en
 * @property string $message_ru
 * @property string $message_et
 * @property string $message_en
 * @property string $shown
 */
class Spmessage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_spmessage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_ru, title_et, title_en, message_ru, message_et, message_en', 'required'),
			array('title_ru, title_et, title_en', 'length', 'max'=>45),
			array('shown', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_ru, title_et, title_en, message_ru, message_et, message_en, shown', 'safe', 'on'=>'search'),
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
				'pages' => array(self::MANY_MANY, 'Sppage', 'tbl_sprelations(tbl_spmessage_id,tbl_sppage_id)'),
				);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title_ru' => 'Title Ru',
			'title_et' => 'Title Et',
			'title_en' => 'Title En',
			'message_ru' => 'Message Ru',
			'message_et' => 'Message Et',
			'message_en' => 'Message En',
			'shown' => 'Shown',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('title_et',$this->title_et,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('message_ru',$this->message_ru,true);
		$criteria->compare('message_et',$this->message_et,true);
		$criteria->compare('message_en',$this->message_en,true);
		$criteria->compare('shown',$this->shown,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Spmessage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
