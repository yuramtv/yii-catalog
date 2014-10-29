<?php

/**
 * This is the model class for table "tbl_sppage".
 *
 * The followings are the available columns in table 'tbl_sppage':
 * @property integer $id
 * @property string $name_ru
 * @property string $name_et
 * @property string $name_en
 * @property string $url
 * @property integer $sorting
 * @property string $shown
 */
class Sppage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_sppage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sorting', 'required'),
			array('sorting', 'numerical', 'integerOnly'=>true),
			array('name_ru, name_et, name_en', 'length', 'max'=>45),
			array('url', 'length', 'max'=>20),
			array('shown', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name_ru, name_et, name_en, url, sorting, shown', 'safe', 'on'=>'search'),
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
	'messages' => array(self::MANY_MANY, 'Spmessage', 'tbl_sprelations(tbl_sppage_id, tbl_spmessage_id)','order'=>'messages_messages.sort ASC')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name_ru' => 'Name Ru',
			'name_et' => 'Name Et',
			'name_en' => 'Name En',
			'url' => 'Url',
			'sorting' => 'Sorting',
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
		$criteria->compare('name_ru',$this->name_ru,true);
		$criteria->compare('name_et',$this->name_et,true);
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('sorting',$this->sorting);
		$criteria->compare('shown',$this->shown,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sppage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
				/**
			* Returns all staticpages.
			*/
			// Буду генерировать массив пунктов меню $r. 
			public function Staticpages_menu()
			{
			//Первый пункт меню: Каталог. 
			$r[] =   array('label'=>'Catalog', 'url'=>array('/assortiment/'), 
			 'active' => Yii::app()->controller->getId() == 'assortiment');
			//Далее беру все записи из модели  sppage отсортированные по полю 'sorting' 
			//  и имеющие атрибут 'shown'=yes
			$models = sppage::model()->findAll(
			array('order' => 'sorting',
			'condition' => 'shown = "yes"',
			)
			);
			//Прохожусь по всем строкам и генерую на их основе меню (элементы массива $r)
			foreach($models as $val)
			{
			$r[] =   array(
			'label'=>$val->name_ru, 
			'url'=>array('/page='.$val->url),
			'active' => ($val->url == preg_replace("|[^a-z0-9]|i", NULL,$_GET['id'])),
			);
			}
			//В конец меню добавляю пункт Контакт, логин, логофф.
			$r[] =	array('label'=>'Contact', 'url'=>array('/site/contact'));
			$r[] =	array('label'=>'Login', 'url'=>array('/site/login'), 
			'visible'=>Yii::app()->user->isGuest);
			$r[] =	array('label'=>'Logout', 'url'=>array('/site/logout'), 
			'visible'=>!Yii::app()->user->isGuest);    				
			
			//Данный метод возвращает массив пунктов меню
			return $r;
			}
	
}
