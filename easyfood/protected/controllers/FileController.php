<?php
class FileController extends CController
{
    public function actionImage($file,$path=""){
        
       $image_dir = 
        ($path == "" ? 
               dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'res'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR 
                    : 
                dirname(__FILE__).DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR
        ).$file;
       header('Content-Type: image/png');
      // echo $image_dir;
       return readfile($image_dir);
    }

}
?>
