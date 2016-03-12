<?php

class BannerImagesController extends Controller
{
	public $section = 'administration';
	public $subSection = 'banner';
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
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new BannerImages;
		$folderImagesPath = Yii::getPathOfAlias('webroot').'/images/banner/';
		if(!is_dir($folderImagesPath)) {
			mkdir($folderImagesPath);
			chmod($folderImagesPath, 0755);
		}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BannerImages']))
		{
			$model->attributes=$_POST['BannerImages'];
			$model->active = 1;
			//Guardando la imagen seleccionada
			$uploadedFile = CUploadedFile::getInstance($model,'url');
			if(isset($uploadedFile)){
				$tempNameArray = explode('.',$uploadedFile->name);
				$ext = ".".$tempNameArray[sizeof($tempNameArray)-1];
	            $fileName = time().rand(1, 999).$ext;
				$uploadedFile->saveAs($folderImagesPath.$fileName);
				$model->url = Yii::app()->request->baseUrl."/images/banner/".$fileName;
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
			else{
				print_r($model->getErrors());
				return;
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BannerImages']))
		{
			$model->attributes=$_POST['BannerImages'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
		$baseUrl = Yii::app()->request->baseUrl;
		$filePath = str_replace($baseUrl.'/images', 'images', $model->url);
		if (file_exists($filePath)) {
			unlink($filePath);
		}
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BannerImages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BannerImages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BannerImages']))
			$model->attributes=$_GET['BannerImages'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BannerImages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BannerImages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BannerImages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='banner-images-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
