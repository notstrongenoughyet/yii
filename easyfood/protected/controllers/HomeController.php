<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("BaseController.php");

class HomeController extends BaseController
{
    public function actionIndex(){
       $this->render('index',array('asdf'=>3));
    }
    public function actionShow($number){
      $this->render('home', array('number' => $number));
    }
}
?>
