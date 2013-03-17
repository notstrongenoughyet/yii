<?php
require "/../extensions/less/lessc.inc.php";
class CssController extends CController
{
    public function actionRender(){
       $css_dir = dirname(__FILE__)."/../res/less/screen.less";
       $less = new lessc;
       header('Content-type: text/css');
       echo $less->compileFile($css_dir);
    }

}




?>
