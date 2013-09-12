<?php

class SiteController extends Controller
{

	public $layout = "//layouts/home";

	//limit reviews on page
	public $reviews_limit = 5;

	//public $count;
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		//order model
		$order = new Orders;
		$order->pay_type = 1;

		//phone
		$phone = new Phones;
		$phone->status = 1;

		//get reviews
		$reviews=new CActiveDataProvider('Reviews',array(
			'pagination'=>array(
		        'pageSize'=>5,
		    ),
		));

		//get catalog
		$catalog = new CActiveDataProvider('Catalog',array(
			'pagination'=>array(
		        'pageSize'=>6,
		    ),
		));

		if(isset($_GET['ajax']) && $_GET['ajax'] == 'catalog-items'){
			//show all data
			if(isset($_GET['show_all'])){
				$catalog = new CActiveDataProvider('Catalog',array(
					'pagination'=>false
				));
			}
			$this->renderPartial('catalog', array('catalog' => $catalog));
			Yii::app()->end();
		}

		$this->render('index', array(
			'reviews' => $reviews,
			'catalog' => $catalog,
			'order' => $order,
			'phone' => $phone
		));
	}

	//ajax update reviews
	public function actionUpdateReviews(){
		$reviews=new CActiveDataProvider('Reviews',array(
			'pagination'=>array(
		        'pageSize'=>5,
		    ),
		));

		if(ceil(($reviews->totalItemCount / $this->reviews_limit)) < intval($_GET['Reviews_page'])){
			unset($_GET);
			$reviews=new CActiveDataProvider('Reviews',array(
				'pagination'=>array(
			        'pageSize'=>5,
			    ),
			));			
		}

		$this->renderPartial('reviews', array('reviews' => $reviews));
		Yii::app()->end();
	}

	//order action
	public function actionOrder(){
		
		if(isset($_POST['Orders'])){
			
			$order = new Orders;
			$order->attributes = $_POST['Orders'];

			//ajax validation
			if(isset($_POST['ajax']) && $_POST['ajax'] === 'orders-form'){
				echo CActiveForm::validate($order);
				Yii::app()->end();
			}

			if($order->validate()){

				$order->save(false);

				if($order->pay_type == 1){

					$good = $this->loadGood($_POST['good']);

					$kassa = new Robokassa('vetalgal89', 'robopass1', 'robopass2', true);
					$kassa->OutSum = $good->price;
					$kassa->InvId = $good->id;
					$kassa->IncCurrLabel = 'WMRM';
					$kassa->Desc = 'Тестовая оплата';

					$kassa->addCustomValues(array('shp_order_id' => $order->id));

					header('Location: ' . $kassa->getRedirectURL());

					Yii::app()->end();
				}
				/*else if($_POST['pay_type'] == 1){ //наличные

				}else if($_POST['pay_type'] == 2){

				}*/
			}

			Yii::app()->user->setFlash('order-confirm','Спасибо, за заказ!');
			$this->redirect(array('index'));

		}
		Yii::app()->end();
	}

	//get catalog items
	public function loadGood($id)
	{
		$model=Catalog::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	//catalog filter action
	public function actionFilterCatalog(){

		$criteria = new CDbCriteria();

		if(isset($_POST['Filter'])){
			$filter = $_POST['Filter'];

			$with = array();

			//category
			if($filter['category'] != 0){
				$with[] = 'categories';
				$criteria->addCondition('category_id=:category_id');
				$criteria->params[':category_id'] = $filter['category'];
			}

			//reasons
			if($filter['reason'] != 0){
				$with[] = 'reasons';
				$criteria->addCondition('reason_id=:reason_id');
				$criteria->params[':reason_id'] = $filter['reason'];
			}
			//reasons
			if($filter['flower'] != 0){
				$with[] = 'flowers';
				$criteria->addCondition('flower_id=:flower_id');
				$criteria->params[':flower_id'] = $filter['flower'];
			}
			//price
			if($filter['price'] != 0){
				Catalog::setPriceCondition($filter['price'], $criteria);
			}

			$criteria->with = $with;
			$criteria->together = true;
		}
		//print_r($_POST['Filter']);die();

		$catalog = new CActiveDataProvider('Catalog',array(
			'criteria' => $criteria,
			'pagination'=>array(
		        'pageSize'=>6,
		    ),
		));

		$this->renderPartial('catalog', array('catalog' => $catalog));

		Yii::app()->end();
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	/*public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}*/

	/**
	 * Displays the contact page
	 */
	/*public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}*/

	/**
	 * Displays the login page
	 */
	/*public function actionLogin()
	{
		$this->layout = '//layouts/simple';

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}*/

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	/*public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}*/
}