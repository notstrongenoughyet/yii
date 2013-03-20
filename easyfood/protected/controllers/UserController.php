<?php

//require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR."models/UserController.php");
require_once("BaseController.php");

class UserController extends BaseController
{
    public function actionIndex(){
        $this->_index();
    }
    
    public function _index(){
        $users = User::model()->findAll();
        $this->render('index',array('users'=>$users));
    }
    
    public function actionSave(){
        $users = User::model()->findAllByAttributes(array('email' => $_GET['email']));
        if(count($users) > 0){
            $this->render('index',array('users'=>$users,'content'=>"Email is taken.".' '.count($users)));
            return;
        }
        $model = new User();
        $model->first_name=$_GET['first_name'];
        $model->last_name=$_GET['last_name'];
        $model->email=$_GET['email'];
        $model->password=$_GET['password'];
        $model->save();
        $this->actionIndex();
    }
    
}

?>
