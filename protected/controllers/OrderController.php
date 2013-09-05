<?php

class OrderController extends Controller
{
	/*public function actionIndex()
	{
		$this->render('index');
	}*/

	public function actionResult(){
		
		if(isset($_GET)){
			$kassa = new Robokassa('vetalgal89', 'robopass1', 'robopass2', true);
			$kassa->OutSum = $_GET['OutSum'];
			$kassa->InvId = $_GET['InvId'];

			$kassa->addCustomValues(array('shp_order_id' => $_GET['shp_order_id']));

			if($kassa->checkHash(strip_tags($_GET['SignatureValue']))) echo "OK";
			else echo "Что-то пошло не так!";
		}

		Yii::app()->end();
	}

	public function actionSuccess(){
		
		if(isset($_GET)){
			$kassa = new Robokassa('vetalgal89', 'robopass1', 'robopass2', true);
			$kassa->OutSum = $_GET['OutSum'];
			$kassa->InvId = $_GET['InvId'];

			$kassa->addCustomValues(array('shp_order_id' => $_GET['shp_order_id']));

			//print_r($_GET); die();

			if($kassa->checkHash2($_GET['SignatureValue'])){
				$order = Orders::model()->findByPk($_GET['shp_order_id']);
				$order->status = 2; //Оплачен
				$order->update(array('status'));

				Yii::app()->user->setFlash('order-confirm','Спасибо, за заказ!');
				$this->redirect(array('/site/index'));
			}
			else{
				Yii::app()->user->setFlash('order-confirm','Ошибка!');
				$this->redirect(array('/site/index'));
			}
		}
		Yii::app()->end();
	}

	public function actionFail(){
		print_r($_REQUEST);
		Yii::app()->end();
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}