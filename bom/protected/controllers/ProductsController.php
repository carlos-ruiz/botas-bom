<?php

class ProductsController extends Controller
{
	public $section;
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('index','view','loadModalContent'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create', 'update', 'deleteImage', 'admin', 'delete'),
				'users'=>array('@'),
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
		$producto_imagen = new ProductImages;

		if(isset($_POST['ProductImages'])){
			$url = Yii::app()->basePath."/../images/catalogo/";
			$producto_imagen->attributes=$_POST['ProductImages'];
			$uploadedFile=CUploadedFile::getInstance($producto_imagen,'image_url');
			$tempNameArray = explode('.',$uploadedFile->name);
			$ext = ".".$tempNameArray[sizeof($tempNameArray)-1];
			$fileName = time().$ext;

			if($uploadedFile->saveAs($url.$fileName)){
				$producto_imagen->image_url=Yii::app()->request->baseUrl."/images/catalogo/".$fileName;
				$producto_imagen->products_id=$id;
				$producto_imagen->save();
            }
		}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'producto_imagen'=>$producto_imagen
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Products;
		$producto_imagen= new ProductImages;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$folderImagesPath = Yii::getPathOfAlias('webroot').'/images/catalogo/';
		if(!is_dir($folderImagesPath)) {
			mkdir($folderImagesPath);
			chmod($folderImagesPath, 0755);
		}
		$formWithErrors = false;

		if(isset($_POST['Products']))
		{
			$url = Yii::app()->basePath."/../images/catalogo/";
			$model->attributes = $_POST['Products'];
			$model->status = 1;
			$images = CUploadedFile::getInstances($producto_imagen,'image_url');
			if(sizeof($images)<1){
				$producto_imagen->validate();
				$formWithErrors = true;
			}
            if(!$formWithErrors && $model->save())
	        {
				foreach ($images as $image) {
					$uploadedFile = $image;
					$tempNameArray = explode('.',$uploadedFile->name);
					$ext = ".".$tempNameArray[sizeof($tempNameArray)-1];
		            $fileName = time().rand(1, 999).$ext;
					$uploadedFile->saveAs($url.$fileName);
					
					$producto_imagen = new ProductImages;
					$producto_imagen->products_id = $model->id;
					$producto_imagen->image_url = Yii::app()->request->baseUrl."/images/catalogo/".$fileName;
					if($producto_imagen->validate()){

						$producto_imagen->save();
					}
				}
				if(isset($_POST['Products']['categoriesSelected'])){
					$categories = $_POST['Products']['categoriesSelected'];
					foreach ($categories as $category) {
						$productCategory = new ProductsHasCategories;
						$productCategory->id_products = $model->id;
						$productCategory->id_categories = $category;
						$productCategory->save();
					}
				}
	            $this->redirect(array('view','id'=>$model->id));
	        }

		}

		$this->render('create',array(
			'model'=>$model,
			'producto_imagen'=>$producto_imagen,
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
		$categories = ProductsHasCategories::model()->findAll('id_products=?',array($model->id));

		if(!isset($_POST['Products'])){
			$categoriesIds = array();
			foreach ($categories as $category) {
				array_push($categoriesIds, $category->id_categories);
			}
			$model->categoriesSelected = $categoriesIds;
		}

		$producto_imagen = new ProductImages;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Products']))
		{
			$url = Yii::app()->basePath."/../images/catalogo/";
			$model->attributes=$_POST['Products'];
			if($model->save()){
				$images = CUploadedFile::getInstances($producto_imagen,'image_url');
				foreach ($images as $image) {
					$uploadedFile = $image;
					$tempNameArray = explode('.',$uploadedFile->name);
					$ext = ".".$tempNameArray[sizeof($tempNameArray)-1];
		            $fileName = time().rand(1, 999).$ext;
					$uploadedFile->saveAs($url.$fileName);
					
					$producto_imagen = new ProductImages;
					$producto_imagen->products_id = $model->id;
					$producto_imagen->image_url = Yii::app()->request->baseUrl."/images/catalogo/".$fileName;
					if($producto_imagen->validate()){
						$producto_imagen->save();
					}
				}

				foreach ($categories as $category) {
					$category->delete();
				}

				if(isset($_POST['Products']['categoriesSelected'])){
					$categoriesSelected = $_POST['Products']['categoriesSelected'];
					foreach ($categoriesSelected as $category) {
						$productCategory = new ProductsHasCategories;
						$productCategory->id_products = $model->id;
						$productCategory->id_categories = $category;
						$productCategory->save();
					}
				}

				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'producto_imagen'=>$producto_imagen,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$product = $this->loadModel($id);
		$baseUrl = Yii::app()->request->baseUrl;
		foreach ($product->images as $image) {
			$filePath = str_replace($baseUrl.'/images', 'images', $image->image_url);
			if (file_exists($filePath)) {
				unlink($filePath);
			}
			$image->delete();
		}
		$product->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->section = "catalogo";
		$products = Products::model()->findAll();
		$categories = Categories::model()->findAll(array('order'=>'name ASC'));

		$this->render('index',array(
			'products'=>$products,
			'categories'=>$categories
		));
	}

	public function actionLoadModalContent(){
		$productId=$_POST['id'];
		$product = $this->loadModel($productId);
		$this->renderPartial("_productModalContent",array('product'=>$product));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Products('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Products']))
			$model->attributes=$_GET['Products'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Products the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Products::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Products $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='products-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionDeleteImage()
	{
		if(isset($_POST['id'])){
			$image = ProductImages::model()->find("id=?",array($_POST['id']));
			$baseUrl = Yii::app()->request->baseUrl;
			$filePath = str_replace($baseUrl.'/images', 'images', $image->image_url);
			if (file_exists($filePath)) {
				unlink($filePath);
			}
			if($image->delete()){
				echo 0; //SI NO HAY ERROR REGRESAMOS 0
			}
			else
				echo 1; //SI HAY ERROR REGRESAMOS 1
		}
	}
}
