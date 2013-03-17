<?php
require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'extensions/less/lessc.inc.php';
class CssController extends CController
{
    public function actionRender(){
       $css_dir = dirname(__FILE__)."/../res/less/screen.less";
       $less = new lessc;
       header('Content-type: text/css');
       echo "@baseurl:asdfasdf; \n\r".$less->compileFile($css_dir);
    }

}




?>
