<?php

namespace app\modules\admin\controllers;


use app\modules\admin\components;
use app\models\LoginForm;
use app\models\User;
// use app\Yii;

class DefaultController extends components\AdminController
{
    public function actionIndex()
    {
        $model= new LoginForm();
        $this->layout='main-login';
       
        // $model = new Status;
 
        // if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        //     // valid data received in $model
        //     return $this->render('login', ['model' => $model]);
        // } else {
        //     // either the page is initially displayed or there is some validation error
           
        // }
       
       
        if(isset($_POST['LoginForm']))
        {
            $user_info= $_POST['LoginForm'];
           // $b= $d['username'];
            //truy van sql if username== username(db) && pass = pass(db);
            // if('dang nhap thanh cong'){
            //   d');
            // }  $this->redirect('/Admin/default/dashboar
            $result= User::findOne([
                                        'username' =>$user_info['username'] ,
                                        'userpassword' => $user_info['password'],
                                    ]);
            if($result !=null){
                $this->redirect('/Admin/default/dashboard');
            }else{
                echo 'dang nhap khong thanh cong';
              }
        }

 return $this->render('login', ['model' => $model]);
       
         
    }

    public function actionCreate()
    {
        $model = new Status;
 
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model
            return $this->render('view', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('create', ['model' => $model]);
        }
    }

    public function actionTable()
    {
        return $this->render('table');
    }

    public function actionForm()
    {
        return $this->render('form');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionDashboard()
    {
        // $model= new LoginForm();
        // $this->layout='main';
        return $this->render('index');
    }

}
