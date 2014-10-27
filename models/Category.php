<?php

/**
 * This is the model class for table "tbl_category".
 *
 * The followings are the available columns in table 'tbl_category':
 * @property integer $id
 * @property string $name_ru
 * @property string $name_et
 * @property string $name_en
 * @property string $shown
 */
class Category extends CActiveRecord
{

// category_img value
public $icon;
// Delete picture boolean
public $del_img;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_ru, name_et, name_en', 'length', 'max'=>50),
			array('shown', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name_ru, name_et, name_en, shown', 'safe', 'on'=>'search'),
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
'assortiment'=>array(self::HAS_MANY, 'assortiment', 'category_id'),
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
		$criteria->compare('shown',$this->shown,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
* Returns the list of all category.
* @return list data of all category
*/
public static function All()
{
$models = Category::model()->findAll(
array('order' => 'name_ru'));
$list = CHtml::listData($models,
'id', 'name_ru', 'shown');
return $list;
}

/**
* Returns all shown category.
* —return all category where shown = yes
*/
public static function All_shown()
{
 
$r[] =   array('label'=>'Show all', 'url'=>array('/assortiment'), 
'active' => ((Yii::app()->controller->getId() == 
'assortiment')and
(!$_GET['category']) and (!$_GET['id'])),
);      
$models = Category::model()->findAll(
array('order' => 'name_ru',
'condition' => 'shown = "yes"',
)
);
foreach($models as $val)
{
$model = Assortiment::model()->findByPk((int)$_GET['id']);	
$r[] =   array(
 'label'=>$val->name_ru, 
 'url'=>array('/assortiment/index','category'=>$val->id),
 'active' => (($val->id == $model->category_id)or
($val->id == (int)$_GET['category'])),
'linkOptions'=>array('style'=>'background-image:url('.
//Yii::app()->urlManager->baseUrl.
'/images/category_img/'.$val->id.'_category.gif); 
background-position: 0px 0px no-repeat; padding: 10px 0px 10px 55px;')
 );
}  
return $r;
}

}
