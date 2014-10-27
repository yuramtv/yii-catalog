<?php

class AssortimentController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to 
* the 'view' page.
*/
public function actionCreate()
{
			
$model=new Assortiment;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);
if(isset($_POST['Assortiment']))
//Если пользователь отослал данные
{
$model->attributes=$_POST['Assortiment'];
//Заполнить модель данными присланными пользователем
$model->icon=CUploadedFile::getInstance($model,'icon');
//Атрибуту icon присвоить указатель на загружаемый файл
if($model->save())
//Если надо сохранить модель
{
if ($model->icon)
//Если пользователь загрузил файл
{
$file = './images/original_img/assortiment/'.$model->id.'_assortiment.jpg';
//Переменной $file присвоить путь, куда сохранится картинка без изменений
$model->icon->saveAs($file);
//Сохранить картинку без изменений по указанному пути
//Используем функции расширения CImageHandler ; 
$ih = new CImageHandler(); //Инициализация
Yii::app()->ih 
->load($file) //Загрузка оригинала картинки
->thumb('200', '200') //Создание превьюшки размером 200px
->save('./images/assortiment_img/thumb/'.
$model->id.'_assortiment.jpg') 
//Сохранение превьюшки в папку
->reload() //Снова загрузка оригинала картинки
->thumb('50', '50') //Создание превьюшки размером 50px
->save('./images/assortiment_img/thumb_small/'
.$model->id.'_assortiment.jpg')
//Сохранение превьюшки в папку
->reload()//Снова загрузка оригинала картинки
->thumb('1000', '1000') //Создание превьюшки размером 1000px
->save('./images/assortiment_img/'.$model->id.'_assortiment.jpg')
//Сохранение превьюшки в папку
;  
}
$this->redirect(array('view','id'=>$model->id)); 
}
}
$this->render('create',array(
'model'=>$model,
)); 
}
/*	 
	public function actionCreate()
	{
		$model=new Assortiment;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Assortiment']))
		{
			$model->attributes=$_POST['Assortiment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
*/
/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);
if(isset($_POST['Assortiment'])){
$model->attributes=$_POST['Assortiment'];
//print_r ($model->icon);
$model->icon=CUploadedFile::getInstance($model,'icon');
$model->del_img=CUploadedFile::getInstance($model,'del_img');
print_r ($model->del_img);
if($model->save()){
if($model->del_img)
//Если было отмечено удалить картинку
{
if(file_exists('./images/assortiment_img/thumb/'.$id.'_assortiment.jpg'))
{
//Удаляю все превьюхи этой картинки
@unlink('./images/assortiment_img/thumb/'.$id.'_assortiment.jpg');
@unlink('./images/assortiment_img/thumb_small/'.$id.'_assortiment.jpg');
@unlink('./images/assortiment_img/'.$id.'_assortiment.jpg');
@unlink('./images/original_img/assortiment/'.$id.'_assortiment.jpg');
}
}
if ($model->icon){
$file = './images/original_img/assortiment/'.$model->id.'_assortiment.jpg';
$model->icon->saveAs($file);
//Use CImageHandler extension; 
$ih = new CImageHandler();
Yii::app()->ih 
->load($file)
->thumb('200', false)
->save('./images/assortiment_img/thumb/'.$model->id.'_assortiment.jpg')
->reload()
->thumb('50', '50')
->save('./images/assortiment_img/thumb_small/'.$model->id.'_assortiment.jpg')
->reload()
->thumb('1000', '1000')
->save('./images/assortiment_img/'.$model->id.'_assortiment.jpg')
;  
}
$this->redirect(array('view','id'=>$model->id)); 
}
}
$this->render('update',array(
'model'=>$model,
));
}
	 
/*
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Assortiment']))
		{
			$model->attributes=$_POST['Assortiment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
*/
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	$criteria=new CDbCriteria(array('condition'=>'t.shown=1 and category.shown=1','with' => array('category'),));
$dataProvider=new CActiveDataProvider('Assortiment',array('criteria'=>$criteria));
//		$dataProvider=new CActiveDataProvider('Assortiment');
$this->render('index',array('dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Assortiment('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Assortiment']))
			$model->attributes=$_GET['Assortiment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Assortiment the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Assortiment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Assortiment $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='assortiment-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
					/**
					* —return html image tag for assortiment. No photo if image not exests
					* $id - id of the assortiment
					* $name - name of assortiment use for alt
					* $class - class of image
					* $link - if present, generated <a> tag with href=$link
					* $target - target attribute
					*/
					public function assortiment_image($id,$name,$class='assortiment_img',$link=null,$target='_self')
					{
					if(file_exists($_SERVER['DOCUMENT_ROOT'].
//					Yii::app()->urlManager->baseUrl.
					'/images/assortiment_img/thumb/'.$id.'_assortiment.jpg'))
							{          
								if ($link)
								return CHtml::link(CHtml::image(
			//					Yii::app()->urlManager->baseUrl.
								'/images/assortiment_img/thumb/'.$id.'_assortiment.jpg',$name,
								array(
								'class'=>$class,
								)), $link ,
								array(
								'target'=>$target,
								));
								else
								return 
								CHtml::image(
			//					Yii::app()->urlManager->baseUrl.
								'/images/assortiment_img/thumb/'.$id.'_assortiment.jpg',$name,
								array(
								'class'=>$class,
								));
										
							}
								else
								return CHtml::image(
			//					Yii::app()->urlManager->baseUrl.
								'/images/assortiment_img/no_photo.gif','No photo',
								array(
								'class'=>$class,
								));
						
					}
				
}
