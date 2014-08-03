<?php

class SiteController extends Controller
{
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
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model = false;
		$proyekAktif = false;
		$pembayaranJatuhTempo = false;

		if(Yii::app()->user->isGuest) {
			$model = new LoginForm;
		} else {
			$model = false;
			$proyekAktif = new CActiveDataProvider('Proyek', array(
				'criteria'=>array(
					'condition'=>'aktif=:akt',
					'params'=>array(':akt'=>1)
				),
				'pagination' => array(
					 'pageSize' => 10,
				),
			));
		}
		
		$sqlpjt = "select id_detail_proyek as id, tanggal_jatuh_tempo,
			keterangan from tbl_detail_proyek where id_detail_proyek not in
			(select id_detail_proyek from tbl_pembayaran)";
		$sqpjtCount = "select count(*) from (".$sqlpjt.") as pjt";

		$count = Yii::app()->db->createCommand($sqpjtCount)->queryScalar();
		$pembayaranJatuhTempo = new CSqlDataProvider($sqlpjt, array(
			'TotalItemCount'=>$count,
			'sort'=>array(
				'attributes'=>array(
					'id_detail_proyek', 'tanggal_jatuh_tempo', 'keterangan',
				),
			),
			'pagination'=>array(
				'pageSize'=>10
			)
		));
		
		$this->render('index', array(
			'model'=>$model,
			'proyekAktif'=>$proyekAktif,
			'pembayaranJatuhTempo'=>$pembayaranJatuhTempo
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
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
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
