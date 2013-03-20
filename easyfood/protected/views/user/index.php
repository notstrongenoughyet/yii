<?php
    //echo $content->_id;
   // echo $content->_id;
    if(isset($content)){
        echo "Error: ".$content;
    }else{
        foreach($users as $user){
        echo $user->email."<br>";
        }
    }
?>