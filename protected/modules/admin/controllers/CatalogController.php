<?php

class CatalogController extends AdminController
{

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
		$model=new Catalog;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		//print_r($_POST); die();

		if(isset($_POST['Catalog']))
		{
			$model->attributes=$_POST['Catalog'];

			if($model->validate()){
				//Create Gallery
				$gallery = new Gallery();
				$gallery->name = true;
				$gallery->description = true;
				$gallery->versions = array(
				    'mini' => array(
	                    'adaptiveResize' => array(326, 426),
	                ),
	                'medium' => array(
	                    'resize' => array(1200, 1000),
	                )
				);
				$gallery->save();

				$model->gallery_id = $gallery->id;
				$model->save(false);

				//categories
				if(isset($_POST['category']) && !empty($_POST['category'])){
					
					$cmDb = Yii::app()->db->createCommand();
					foreach ($_POST['category'] as $value) {
						$cmDb->insert('catalog_category', array(
							'catalog_id' => $model->id,
							'category_id' => $value
						));
					}
				}

				//reasons
				if(isset($_POST['reasons'])  && !empty($_POST['reasons'])){
					
					$cmDb = Yii::app()->db->createCommand();
					foreach ($_POST['reasons'] as $value) {
						$cmDb->insert('catalog_reasons', array(
							'catalog_id' => $model->id,
							'reason_id' => $value
						));
					}
				}

				//Flowers
				if(isset($_POST['flowers'])  && !empty($_POST['flowers'])){
					
					$cmDb = Yii::app()->db->createCommand();
					foreach ($_POST['flowers'] as $value) {
						$cmDb->insert('catalog_flowers', array(
							'catalog_id' => $model->id,
							'flower_id' => $value
						));
					}
				}

				$this->redirect(array('view','id'=>$model->id));
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

		$cmDb = Yii::app()->db->createCommand();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		//categories
		if(isset($_POST['category'])){
			$cmDb->delete('catalog_category', 'catalog_id=:id', array(':id' => $model->id));
			
			if(!empty($_POST['category'])){
				foreach ($_POST['category'] as $value) {
					$cmDb->insert('catalog_category', array(
						'catalog_id' => $model->id,
						'category_id' => $value
					));
				}
			}
		}

		//reasons
		if(isset($_POST['reasons'])){
			$cmDb->delete('catalog_reasons', 'catalog_id=:id', array(':id' => $model->id));

			if(!empty($_POST['reasons'])){
				foreach ($_POST['reasons'] as $value) {
					$cmDb->insert('catalog_reasons', array(
						'catalog_id' => $model->id,
						'reason_id' => $value
					));
				}
			}
		}

		//flowers
		if(isset($_POST['flowers'])){
			$cmDb->delete('catalog_flowers', 'catalog_id=:id', array(':id' => $model->id));

			if(!empty($_POST['flowers'])){
				foreach ($_POST['flowers'] as $value) {
					$cmDb->insert('catalog_flowers', array(
						'catalog_id' => $model->id,
						'flower_id' => $value
					));
				}
			}
		}

		if(isset($_POST['Catalog']))
		{
			$model->attributes=$_POST['Catalog'];
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
		if(Yii::app()->request->isPostRequest)
		{
			$model = $this->loadModel($id);
			//clear
			$cmDb = Yii::app()->db->createCommand();
			$cmDb->delete('catalog_category', 'catalog_id=:id', array(':id' => $model->id));
			$cmDb->delete('catalog_reasons', 'catalog_id=:id', array(':id' => $model->id));
			$cmDb->delete('catalog_flowers', 'catalog_id=:id', array(':id' => $model->id));
			// we only allow deletion via POST request
			$model->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Catalog');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Catalog('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Catalog']))
			$model->attributes=$_GET['Catalog'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Catalog::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='flowers-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
